@extends('template-blank')

@section('content')
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-sm-12 col-md-3 text-center">
          <img src="{{ asset('img/logo.png') }}" class="img-fluid space-3">
          <span class="txt-green">Beta</span>

          <form method="POST" class="div-login" action="{{ route('login.authenticate') }}">
            @csrf 
            <p class="space-3">Entrar no Catalogui</p>
            <div class="form-group space-3">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
              <p class="txt-red">{{ $errors->first('email') }}</p>
              <p class="txt-red">{{ $errors->first('fail') }}</p>
            </div>
            <div class="form-group space-3">
              <input type="password" name="password" class="form-control" placeholder="Senha" required>
              <p class="txt-red">{{ $errors->first('password') }}</p>
            </div>
            <div class="text-center">
              <button class="btn btn-lg btn-primary w-100" type="submit">Entrar</button>
              <a class="btn btn-link" href="#"><i class="bi bi-key"></i> Recuperar</i></a>
              <hr>
              <a href="{{ route('user.create') }}" class="btn btn-lg btn-success">Criar Conta</a>
            </div>
          </form> 
        </div>
    </div>

@endsection
