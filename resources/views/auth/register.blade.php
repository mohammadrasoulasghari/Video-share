@extends('auth-layout')
@section('class-body','sing-up-page')
@section('content')
<div id="log-in" class="site-form log-in-form">
      
    <div id="log-in-head">
      <h1>ثبت نام</h1>
      <div id="logo"><a href="01-home.html"><img src="img/logo.png" alt=""></a></div>
  </div>
  
  <div class="form-output ">
    <x-validation-error>

    </x-validation-error>
      <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="form-group label-floating">
            <label class="control-label">نام</label>
            <input class="form-control" name="name" placeholder="" type="name">
        </div>
          <div class="form-group label-floating">
              <label class="control-label">ایمیل</label>
              <input class="form-control" name="email" placeholder="" type="email">
          </div>
          <div class="form-group label-floating">
              <label class="control-label">رمز عبور</label>
              <input class="form-control" name="password" placeholder="" type="password">
          </div>
          
          <div class="form-group label-floating">
              <label class="control-label">تأیید رمز عبور</label>
              <input class="form-control" placeholder="" name="password_confirmation" type="password">
          </div>

          
          
        <button type="submit" class="btn btn-lg btn-primary full-widt">ثبت نام</button>

        <div class="or"></div>

          <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>ورود با فیس بوک</a>

          <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fa fa-twitter" aria-hidden="true"></i>ورود با توییتر</a>


          <p>شما یک حساب کاربری دارید؟ <a href="{{ route('login.create') }}"> ورود!</a> </p>
      </form>
  </div>
</div>
<!--======= // log_in_page =======-->
@endsection