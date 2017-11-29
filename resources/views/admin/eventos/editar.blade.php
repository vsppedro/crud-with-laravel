@extends('layout.site')

@section('titulo', 'Eventos')

@section('conteudo')
    
    <div class="container">
        <h3 class="center">Editar evento</h3>
        <div class="row">
            <form class="" action="{{route('admin.eventos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put"/>
                @include('admin.eventos._form')
                <button class="btn deep-orange">Atualizar</button>
            </form>
        </div>
    </div>

@endsection

