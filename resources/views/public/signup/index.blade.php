@extends('template-blank')

@section('content')
    
<div class="row h-100 justify-content-center align-items-center">
    <div class="col-sm-12 col-md-3">
        <div class="text-center">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid space-3">
        </div>
            
        <form class="col-md-12 div-login" action="{{ route('user.store') }}" method="POST">
            <h2>Cadastre-se</h2>
            <p>É rapido e fácil.</p>
            @csrf
            
            <div class="form-group space-3">
                <input type="text" name="name" class="form-control" placeholder="Nome">
                <p class="txt-red">{{ $errors->first('name') }}</p>
            </div>

            <div class="form-group space-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <p class="txt-red">{{ $errors->first('email') }}</p>
            </div>
            
            <div class="form-group space-3">
                <input type="text" name="document" class="form-control cpfOuCnpj" placeholder="CPF / CNPJ">
                <p class="txt-red">{{ $errors->first('document') }}</p>
            </div>

            <div class="form-group space-3">
                <input type="password" name="password" class="form-control" placeholder="Senha">
                <p class="txt-red">{{ $errors->first('password') }}</p>
            </div>
            <button class="btn btn-lg btn-primary w-100" type="submit">Tudo Pronto!</button>
        </form>
    </div>
</div>  

@endsection