@extends('template-dashboard')

@section('content')
    @include('dashboard.includes.navbar')

    <div class="container">
        <h4 class="space-3">Meus Anúncio</h4>
        <ul class="list-inline list-menu-my-announcement">
            <li class="list-inline-item"><a href="{{ route('dashboard') }}">Publicados</a></li>
            <li class="list-inline-item"><a href="?status=aguardando">Aguardando Publicação</a></li>
            <li class="list-inline-item"><a href="?status=inativos">Inativos</a></li>
            <li class="list-inline-item"><a href="?status=expirados">Expirados</a></li>
        </ul>

        @switch( request()->get('status') )
            @case('aguardando')
                <span class="alert-orange">Os anúncios abaixo serão processados. Acompanhe o status do seu anúncio.</span>
                <p class="txt-orange space-3"><i class="bi bi-alarm"></i> AGUARDANDO PUBLICAÇÃO</p>

                @foreach($data as $item)
                    <div class="row itens-my-announcement">
                        <div class="col-md-2 d-flex justify-content-center">
                            <img class="img-fluid" src="{{ asset('img/thumbnails') .'/'. $item->img_profile }}">
                        </div>
                
                        <div class="col-md-6">
                            <h4>{{ $item->title }}</h4>
                            <h6 class="txt-green">{{ $item->category->name }} <i class="bi bi-caret-right"></i> {{ $item->subcategory->name }}</h6>
                            <p><i class="bi bi-calendar-week"></i> {{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }} ás {{ Carbon\Carbon::parse($item->created_at)->format('H:s') }}</p>
                        </div>
                    </div>
                @endforeach
                @break
            @case('expirado')
                
                @break
            @default
                
                <p class="txt-green"><i class="bi bi-check-all"></i> PUBLICADOS</p>
                
                @foreach($data as $item)
                    <div class="row itens-my-announcement">
                        <div class="col-sm-12 col-md-2">
                            <img class="img-fluid" src="{{ asset('img/thumbnails') .'/'. $item->img_profile }}">
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <a href="{{ route('announcemen.datails', $item->slug ) }}" class="h4">{{ $item->title }}</a>
                            <h6 class="txt-green">{{ $item->category->name }} <i class="bi bi-caret-right"></i> {{ $item->subcategory->name }}</h6>
                            <p><i class="bi bi-calendar-week"></i> {{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }} ás {{ Carbon\Carbon::parse($item->created_at)->format('H:s') }}</p>

                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="txt-green" href="{{ route('management', $item->id) }}"><i class="bi bi-speedometer2"></i> Gerenciar</a></li>
                                <!-- <li class="list-inline-item"><a href="#"><i class="bi bi-pencil-square"></i> Editar</a></li> -->
                                <li class="list-inline-item"><a class="txt-red" href="#"><i class="bi bi-x-lg"></i> Inativar</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-12 col-md-2">
                            <h5>Destaque Básico</h5>
                            <h4>R$ 19,99</h4>
                            <a class="btn btn-outline-primary" href="#">Decolar!</a>
                        </div>

                        <div class="col-sm-12 col-md-2">
                            <h5>Destaque Premium</h5>
                            <h4>R$ 29,99</h4>
                            <a class="btn btn-outline-primary" href="#">Decolar!</a>
                        </div>

                        <div class="col-sm-12 col-md-2">
                            <h5>Destaque PRO</h5>
                            <h4>R$ 39,99</h4>
                            <a class="btn btn-outline-primary" href="#">Decolar!</a>
                        </div>
                    </div>
                @endforeach
        @endswitch
    </div>
@endsection