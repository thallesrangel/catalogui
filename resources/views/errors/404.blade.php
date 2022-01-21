@extends('template-default')

@section('content')
    @include('public.includes.navbar')
    <div class="text-center space-3">
    <h3>Esta página não está disponível.</h3>
    <p class="space-3">O link em que você clicou pode estar indisponível ou foi removido. Voltar para o <a href="{{ route('home') }}" class="txt-purple">Catalogui</a>.</p>
    </div>
@endsection