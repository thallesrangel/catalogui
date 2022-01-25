@extends('template-default')

@section('content')
    @include('public.includes.navbar')
    
        <div class="row align-items-center justify-content-center mt-5">
            <div class="col-sm-12 col-md-8 div-search">
                <h1>Encontre Negócios, Eventos e Serviços</h1>
                <h4>Conheça detalhes e obtenha descontos</h4>
            </div>
        </div>
    
    <div class="container div-input-filter">
        <form method="get" action="{{ route('search') }}">
            <div class="row d-flex justify-content-center">
                <div class="col-md-2 col-sm-12">
                    <select class="form-control" id="input-category" name="category_id">
                        <option value="">Categoria</option>
                        @foreach($category as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </select>
                    <p class="txt-red">{{ $errors->first('category') }}</p>
                </div>

                <div class="col-md-2 col-sm-12">
                    <select class="form-select" id="input-subcategory" name="subcategory_id">
                        <option value="">Subcategoria</option>
                    </select>
                    <p class="txt-red">{{ $errors->first('subcategory') }}</p>
                </div>

                <div class="col-md-1 col-sm-12">
                    <select class="form-control" id="input-states" name="state_id">
                        <option value="">UF</option>
                        @foreach($states as $item)
                            <option value="{{ $item['sigla'] }}">{{ $item['sigla'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 col-sm-12">
                    <select id="city" class="form-control" id="input-city" name="city_id">
                        <option value="">Cidades</option>
                    </select>
                    <p class="txt-red">{{ $errors->first('city_id') }}</p>
                </div>

                <div class="col-md-3 col-sm-12">
                    <input class="form-control" type="search" name="title" placeholder="Busque o que desejar...">
                </div>

                <div class="col-md-1 col-sm-12">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>
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
                                <h6 class="txt-green">{{ $item->category->name }} <i class="bi bi-caret-right"></i> {{ $item->subcategory->name }}</h6>
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
    
    <script src="{{ asset('/js/selectSubCategory.js') }}"></script>
@endsection