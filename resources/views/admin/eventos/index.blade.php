@extends('layout.site')

@section('titulo', 'Eventos')

@section('conteudo')
    
    <div class="container">
        <h3 class="center">Meus eventos</h3>
        <div class="row">
            @foreach($registros as $registro)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset($registro->imagem)}}">
                    </div>
                    <div class="card-content">
                        <h4>{{$registro->titulo}}</h4>
                        <p>{{$registro->descricao}}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{route('site.interesse.interessados',$registro->id)}}">Ver Interessados</a>
                    </div>
                    <div class="card-action center">
                        <a class="btn deep-orange" href="{{ route('admin.eventos.editar', $registro->id) }}">Editar</a>
                        <a class="btn red" href="{{ route('admin.eventos.deletar', $registro->id) }}">Deletar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="row" align="center">
            {{$registros->links()}}
        </div>
        
        <div class="row">
            <a class="btn blue" href="{{ route('admin.eventos.adicionar') }}">Adicionar</a>
        </div>
    </div>

@endsection

