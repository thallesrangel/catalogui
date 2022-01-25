<nav class="navbar">
    <a class="navbar-brand" href="{{ route('dashboard') }}">
        <img class="img-fluid" src="{{ asset('img/logo.png')}}" width="140" height="24">
        <span class="txt-green">Beta</span>
    </a>
    <ul class="nav nav-dash-admin">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}" title="Início"><i class="bi bi-house"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" title="Sair"><i class="bi bi-box-arrow-right"></i></a>
        </li>
        @if(session('user.role') != 'admin' )
            <li class="nav-item">
                <a class="nav-link btn btn-primary" href="{{ route('announcement.create') }}">Anunciar</a>
            </li>
        @endif
    </ul>
</nav>