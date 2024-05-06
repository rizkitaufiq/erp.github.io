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
    <title>Document</title>
</head>
<body>
  <header class="main-header">
    <nav class="navbar navbar-static-top" role="navigation">
      <div class="header-full-right-dropdown">
  <li class="dropdown tasks-menu" style="list-style: none">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <button class="button-full-right-dropdown">Languange</button>
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
          <a href="../../index2.html"><b>@lang('System')</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
          <p class="login-box-msg">@lang('Sign_Title')</p>
          <form action="../../index2.html" method="post">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="@lang('Email')"/>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="@lang('Password')"/>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-8">    
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox"> @lang('Remember_Me')
                  </label>
                </div>                        
              </div><!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('Sign_Button')</button>
              </div><!-- /.col -->
            </div>
          </form>
  
          <div class="social-auth-links text-center">
            <p>- @lang('Or') -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
          </div><!-- /.social-auth-links -->
  
          <a href="#">@lang('I_Forgot_My_Password')</a><br>
          <a href="register.html" class="text-center">@lang('Register_A_New_Membership')</a>
  
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