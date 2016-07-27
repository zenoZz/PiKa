<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <!-- Bootstrap 3.3.4 -->


    <link href="{{ asset("/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset("/AdminLTE/lib/font-awesome/4.3.0/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset("/AdminLTE/lib/ionicons/2.0.1/css/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!--表单验证样式-->
    <link rel="stylesheet" type="text/css" href="{{ asset("/lib/css/form_v.css") }}">
    <!-- jQuery 2.1.4 -->
    <script src="{{ asset ("/AdminLTE/plugins/jQuery/jQuery-2.2.3.min.js") }}"></script>
</head>
<body class="login-page">
@include('layouts.topInfo')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">后台管理系统</p>
        <form action="/auth/login" method="post" class="cmxform" id="loginForm">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email" required title="请输入登录邮箱" value="{{ old('email') }}"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password" required title="请输入密码"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div><!-- /.col -->
            </div>
        </form>

        <a href="javascript:void (0)">忘记密码?</a><br>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset ("/lib/js/jquery.validate.min.js" ) }}"></script>
<script>
    $(function () {
        //$("#loginForm").validate();

    });
</script>
</body>
</html>