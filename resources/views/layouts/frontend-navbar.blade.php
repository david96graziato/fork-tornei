{{--

Navbar-Top - EasyTemplate by Sindria Inc.

--}}

@section('navbar-top')
  <nav id="menu-top" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" title="{{ config('app.name') }}" href="{{ url('/') }}">
        {{ config('app.name') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" title="Home" href="https://tennisclubarzachena.it">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="Chi Siamo" href="https://tennisclubarzachena.it/about.php">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="News e Tornei" href="https://tennisclubarzachena.it/news.php">News e Tornei</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="Scuola" href="https://tennisclubarzachena.it/school.php">Scuola</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="Modulistica" href="https://tennisclubarzachena.it/module.php">Modulistica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" title="Contatti" href="https://tennisclubarzachena.it/contact.php">Contatti</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endsection
