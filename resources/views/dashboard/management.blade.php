@extends('template-default')

@section('content')
    @include('dashboard.includes.navbar')

    <div class="container">
        <h3 class="space-3">Gerenciar Anúncio</h3>   
        <h5 class="mb-3">Publicações</h5>
        <div class="container">

            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever=""><i class="bi bi-plus-square"></i> Adicionar publicação</button>

            <form action="{{ route('management.post.store', request()->route('id')) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="announcement_id" value="{{ request()->route('id') }}" />

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Adicionar Publicação</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-2">
                                <label for="imgInpPost" class="form-label">Perfil do Anúncio *</label>
                                <br>
                                <button class="btn btn-light btn-file">
                                    Escolher Imagem <input accept="image/*" id="imgInpPost" type="file" name="img_post" required>
                                </button>
                                <br>
                                <img class="img-fluid img-announcement-upload" id="idImgPost" src="#" />
                                <p class="txt-red">{{ $errors->first('img_post') }}</p>
                            </div>
                    
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Título</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="Ex: Cervejas" name="title">
                            </div>
                            <div class="mb-2">
                                <label for="recipient-name" class="col-form-label">Valor:</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="Ex: A partir de R$ 10,00" name="value">
                            </div>

                            <div class="mt-3">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-outline-success">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="row mb-5">
                @foreach($posts as $item)
                    <div class="card col-md-4 card-announcement">
                        <img src="{{ asset('img/post') .'/'. $item->img_post }}" class="img-fluid" />
                        <h4>{{ $item->title }}</h4>
                        <h5>{{ $item->value }}</h5>
                        
                        <ul class="list-inline ">
                            <li class="list-inline-item"><a class="txt-red" href="#"><i class="bi bi-x-lg"></i> Excluir</a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <br>

        <h5 class="mb-3">Cupons de Descontos</h5>
        <div class="container">
            
            <button type="button" class="btn btn-outline-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalCoupon" data-bs-whatever=""><i class="bi bi-plus-square"></i> Adicionar publicação</button>
        
            <form action="{{ route('management.coupon.store', request()->route('id')) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="announcement_id" value="{{ request()->route('id') }}">

                <div class="modal fade" id="modalCoupon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Adicionar Cupom</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-2">
                                <label for="coupon-name" class="col-form-label">Nome *</label>
                                <input type="text" class="form-control" id="coupon-name" placeholder="Ex: 30% OFF" name="name" required>
                                <p class="txt-red">{{ $errors->first('name') }}</p>
                            </div>
                            <div class="mb-2">
                                <label for="coupon-code" class="col-form-label">Código</label>
                                <input type="text" class="form-control" id="coupon-code" placeholder="Ex: NEW2022" name="code">
                            </div>

                            <div class="mb-2">
                                <label for="coupon-description" class="col-form-label">Descrição</label>
                                <textarea class="form-control" id="coupon-description" name="description"></textarea>
                            </div>

                            <div class="mb-2">
                                <label for="coupon-link" class="col-form-label">Link</label>
                                <input type="text" class="form-control" id="coupon-link" placeholder="Ex: https://google.com.br" name="link">
                            </div>

                            <div class="mt-3">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-outline-success">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        
        <div class="row">
            @foreach($coupons as $item)
                <div class="col-sm-12 col-md-3">
                    <div class="card card-coupom">
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->name }}</h4>
                            <h5 class="card-subtitle mb-2">{{ $item->code }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            @if(isset($item->link))
                                <a target="_blank" href="{{ $item->link }}" class="card-link">Ver Cupom <i class="bi bi-caret-right"></i></a>
                            @endif
                        </div>
                    </div>
                    <ul class="list-inline ">
                        <li class="list-inline-item"><a class="txt-red" href="#"><i class="bi bi-x-lg"></i> Excluir</a></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>


    
    <script type="text/javascript">
        imgInpPost.onchange = evt => {
        const [file] = imgInpPost.files
        if (file) {
            idImgPost.src = URL.createObjectURL(file)
            }
        };
    </script>
@endsection
