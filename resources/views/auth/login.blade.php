@extends('auth-layout')
@section('class-body','log_in_page')
@section('content')
    <div id="log-in" class="site-form log-in-form">
      
        <div id="log-in-head">
          <h1>ورود</h1>
          <div id="logo"><a href="01-home.html"><img src="img/logo.png" alt=""></a></div>
      </div>
      
      <div class="form-output">
        <x-validation-error>

        </x-validation-error>
          <form action="{{ route('login.store') }}" method="POST">
            @csrf
              <div class="form-group label-floating">
                  <label class="control-label">ایمیل</label>
                  <input class="form-control" placeholder="" name="email" type="email">
              </div>
              <div class="form-group label-floating">
                  <label class="control-label">رمز عبور</label>
                  <input class="form-control" placeholder="" name="password" type="password">
              </div>
              
              <div class="checkbox">
            <label>
                <input name="remember" type="checkbox">
                    مرا به خاطر بسپار
            </label>
        </div>
              
              <button type="submit" class="btn btn-lg btn-primary full-width">login</button>
              <p>آیا شما یک حساب کاربری ندارید؟ <a href="{{ route('register.create') }}">ثبت نام کنید!</a> </p>
          </form>
      </div>
    </div>
   
@endsection


