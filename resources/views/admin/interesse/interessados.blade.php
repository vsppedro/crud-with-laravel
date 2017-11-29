@extends('layout.site')

@section('titulo', 'Eventos')

@section('conteudo')
    
    <div class="container">
        <h4 class="center">Lista dos interessados no evento {{$evento->titulo}}</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                    </tr> 
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

