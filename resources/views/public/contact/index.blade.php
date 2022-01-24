@extends('template-default')

@section('content')
    @include('public.includes.navbar')

    <div class="container">
        <div class="row div-contact">
            <div class="col-md-6">
                <h1 class="space-3">Indique<br>
                    <b>Parceiros</b> <span class="txt-purple">Catalogui</span></h1>
                <p class="space-3">Uma plataforma para dispinibilizar informaçoes sobre os melhores negócios, eventos e serviços da sua cidade.</p>
                <ul class="list-group list-infos">
                    <li class="list-group-item"><i class="bi bi-geo-alt"></i> R. Praia das Dunas, 09 - Barra do Sahy, Aracruz - ES, 29198-153</li>
                    <li class="list-group-item"><i class="bi bi-phone"></i> (27) 99827-5832</li>
                    <li class="list-group-item"><i class="bi bi-envelope"></i> contato@catalogui.com</li>
                </ul>
            </div>

            <div class="col-md-5">
                <form method="POST" class="contact-form space-3">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="email" class="form-label">Nome do indicado *</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="email" class="form-label">Email do indicado *</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p class="form-label">Área de atuaçao do indicado *</p>
                            <input type="radio" class="m-2" name="acting" value="business"> Negócios
                            <input type="radio" class="m-2" name="acting" value="services"> Serviços
                            <input type="radio" class="m-2" name="acting" value="event"> Eventos
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="category" class="form-label">Categoria *</label>
                            <select class="form-select" id="category">
                                <option value="1">Imóvel</option>
                                <option value="1">Saúde</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="state" class="form-label">Estado *</label>
                            <select class="form-select" id="state">
                                <option value="1">Espírito Santo</option>
                                <option value="1">São Paulo</option>
                            </select>
                        </div>
        
                        <div class="col-md-6">
                            <label for="city" class="form-label">Cidade *</label>
                            <select class="form-select" id="city">
                                <option value="1">Fundão</option>
                                <option value="1">São Paulo</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="email" class="form-label">Mensagem *</label>
                            <textarea class="form-control" rows="5" cols="5"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary space-3">Enviar</button>
                </form>
            </div>
        </div>

    </div>

    <div class="container w-50">
        <h3 class="text-center">FAQ - Perguntas Frequentes</h3>
    </div>
@endsection