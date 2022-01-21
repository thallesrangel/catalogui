@extends('template-blank')

@section('content')
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-sm-12 col-md-6">
        <img src="{{ asset('img/logo.png') }}" class="img-fluid space-3">
        <h2>Plataforma que Simplifica <br>Divulgar Negócios, Serviços e Eventos.</h2>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="row h-100 justify-content-center align-items-center">
        <form method="POST" action="{{ route('login.authenticate') }}" class="col-md-7">
          @csrf 
          <h3 class="space-3">Login</h3>
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
            <a href="#">Esqueceu sua senha?</a>
            <hr>
            <a href="{{ route('user.create') }}" class="btn btn-dark create-account">Criar Conta</a>
          </div>
        </form>   
    </div>
@endsection
