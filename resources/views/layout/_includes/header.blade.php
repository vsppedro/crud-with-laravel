<!DOCTYPE html>
<html>
<head>
  <!--Título da página -->
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<header>
  @if(Auth::guest())
  @else
  <!-- Dropdown Structure Usuario -->
  <ul id="dropdownUsuario" class="dropdown-content">
    <li><a href="{{ route('admin.usuario.editar', Auth::user()->id) }}">Editar conta</a></li> 
    <li class="divider"></li>
    <li><a href="{{route('site.login.sair')}}">Sair</a></li>
    <li class="divider"></li>
    <li><a href="{{route('admin.usuario.deletar', Auth::user()->id)}}">Excluir Registro</a></li>
  </ul>
  
  <!-- Dropdown Structure Eventos -->
  <ul id="dropdownEventos" class="dropdown-content">
    <li><a href="{{route('admin.eventos')}}">Meus Eventos</a></li>
    <li><a href="{{route('admin.interesse')}}">Lista de Interesse</a></li>
  </ul>
  @endif
  
  <nav>
    <div class="nav-wrapper deep-orange">
      <div class="container">
        <a href="#!" class="brand-logo">Marca aí</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/">Home</a></li>
          @if(Auth::guest())
            <li><a href="{{route('login')}}">Login</a></li>
          @else
            <!-- Dropdown Trigger Eventos -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdownEventos">Eventos<i class="material-icons right">arrow_drop_down</i></a></li>
            <!-- Dropdown Trigger Usuario -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdownUsuario">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
          @endif
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="/">Home</a></li>
          @if(Auth::guest())
            <li><a href="{{route('login')}}">Login</a></li>
          @else
            <li><a href="{{route('admin.eventos')}}">Eventos</a></li>
            <li><a href="#">{{Auth::user()->name}}</a></li>
            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>