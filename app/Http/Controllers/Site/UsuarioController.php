<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class UsuarioController extends Controller
{
    
    public function index()
    {
        return view('usuario.index');
    }
    
    public function adicionar()
    {
        return view('usuario.adicionar');
    }
    
    public function salvar(Request $req)
    {
        $dados = $req->all();
        
        //Validar senha
        if($dados['password'] == $dados['confpassword']){
            $dados['password'] = bcrypt($dados['password']);
        } else {
            return redirect()->route('usuario.adicionar');
        }
        
        User::create($dados);
        
        return redirect()->route('login');
    }
    
    public function editar($id)
    {
        $registro = User::find($id);
        return view('usuario.editar', compact('registro'));
    }
    
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        
        //Validar senha
        if($dados['password'] == $dados['confpassword']){
            $dados['password'] = bcrypt($dados['password']);
        } else if ($dados['password'] == '' && $dados['confpassword'] == '') {
            $user = User::find($dados['id']);
            $dados['password'] = $user['password'];
        } else {
            return redirect()->route('admin.usuario.editar');
        }
        
        User::find($id)->update($dados);
        
        return redirect()->route('site.usuario');
    }
    
    public function deletar($id)
    {
        User::find($id)->delete();
        DB::table('eventos')->where('usuario_id', $id)->delete();
        return redirect()->route('site.home');
    }
}
