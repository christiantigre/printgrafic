<div class="container">
  <div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">My Store</a>
  </div>

  <div class="collapse navbar-collapse js-navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos</a>
      </li>
      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicio</a>        			
      </li>
      <li><a href="#">Catálogo</a></li>
      <li><a href="#">Portafolio</a></li>
      <li><a href="#">PrintGráfic</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mi cuenta<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Iniciar sesion</a></li>
          <li><a href="{{ url('/register') }}">Crear Cuenta</a></li>
          @else
          <li><a href="/home">{{ Auth::user()->name }}</a></li>
          @endif
        </ul>
      </li>
    </ul>
  </div><!-- /.nav-collapse -->
</div>