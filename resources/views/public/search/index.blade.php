@extends('template-default')

@section('content')
    @include('public.includes.navbar')

    <div class="row div-filter d-flex justify-content-center">
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
            <select class="form-select" name="category">
                <option value="1">ES</option>
                <option value="1">SP</option>
            </select>
        </div>

        <div class="col-md-2 col-sm-12">
            <select class="form-select" name="category">
                <option value="1">Fundão</option>
            </select>
        </div>

        <div class="col-md-3 col-sm-12">
            <input class="form-control" type="search" placeholder="Busque o que desejar...">
        </div>

        <div class="col-md-1 col-sm-12">
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
        </div>
    </div>

    <div class="row space-3">
        @foreach($data as $item)
            <div class="col-md-3 col-sm-12">
                <div class="list-main__item">
                    <a href="{{ route('announcemen.datails', $item->slug) }}" class="card-default">
                                                    
                        <img class="card-default__image lazy" src="{{ asset('img/card') .'/'. $item->img_card }}" alt="">
                        <div class="card-default__content">
                        <div class="card-default__avatar-bg">
                                <img class="card-default__avatar lazy" alt="" width="40px" src="{{ asset('img/thumbnails') .'/'. $item->img_profile }}" style="">
                            </div>
                            <h4 class="card-default__title">{{ $item->title }}</h4>
                            <span class="card-default__name">{{ $item->city->name}} - {{ $item->state->abbreviation}}</span>
                            <div class="card-product__footer">
                                <span class="card-product__label">1 Benefício</span>
                            </div>								
                        </div>
                    </a>
                </div>
            </div>
       @endforeach
    </div>
    
@endsection