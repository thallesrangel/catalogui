@extends('template-default')

@section('content')
    @include('public.includes.navbar')

    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-5">
                <img class="img-fluid img-announcement-event" src="{{ asset('img/card') .'/'. $data->img_card }}">
            </div>
        </div>

        <div class="row text-center">
            <ul class="list-inline">
                <li class="list-inline-item"><a target="_blank" class="btn btn-sm btn-light disabled" href=""><i class="bi bi-share"></i> Compartilhar</a></li>
                <li class="list-inline-item"><a target="_blank" class="btn btn-sm btn-light disabled" href=""><i class="bi bi-bookmark-check"></i> Reivindicar</li>
                <li class="list-inline-item"><a target="_blank" class="btn btn-sm btn-outline-danger disabled" href=""><i class="bi bi-flag"></i> Denunciar</a></li>
            </ul>
        </div>

        <h2>{{ $data->title }}</h2>
        <p> {!! $data->description !!}</p>
        <h6 class="txt-green">{{ $data->category->name }} <i class="bi bi-caret-right"></i> {{ $data->subcategory->name }}</h6>
        
        <div class="row mt-5">
            <h4>Publicações</h4>
            @forelse($posts as $item)
                <div class="card col-md-4 card-announcement">
                    <img src="{{ asset('img/post') .'/'. $item->img_post }}" class="img-fluid">
                    <h4>{{ $item->title }}</h4>
                    <h5>{{ $item->value }}</h5>
                </div>
            @empty
                <h5>Não há publicações para este filtro.</h5>
            @endforelse
        </div>

        @if (!$coupons->isEmpty())
            <div class="row">
                <h4>Descontos</h4>
                @foreach($coupons as $item)
                    <div class="col-sm-12 col-md-3">
                        <div class="card card-coupom">
                            <div class="card-body">
                                <h4 class="card-title">{{ $item->name }}</h4>
                                <h5 class="card-subtitle mb-2 txt-green">{{ $item->code }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                @if(isset($item->link))
                                    <a target="_blank" href="{{ $item->link }}" class="card-link">Ver Cupom <i class="bi bi-caret-right"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        @if(isset($data->main_link))
            <div class="row space-3">
                <div class="text-center">
                    <a class="btn btn-outline-danger" href="{{ $data->main_link }}" target="_blank" name="main_link">{{ $data->title_main_link ?? 'Acessar' }}</a>
                </div>
            </div>
        @endif

        @if(isset($data->information))
            <div class="row div-info space-3">
                <h4>Informações</h4>
                <p>{!! $data->information !!}</p>
            </div>
        @endif
    </div>
@endsection