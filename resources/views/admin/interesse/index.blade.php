@extends('layout.site')

@section('titulo', 'Marca aí')

@section('conteudo')
    
    <div class="container">
        <h3 class="center">Lista de Interesse</h3>
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
                    <div class="card-action">
                        <a href="{{route('admin.interesse.deletar',$registro->id)}}">Remover</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="row" align="center">
            {{$registros->links()}}
        </div>
    </div>

@endsection

