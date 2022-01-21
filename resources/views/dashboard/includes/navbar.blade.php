<nav class="navbar">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img class="img-fluid" src="{{ asset('img/logo.png')}}" width="140" height="24">
        <span class="txt-green">Beta</span>
    </a>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">{{ session('user.name')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Sair</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-primary" href="{{ route('announcement.create') }}">Anunciar</a>
        </li>
    </ul>
</nav>