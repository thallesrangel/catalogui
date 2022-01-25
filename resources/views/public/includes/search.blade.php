<form method="get" action="{{ route('search') }}" class="search-main">
    <h3 class="text-center">Onde você está?</h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-2 col-sm-6">
            <select class="form-control" id="input-states" name="state_id">
                <option value="">Estados</option>
                @foreach($states as $item)
                    <option value="{{ $item['sigla'] }}">{{ $item['nome'] }}</option>
                @endforeach
            </select>
            <p class="txt-red">{{ $errors->first('state_id') }}</p>
        </div>

        <div class="col-md-2 col-sm-6">
            <select id="city" class="form-control" id="input-city" name="city_id" required>
                <option value="">Cidades</option>
            </select>
            <p class="txt-red">{{ $errors->first('city_id') }}</p>
        </div>
    </div>
   
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-6">
            <input class="form-control me-2" type="search" name="title" placeholder="Qual experiência você busca hoje?">
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-md-3 mt-2 text-center">
            <button class="btn btn-lg btn-primary">Pesquisa Catalogui</button>
        </div>
    </div>
</form>
