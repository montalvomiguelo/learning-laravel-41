<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Jumbotron Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('bootstrap/css/jumbotron.css') }}" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Project name</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
      @if (Auth::check())
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="icon icon-wh i-profile"></span> {{ Auth::user()->full_name }}  <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('profile') }}">Editar perfil</a></li>
              <li><a href="{{ route('account') }}">Editar usuario</a></li>
              <li><a href="{{ route('logout') }}">Salir</a></li>
            </ul>
          </li>
        </ul>
       @else
        {{ Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => 'navbar-form navbar-right']) }}
          @if (Session::has('login_error'))
          <span class="label label-danger">Credenciales no válidas</span>
          @endif;
          <div class="form-group">
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
          </div>
          <div class="form-group">
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
          </div>
          <div class="checkbox">
            <label class="remember-me">
              {{ Form::checkbox('remember') }} Recordarme
            </label>
          </div>
          <button type="submit" class="btn btn-success">Sign in</button>
        {{ Form::close() }}
      @endif
      </div><!--/.navbar-collapse -->
    </div>
  </nav>

<?php
  /**
   * De la sintaxis de blade, el motor de templates de laravel
   * aquí se incluye el contenido.
   */
?>
@yield('content')

  <div class="container">
    <footer>
      <p>&copy; Company 2014</p>
    </footer>
  </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>