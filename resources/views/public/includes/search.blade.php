<form method="post" action="#" class="search-main">
    <h3 class="text-center">Onde você está?</h3>
    <div class="d-flex justify-content-center">
        <div class="col-md-2 col-sm-12 p-2 ">
            <select class="form-control" id="input-states" name="state_id">
                <option value="">Selecione um Estado</option>
                @foreach($states as $item)
                    <option value="{{ $item['sigla'] }}">{{ $item['nome'] }}</option>
                @endforeach
            </select>
            <p class="txt-red">{{ $errors->first('state_id') }}</p>
        </div>

        <div class="col-md-2 col-sm-12 p-2">
            <select id="city" class="form-control" id="input-city" name="city_id" required>
                <option value="">Selecione uma Cidade</option>
            </select>
            <p class="txt-red">{{ $errors->first('city_id') }}</p>
        </div>
    </div>
   
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-6 p-2">
            <input class="form-control me-2" type="search" placeholder="Qual experiência você busca hoje?">
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-md-2 mt-2">
            <button class="btn btn-secondary input-block-level">Pesquisa Catalogui</button>
        </div>
    </div>
</form>
