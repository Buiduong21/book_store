<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Validation\Validate;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function post_register(Request $req)
    {
        $req->validate([
            'password' => 'required|min:8|max:50',
            'email' => 'required|min:8|max:50',
            'name' => 'required|min:8|max:50',
            'confim_Password' => 'required|same:password',
        ]);

        $data = $req->only('name', 'email', 'address');
        $data['password'] = bcrypt($req->password);
        if (User::create($data)) {
            return redirect()->route('user.login');
        } else {
            return redirect()->back();
        }
    }

    public function login()
    {
        return view('user.login');
    }

    public function post_login(Request $req)
    {
        $req->validate([
            'password' => 'required|min:8',
            'email' => 'required|min:8',
        ]);
        $data = $req->only('password', 'email');
        $check = auth()->guard()->attempt($data);
        if ($check) {
                return redirect()->route('user.home');
        } else {
                return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->guard()->logout();
        return redirect()->route('user.home');
    }
}
