@extends('auth')

@section('title')
密码重置
@endsection

@section('content')
  <p class="login-box-msg">请填写新密码</p>
  <form action="/password/reset" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group has-feedback">
      <input type="email" name="email" class="form-control" placeholder="邮箱" value="{{ old('email') }}">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" class="form-control" placeholder="新密码">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password_confirmation" class="form-control" placeholder="确认新密码">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">
      </div><!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">重置密码</button>
      </div><!-- /.col -->
    </div>
  </form>
@endsection
