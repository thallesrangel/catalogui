@extends('template-default')

@section('content')
    @include('public.includes.navbar')
    <div class="div-filter">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-sm-12 col-md-6">
                <h1>Encontre Negócios, Serviços e Eventos</h1>
                <h4>Conheça detalhes e obtenha descontos</h4>
            </div>
            <div class="col-sm-12 col-md-4">
                <img class="img-fluid" src="{{ asset('img/bg-search.svg')}}">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row div-input-filter d-flex justify-content-center">
            <div class="col-md-2 col-sm-12">
                <select class="form-select" name="category">
                    <option value="1">Idioma</option>
                    <option value="1">São Paulo</option>
                </select>
            </div>

            <div class="col-md-2 col-sm-12">
                <select class="form-select" name="category">
                    <option value="1">Idioma</option>
                    <option value="1">São Paulo</option>
                </select>
            </div>

            <div class="col-md-1 col-sm-12">
                <select class="form-control" id="input-states" name="state_id">
                    <option value="">UF</option>
                    @foreach($states as $item)
                        <option value="{{ $item['sigla'] }}">{{ $item['sigla'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-3 col-sm-12">
                <select id="city" class="form-control" id="input-city" name="city_id" required>
                    <option value="">Selecione uma Cidade</option>
                </select>
                <p class="txt-red">{{ $errors->first('city_id') }}</p>
            </div>

            <div class="col-md-3 col-sm-12">
                <input class="form-control" type="search" placeholder="Busque o que desejar...">
            </div>

            <div class="col-md-1 col-sm-12">
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row space-3">
            
            @foreach($data as $item)
                <div class="col-md-3 col-sm-12 mt-5">
                    <div class="list-main__item">
                        <a href="{{ route('announcemen.datails', $item->slug) }}" class="card-default">
                                                        
                            <img class="card-default__image lazy" src="{{ asset('img/card') .'/'. $item->img_card }}" alt="">
                            <div class="card-default__content">
                            <div class="card-default__avatar-bg">
                                    <img class="card-default__avatar lazy" alt="" width="40px" src="{{ asset('img/thumbnails') .'/'. $item->img_profile }}" style="">
                                </div>
                                <h4 class="card-default__title">{{ $item->title }}</h4>
                                <span class="card-default__name">{{ $item->state_id}} - {{ $item->city_id }}</span>
                                <div class="card-product__footer">
                                    <span class="card-product__label">1 Benefício</span>
                                </div>								
                            </div>
                        </a>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
    
@endsection