<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Maria", "telefone"=>"123123123"],
            (object)["nome"=>"Ze", "telefone"=>"122122122"],
        ];
        
        $contato = new Contato();
        
        dd($contato->lista());
        
        return view('contato.index', compact('contatos'));
    }
    
    public function criar(Request $req)
    {
        //dd($req['nome']);
        //dd($req->all());
        return "Esse é o criar do contato controller!";
    }
    
    public function editar()
    {
        return "Esse é o editar do contato controller!";
    }
}
