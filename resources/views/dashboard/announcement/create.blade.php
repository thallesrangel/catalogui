@extends('template-default')

@section('content')
    @include('dashboard.includes.navbar')

    <h3 class="space-3">Anunciar</h3>   

    <form method="post" action="{{ route('announcement.store') }}" enctype="multipart/form-data" class="form-announcement">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="title" class="form-label">Título *</label>
                <input type="text" class="form-control" id="title" name="title">
                <p class="txt-red">{{ $errors->first('title') }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <label for="description" class="form-label">Descrição *</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                <p class="txt-red">{{ $errors->first('description') }}</p>
            </div>
        </div>

        <h4>Categorias</h4>

        <div class="row">
            <div class="col-md-3">
                <label for="category" class="form-label">Categoria *</label>
                <select class="form-select" id="category" name="category_id">
                    <option value="">Escolha uma opção</option>
                    <option value="1">Imobiliário</option>
                    <option value="1">Saúde</option>
                    <option value="2">Esportes</option>
                    <option value="3">Serviços</option>
                </select>
                <p class="txt-red">{{ $errors->first('category') }}</p>
            </div>

            <div class="col-md-3">
                <label for="subcategory" class="form-label">Subcategoria *</label>
                <select class="form-select" id="subcategory" name="subcategory_id">
                    <option value="">Escolha uma opção</option>
                    <option value="1">Saúde</option>
                    <option value="2">Esportes</option>
                    <option value="3">Serviços</option>
                </select>
                <p class="txt-red">{{ $errors->first('subcategory') }}</p>
            </div>
        </div>

        <h4>Imagens</h4>

        <div class="row">
            <div class="col-md-4">
                <label for="imgInpProfile" class="form-label">Perfil do Anúncio *</label>
                <br>
                <button class="btn btn-light btn-file">
                    Escolher Imagem <input accept="image/*" id="imgInpProfile" type="file" name="img_profile">
                </button>
                <img class="img-fluid img-announcement-upload" id="idImgProfile" src="#" />
                <p class="txt-red">{{ $errors->first('img_profile') }}</p>
            </div>

            <div class="col-md-4">
                <label for="imgInpCard" class="form-label">Perfil do CARD *</label>
                <br>
                <button class="btn btn-light btn-file">
                    Escolher Imagem  <input accept="image/*" id="imgInpCard" type="file" name="img_card">
                </button>
                <img class="img-fluid img-announcement-upload" id="idImgCard" src="#" />
                <p class="txt-red">{{ $errors->first('img_card') }}</p>
            </div>
        </div>

        <h4>Contato</h4>

        <div class="row">
            <div class="col-md-3">
                <label for="email" class="form-label">Email *</label>
                <input type="email" class="form-control" id="email" name="email">
                <p class="txt-red">{{ $errors->first('email') }}</p>
            </div>

            <div class="col-md-2">
                <label for="tel" class="form-label">Telefone *</label>
                <input type="text" class="form-control" id="tel" name="tel">
                <p class="txt-red">{{ $errors->first('tel') }}</p>
            </div>

            <div class="col-md-2">
                <label for="whatsapp" class="form-label">WhatsApp</label>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp">
                <p class="txt-red">{{ $errors->first('whatsapp') }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="ex: GoogleBrasil">
                <p class="txt-red">{{ $errors->first('facebook') }}</p>
            </div>

            <div class="col-md-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="ex: @rangelthr">
                <p class="txt-red">{{ $errors->first('instagram') }}</p>
            </div>

            <div class="col-md-3">
                <label for="site" class="form-label">Link do Site</label>
                <input type="text" class="form-control" id="site" name="site" placeholder="ex: https://google.com.br">
                <p class="txt-red">{{ $errors->first('site') }}</p>
            </div>
        </div>

        <h4>Localização</h4>

        <div class="row">
            <div class="col-md-3">
                <label for="state_id" class="form-label">Estado *</label>
                <select class="form-select" id="state_id" name="state_id">
                    <option value="">Escolha uma opção</option>
                    <option value="1">Espírito Santo</option>
                </select>
                <p class="txt-red">{{ $errors->first('category') }}</p>
            </div>

            <div class="col-md-3">
                <label for="city_id" class="form-label">Cidade *</label>
                <select class="form-select" id="city_id" name="city_id">
                    <option value="">Escolha uma opção</option>
                    <option value="1">Fundão</option>
                </select>
                <p class="txt-red">{{ $errors->first('city_id') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label for="cep" class="form-label">CEP *</label>
                <input type="text" class="form-control" id="facebook" name="cep">
                <p class="txt-red">{{ $errors->first('cep') }}</p>
            </div>

            <div class="col-md-3">
                <label for="district" class="form-label">Bairro *</label>
                <input type="text" class="form-control" id="district" name="district">
                <p class="txt-red">{{ $errors->first('district') }}</p>
            </div>

            <div class="col-md-4">
                <label for="street" class="form-label">Logradouro *</label>
                <input type="text" class="form-control" id="street" name="street">
                <p class="txt-red">{{ $errors->first('street') }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="complement" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complement" name="complement">
                <p class="txt-red">{{ $errors->first('complement') }}</p>
            </div>

            <div class="col-md-1">
                <label for="number" class="form-label">Número *</label>
                <input type="text" class="form-control" id="number" name="number">
                <p class="txt-red">{{ $errors->first('number') }}</p>
            </div>
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
    
    <script type="text/javascript">
        imgInpProfile.onchange = evt => {
        const [file] = imgInpProfile.files
            if (file) {
                idImgProfile.src = URL.createObjectURL(file)
            }
        }

        imgInpCard.onchange = evt => {
        const [file] = imgInpCard.files
            if (file) {
                idImgCard.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection