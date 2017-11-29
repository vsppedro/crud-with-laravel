@extends('layout.site')

@section('titulo', 'Eventos')

@section('conteudo')
    
    <div class="container">
        <h3 class="center">Seja bem-vindo, {{Auth::user()->name}}!</h3>
    </div>

@endsection

