@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif
    
        <div class="content">
            <div class="title m-b-md">
                Essa é a view index contato!
                @foreach($contatos as $contato)
                    <p>{{ $contato->nome }}</p>
                    <p>{{ $contato->telefone }}</p>
                @endforeach
            </div>
        </div>
    </div>

@endsection

