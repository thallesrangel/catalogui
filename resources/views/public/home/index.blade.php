@extends('template-default')

@section('content')
    @include('public.includes.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 banner-initial">
                <h1>Encontrar e Divulgar Negócios, Eventos e Serviços</h1>
                <p>Descontos que todo mundo curte e acessa de qualquer lugar.</p>
                <p>Acesse o perfil e fique por dentro de tudo.</p>
                <a href="{{ route('announcement.create') }}" class="btn btn-outline-primary">Anuncie agora</a>
            </div>

            <div class="col-md-6 d-flex justify-content-center align-itens-center">
                <img src="{{ asset('img/b.svg')}}" class="img-fluid" width="300">
            </div>
        </div>

        @include('public.includes.search')

        @include('public.includes.search_shortcut')

        <h3 class="text-center space-3">Confira os Próximos Eventos</h3>

        <div class="row">
            <div class="list-main">
                <div class="col-md-3 col-sm-12">
                    <div class="list-main__item">
                        <a href="#" class="card-default">
                                                        
                            <img class="card-default__image_event lazy" src="https://images.sympla.com.br/60881b80a83b9-xs.png" alt="">
                            <div class="card-default__content_event">
                                <h4 class="card-default__title">Conferencia Save The Date</h4>				
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="text-center space-3">Destaques</h3>


        <div class="row">
            <h4 class="space-3">Idiomas</h4>

            <div class="col-md-3 col-sm-12">
                <div class="list-main__item">
                    <a href="#" class="card-default">
                                                    
                        <img class="card-default__image lazy" src="https://www.ccaa.com.br/wp-content/uploads/2021/05/CCAA_destaque_1200x630.png" alt="">
                        <div class="card-default__content">
                        <div class="card-default__avatar-bg">
                                <img class="card-default__avatar lazy" alt="" width="40px" src="https://clube-static.clubegazetadopovo.com.br/parceiros/811580140956341.png" style="">
                            </div>
                            <h4 class="card-default__title">CCAA</h4>
                            <span class="card-default__name">Fundão</span>
                            <div class="card-product__footer">
                                <span class="card-product__label">1 Benefício</span>
                            </div>								
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="list-main__item ">
                    <a href="#" class="card-default">
                                                    
                        <img class="card-default__image lazy" src="https://www.meioemensagem.com.br/wp-content/uploads/2016/10/Logo_Wizard-destaque.png" alt="">
                        <div class="card-default__content">
                        <div class="card-default__avatar-bg">
                                <img class="card-default__avatar lazy" alt="" width="40px" src="https://cdn.wizard.com.br/wp-content/uploads/2019/10/01155611/logo-aguia-wizard-by-pearson-idiomas.png" style="">
                            </div>
                            <h4 class="card-default__title">Wizard</h4>
                            <span class="card-default__name">Aracruz</span>
                            <div class="card-product__footer">
                                <span class="card-product__label">1 Benefício</span>
                            </div>								
                        </div>
                    </a>
                </div>
            </div>

            <h4 class="space-3">Frigorífico</h4>
            
            <div class="col-md-3 col-sm-12">
                <div class="list-main__item ">
                    <a href="#" class="card-default">
                                                    
                        <img class="card-default__image lazy" src="http://www.frigorificoforteboi.com.br/img/slide1.jpg" alt="">
                        <div class="card-default__content">
                        <div class="card-default__avatar-bg">
                                <img class="card-default__avatar lazy" alt="" width="40px" src="http://www.frigorificoforteboi.com.br/img/logo_rodape.png" style="">
                            </div>
                            <h4 class="card-default__title">Forte Boi</h4>
                            <span class="card-default__name">Fundão</span>
                            <div class="card-product__footer">
                                <span class="card-product__label">2 Benefícios</span>
                            </div>								
                        </div>
                    </a>
                </div>
            </div>

            <h4 class="space-3">Supermercado</h4>

            <div class="col-md-3 col-sm-12">
                <div class="list-main__item ">
                    <a href="#" class="card-default">
                                                    
                        <img class="card-default__image lazy" src="https://lh3.googleusercontent.com/EWjnnnTFZmuLOsvU-8TpQh-ncw3ZarDu0lrSEdbg6JaoUKDw8I4PyMZaSCXHGAYewXFgF3Bv0w=w1080-h608-p-no-v0" alt="">
                        <div class="card-default__content">
                        <div class="card-default__avatar-bg">
                                <img class="card-default__avatar lazy" alt="" width="40px" src="https://static-images.ifood.com.br/image/upload/t_thumbnail/logosgde/0bcb9a69-edf9-4538-b92f-8f4d2ed906c6/202004091630_QVqV_i.png" style="">
                            </div>
                            <h4 class="card-default__title">Supermercado Central</h4>
                            <span class="card-default__name">Fundão</span>
                            <div class="card-product__footer">
                                <span class="card-product__label">10 Benefícios</span>
                            </div>								
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
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

@endsection