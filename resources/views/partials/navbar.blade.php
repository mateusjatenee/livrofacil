<nav role="navigation">
  <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo"><img class="navbar-logo" src="/images/logo.png"></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="/">Início</a></li>
      <li><a href="books">Livros</a></li>
      @if(!Auth::check())
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Cadastro</a></li>
      @endif

    </ul>

    <ul id="nav-mobile" class="side-nav">
      <li><a href="#">Navbar Link</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
