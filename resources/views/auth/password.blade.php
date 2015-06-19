@extends('auth')

@section('title')
忘记密码
@endsection

@section('content')
  <p class="login-box-msg">请填写邮箱以便我们给您发送密码重置链接</p>
  <form action="/password/email" method="post">
    {!! csrf_field() !!}
    <div class="form-group has-feedback">
      <input type="email" name="email" class="form-control" placeholder="邮箱" value="{{ old('email') }}">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">
      </div><!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">发送链接</button>
      </div><!-- /.col -->
    </div>
  </form><br>

  <div class="row">
    <div class="col-md-6">
      <a href="/auth/register">注册新用户</a>
    </div>
    <div class="col-md-6 text-right">
      <a href="/auth/login">登录</a>
    </div>
  </div>
@endsection
