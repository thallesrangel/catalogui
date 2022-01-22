@extends('template-default')

@section('content')
    @include('public.includes.navbar')

    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-3">
                <img class="img-fluid img-announcement" src="{{ asset('img/thumbnails') .'/'. $data->img_profile }}">
            </div>

            <div class="col-sm-12 col-md-6 details-announcement">
                <h3>{{ $data->title }}</h3>
                <h6>{{ $data->category->name }}</h6>
                <a href="#" class="btn btn-sm btn-light disabled"><i class="bi bi-share"></i> Compartilhar</a>
                <a href="#" class="btn btn-sm btn-light disabled"><i class="bi bi-bookmark-check"></i> Reivindicar</a>
                <a href="#" class="btn btn-sm btn-outline-danger disabled"><i class="bi bi-flag"></i> Denunciar</a>
                <p> {!! $data->description !!}</p>
            </div>
        </div>

        <div class="row space-3">
            @foreach($posts as $item)
                <div class="card col-md-4 card-announcement">
                    <img src="{{ asset('img/post') .'/'. $item->img_post }}" class="img-fluid">
                    <h4>{{ $item->title }}</h4>
                    <h5>{{ $item->value }}</h5>
                </div>
            @endforeach
        </div>

        @if(isset($data->main_link))
            <div class="text-center">
                <a class="btn btn-outline-danger" href="{{ $data->main_link }}" target="_blank" name="main_link">{{ $data->title_main_link ?? 'Acessar' }}</a>
            </div>
        @endif

        @if(isset($data->information))
            <div class="row div-info space-3">
                <h4>Informações</h4>
                <p>{!! $data->information !!}</p>
            </div>
        @endif

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

        <div class="row space-3">
            <div class="col-md-6">
                <h4>Localização</h4>
                
                <ul class="list-group list-infos">
                    <li class="list-group-item">
                        <i class="bi bi-geo-alt"></i> 
                        {{ $data->cep ? $data->cep . ',' : '' }} 
                        {{ $data->street ? $data->street . ',' : '' }} 
                        {{ $data->number ? $data->number . ',' : '' }} 
                        {{ $data->district ? $data->district . ',' : '' }}
                        {{ $data->district ? $data->state_id . '-' : '' }}
                        {{ $data->district ? $data->city_id . '' : '' }}
                    </li>
                </ul>
                
                <h4>Contato</h4>
                <ul class="list-group list-infos">
                    @if($data->whatsapp)
                        <li class="list-group-item"><a target="_blank" href="https://wa.me/55{{ $data->whatsapp }}"><i class="bi bi-whatsapp"></i> {{ $data->whatsapp }}</a></li>
                    @endif

                    @if($data->tel)
                        <li class="list-group-item"><a target="_blank" href="tel:{{ $data->tel }}"><i class="bi bi-telephone"></i> {{ $data->tel }}</a></li>
                    @endif

                    @if($data->site)
                        <li class="list-group-item"><a target="_blank" href="{{ $data->site }}"><i class="bi bi-box-arrow-up-right"></i> {{ $data->site }}</a></li>
                    @endif

                    @if($data->facebook)
                        <li class="list-group-item"><a target="_blank" href="https://www.facebook.com/"><i class="bi bi-facebook"></i> {{ $data->facebook }}</a></li>
                    @endif

                    @if($data->instagram)
                        <li class="list-group-item"><a target="_blank" href="https://www.instagram.com/{{ $data->instagram }}"><i class="bi bi-instagram"></i> {{ $data->instagram }}</a></li>
                    @endif

                    @if($data->email)
                        <li class="list-group-item"><a href="mailto:{{ $data->email }}"><i class="bi bi-envelope"></i> {{ $data->email }}</a></li>
                    @endif
                </ul>

                <h4 class="space-3">Recomendações</h4>
                <p>Dê uma nota para sua experiência (Obrigatório)?</p>

                <div class="container parent">
                    <div class="row">
                        <div class='col text-center'>
                            <input type="radio" name="imgbackground" id="img1" class="d-none imgbgchk" value="">
                            <label for="img1">
                                <span>😞</span>
                                <h6>Horrível</h6>
                                <div class="tick_container">
                                    <div class="tick"><i class="bi bi-check"></i></div>
                                </div>
                            </label>
                        </div>

                        <div class='col text-center'>
                            <input type="radio" name="imgbackground" id="img2" class="d-none imgbgchk" value="">
                            <label for="img2">
                                <span>😔</span>
                                <h6>Ruim</h6>
                                <div class="tick_container">
                                    <div class="tick"><i class="bi bi-check"></i></div>
                                </div>
                            </label>
                        </div>

                        <div class='col text-center'>
                            <input type="radio" name="imgbackground" id="img3" class="d-none imgbgchk" value="">
                                <label for="img3"> 
                                <span>🙂</span>
                                <h6>Razoável</h6>
                                <div class="tick_container">
                                    <div class="tick"><i class="bi bi-check"></i></div>
                                </div>
                            </label>
                        </div>

                        <div class='col text-center'>
                            <input type="radio" name="imgbackground" id="img4" class="d-none imgbgchk" value="">
                            <label for="img4"> 
                                <span>😁</span>
                                <h6>Bom</h6>
                                <div class="tick_container">
                                    <div class="tick"><i class="bi bi-check"></i></div>
                                </div>
                            </label>
                        </div>

                        <div class='col text-center'>
                            <input type="radio" name="imgbackground" id="img5" class="d-none imgbgchk" value="">
                            <label for="img5"> 
                                <span>🤩</span>
                                <h6>Excelente</h6>
                                <div class="tick_container">
                                    <div class="tick"><i class="bi bi-check"></i></div>
                                </div>
                            </label>
                        </div>
                    
                    </div>
                    </div>

                <div class="mb-3 mt-3">
                    <textarea class="form-control" rows="5" cols="5" placeholder="Conte sobre sua experiência e dê sugestões"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

            <div class="col-md-6">
                <h4 class="space-3">Anúncios Relacionados</h4>
                
                <div class="col-md-7 col-sm-12">
                    <div class="list-main__item">
                        <a href="#" class="card-default">
                                                        
                            <img class="card-default__image lazy" src="https://imgprd.smartsupermercados.com.br/logoSmart.png" alt="">
                            <div class="card-default__content">
                            <div class="card-default__avatar-bg">
                                    <img class="card-default__avatar lazy" alt="" width="40px" src="http://guiacomercialaracruz.com.br/wp-content/uploads/cache/images/kinkas/kinkas-3109089609.png" style="">
                                </div>
                                <h4 class="card-default__title">Supermercado Kinkas</h4>
                                <span class="card-default__name">Fundão</span>
                                <div class="card-product__footer">
                                    <span class="card-product__label">2 Benefícios</span>
                                </div>								
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection