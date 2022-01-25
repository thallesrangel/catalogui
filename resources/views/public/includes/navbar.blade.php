




<div id="welcomeDiv"  style="display:none;" class="container-fluid menu-div" >
    
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-6 menu">
            <a onclick="outDiv()" href="#"><i class="bi bi-x-circle-fill"></i> Fechar</a>
            <div class="navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Indicar Parceiros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('search') }}">Pesquisar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Acessar sua Conta</a></li>
                </ul>
            </div>

            <ul class="list-inline social-menu">
                <li class="list-inline-item"><a target="_blank" href=""><i class="bi bi-whatsapp"></i></a></li>
                <li class="list-inline-item"><a target="_blank" href=""><i class="bi bi-facebook"></i></a></li>
                <li class="list-inline-item"><a target="_blank" href=""><i class="bi bi-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>


<nav class="navbar menu-navbar">
    <div class="container-fluid">
        <div class="navbar">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="img-fluid" src="{{ asset('img/logo.png')}}" width="140" height="24">
                <span class="txt-green">Beta</span>
            </a>
        </div>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('contact') }}">Indicar Parceiros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('search') }}">Pesquisar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-secondary" href="{{ route('login') }}">Acessar sua Conta</a>
            </li>
        </ul>

        <ul class="navbar-nav btn-open-menu ml-auto">
            <li class="nav-item">
                <a class="nav-link" onclick="showDiv()" href="#"><i class="bi bi-list"></i></a>
            </li>
        </ul>
    </div>
</nav>
