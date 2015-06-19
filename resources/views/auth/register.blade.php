@extends('auth')

@section('title')
注册
@endsection

@section('content')
  <p class="login-box-msg">请填写下面的信息</p>
  <form action="/auth/register" method="post">
    {!! csrf_field() !!}
    <div class="form-group has-feedback">
      <input type="text" name="name" class="form-control" placeholder="用户名" value="{{ old('name') }}">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="email" name="email" class="form-control" placeholder="邮箱" value="{{ old('email') }}">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" class="form-control" placeholder="密码">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password_confirmation" class="form-control" placeholder="确认密码">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">
      </div><!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">注册</button>
      </div><!-- /.col -->
    </div>
  </form><br>

  <div class="row">
    <div class="col-md-6">
      <a href="/password/email">忘记密码</a>
    </div>
    <div class="col-md-6 text-right">
      <a href="/auth/login">登录</a>
    </div>
  </div>
@endsection
