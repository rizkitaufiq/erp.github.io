<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="../../plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <title>@lang('Register_Domain_Title')</title>
</head>
<body>
  <header class="main-header">
    <nav class="navbar navbar-static-top" role="navigation">
      <div class="header-full-right-dropdown">
  <li class="dropdown tasks-menu" style="list-style: none">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <button class="button-full-right-dropdown">@lang('Language')</button>
    </a>
    <ul class="dropdown-menu">
      @foreach (config('localization.locales') as $locale)
        <li>
          <a href="{{ route('localization', $locale)  }}">{{ __($locale) }}</a>
        </li>    
      @endforeach
    </ul>
  </li>
</div>
</nav>
  </header>

    <div class="login-box">
        <div class="login-logo">
          <a href="../../index2.html"><b>@langUpper('System')</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
          <p class="login-box-msg">@lang('Register_Title')</p>

          <form action="{{ route('registration.process') }}" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="@lang('Name')" name="name" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                
                @error('name')
                  <span class="alert" style="color: brown">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="@lang('Email')" name="email" />
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

              @error('email')
                  <span class="alert" style="color: brown">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="@lang('Password')" name="password" />
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>

               @error('password')
                  <span class="alert" style="color: brown">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="row">
              
              <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('Register_Button')</button>
              </div><!-- /.col -->
            
            </div>
          </form>
  
          <div class="social-auth-links text-center">
            <p>- @lang('Or') -</p>
          </div>
  
          <a href="{{ route('login.page') }}">@lang('I_Have_An_Account')</a><br>
  
        </div><!-- /.login-box-body -->
      </div><!-- /.login-box -->
  
      <!-- jQuery 2.1.3 -->
      <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
      <!-- Bootstrap 3.3.2 JS -->
      <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- iCheck -->
      <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
      <script>
        $(function () {
          $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
          });
        });
      </script>
</body>
</html>