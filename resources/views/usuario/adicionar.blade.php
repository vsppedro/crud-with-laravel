@extends('layout.site')

@section('titulo', 'Usuário')

@section('conteudo')
    
    <div class="container">
        <h3 class="center">Cadastro</h3>
        <div class="row">
            <form class="" action="{{route('site.usuario.salvar')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('usuario._form')
                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>
    </div>

@endsection

