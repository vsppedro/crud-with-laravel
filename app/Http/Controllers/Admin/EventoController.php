<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;
use Auth;

class EventoController extends Controller
{
    public function index()
    {
        //$registros = Evento::where('usuario_id', Auth::user()->id)->get();
        $registros = Evento::where('usuario_id', Auth::user()->id)->paginate();
        return view('admin.eventos.index', compact('registros'));
    }
    
    public function adicionar()
    {
        return view('admin.eventos.adicionar');
    }
    
    public function salvar(Request $req)
    {
        $dados = $req->all();
        
        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }
        
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/eventos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        
        Evento::create($dados);
        
        return redirect()->route('admin.eventos');
    }
    
    public function editar($id)
    {
        $registro = Evento::find($id);
        return view('admin.eventos.editar', compact('registro'));
    }
    
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        
        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }
        
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/eventos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        
        Evento::find($id)->update($dados);
        
        return redirect()->route('admin.eventos');
    }
    
    public function deletar($id)
    {
        Evento::find($id)->delete();
        return redirect()->route('admin.eventos');
    }
}
