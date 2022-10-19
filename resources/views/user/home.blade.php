<h1>trang chủ</h1>

@if(auth()->guard()->check())
    <a>Tên người dùng:{{auth()->guard()->user()->name}}</h1>
    <a href="{{route('user.logout')}}">thoát</a>
@else
    <a href="{{route('user.register')}}">Đăng ký</a>
    <a href="{{route('user.login')}}">Đăng nhập</a>
@endif

