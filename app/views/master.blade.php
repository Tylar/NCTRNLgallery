<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NCTRNL</title>
 
  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  {{ HTML::style('css/foundation.css') }}
  {{ HTML::style('css/normalize.css')}}
  {{ HTML::style('css/skin.css')}}
 
  <script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>
 
</head>
<body>
 
<nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">NCTRNL</a></h1>
        </li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li class="nav-bar-button"><a href="#" data-reveal-id="registrationModal">Register</a></li>
          <li class="nav-bar-button"><a href="#" data-reveal-id="loginModal">Login</a></li>
        </ul>
      </section>

      <section class="top-bar-section">
        <ul class="left">
          <li class="nav-bar-button"><a href="{{ url('', $parameters = array(), $secure = null); }}">Home</a></li>
        </ul>
      </section>
    </nav>

    <div class="row">&nbsp;</div>

    <div class="row">
        <div class="small-12"><div class="panel">@yield('content')</div></div>
    </div>


    <!-- Here be hidden divs -->
    <div id="registrationModal" class="reveal-modal" data-reveal>
      <h1>Registration form</h1>
        {{ Form::open(array('url' => 'users/register')) }}
          {{ Form::text('username', $value = null, array('placeholder' => 'Username')) }}
          {{ Form::text('password', $value = null, array('placeholder' => 'Password')) }}
          {{ Form::text('email', $value = null, array('placeholder' => 'Email')) }}
          {{ Form::submit('Register!', array('class' => 'small button')) }}
        {{ Form::close() }}
    </div>

    <div id="loginModal" class="reveal-modal" data-reveal>
      <h1>Login</h1>
        {{ Form::open(array('url' => 'users/auth')) }}
          {{ Form::text('username', $value = null, array('placeholder' => 'Username')) }}
          {{ Form::text('password', $value = null, array('placeholder' => 'Password')) }}
          {{ Form::submit('Go!', array('class' => 'small button')) }}
        {{ Form::close() }}
    </div>

 
  <script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
  <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>