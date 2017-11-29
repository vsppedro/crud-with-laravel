@extends('layout.site')

@section('titulo', 'Usuário')

@section('conteudo')
    
    <div class="container">
        <h3 class="center">Editar dados</h3>
        <div class="row">
            <form class="" action="{{route('admin.usuario.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put"/>
                @include('usuario._form')
                <button class="btn deep-orange">Atualizar</button>
            </form>
        </div>
    </div>

@endsection

