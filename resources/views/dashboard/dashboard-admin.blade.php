@extends('template-dashboard')

@section('content')
    @include('dashboard.includes.navbar')
    
    <div class="container">
        <h4 class="space-3">Dashboard | Admin</h4>
        
        <h5>Filtros</h5>
        <form method="get" action="{{ route('dashboard') }}" class="div-filter-admin">
            <div class="row">
                <div class="col-md-2">
                    <label for="status" class="form-label">Status *</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="aguardando">Aguardando</option>
                        <option value="inativado">Inativado</option>
                        <option value="publicado">Publicado</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="title" class="form-label">Título *</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Pesquisar</button>
        </form>

        <h5>Resultados:</h5>
        @forelse($data as $item)
        <div class="row itens-my-announcement">
            <div class="col-sm-12 col-md-2">
                <img class="img-fluid" src="{{ asset('img/thumbnails') .'/'. $item->img_profile }}">
            </div>

            <div class="col-sm-12 col-md-4">
                <a href="{{ route('announcemen.datails', $item->slug ) }}" class="h4">{{ $item->title }}</a>
                <h6 class="txt-green">{{ $item->category->name }} <i class="bi bi-caret-right"></i> {{ $item->subcategory->name }}</h6>
                <p title="Data de Criação"><i class="bi bi-calendar-week"></i> {{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }} ás {{ Carbon\Carbon::parse($item->created_at)->format('H:s') }}</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <form action="{{ route('announcement.approve', $item->id)  }}" method="POST">
                            @csrf
                            @method('POST')
                            <button class="btn btn-sm btn-default txt-green" type="submit"><i class="bi bi-check-all"></i> Publicar</button>
                        </form>
                    </li>
                    <li class="list-inline-item">
                        <form action="{{ route('announcement.disable', $item->id)  }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-default txt-red" type="submit"><i class="bi bi-trash2"></i> Inativar</button>
                        </form>
                    </li>

                    <a class=" btn btn-default txt-green" href="#"><i class="bi bi-box-arrow-up-right"></i> Acessar Como</a>
                </ul>
            </div>

            <div class="col-sm-12 col-md-3">
                <p>ID:{{ $item->id }}</p>
                <p>Contato: {{ $item->user->email }}</p>
            </div>
        </div>
        @empty
            <p>Não há publicações para este filtro.</p>
        @endforelse
    </div>
@endsection