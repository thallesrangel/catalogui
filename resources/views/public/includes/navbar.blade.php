<nav class="navbar">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img class="img-fluid" src="{{ asset('img/logo.png')}}" width="140" height="24">
        <span class="txt-green">Beta</span>
    </a>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('contact') }}">Indicar  Parceiros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('search') }}">Filtros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-outline-secondary" href="{{ route('login') }}">Acessar sua Conta</a>
        </li>
    </ul>
</nav>