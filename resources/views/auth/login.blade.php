@extends('auth')

@section('title')
登录
@endsection

@section('content')
  <p class="login-box-msg">欢迎回来，请先登录</p>
  <form action="/auth/login" method="post">
    {!! csrf_field() !!}
    <div class="form-group has-feedback">
      <input type="email" name="email" class="form-control" placeholder="邮箱">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" class="form-control" placeholder="密码">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">
        <div class="checkbox icheck">
          <label>
            <input type="checkbox" name="remember"> 记住我
          </label>
        </div>
      </div><!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
      </div><!-- /.col -->
    </div>
  </form><br>

  <div class="row">
    <div class="col-md-6">
      <a href="/password/email">忘记密码</a>
    </div>
    <div class="col-md-6 text-right">
      <a href="/auth/register">注册新用户</a>
    </div>
  </div>
@endsection
