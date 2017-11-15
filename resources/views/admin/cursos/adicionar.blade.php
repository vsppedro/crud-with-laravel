@extends('layout.site')

@section('titulo', 'Eventos')

@section('conteudo')
    
    <div class="container">
        <h3 class="center">Adicionar evento</h3>
        <div class="row">
            <form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.cursos._form')
                <button class="btn deep-orange">Salvar</button>
            </form>
        </div>
    </div>

@endsection

