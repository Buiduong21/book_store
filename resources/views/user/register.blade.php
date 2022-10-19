<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="container " class="py-5">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h1 class="mt-5">Đăng ký tài khoản</h1>
                <form method="POST">
                    @csrf
                    <div class="row" class="mt-5 mb-5">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                <small class="help-block">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email">
                                @error('email')
                                <small class="help-block">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password">
                                @error('password')
                                <small class="help-block">{{$message}}</small>
                                @enderror
                            </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Confim_Password</label>
                                <input type="password" class="form-control" name="confim_Password">
                                @error('confim_Password')
                                <small class="help-block">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('user.login')}}" class="text-right">Đăng nhập</a>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary text-center">Đăng ký</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>