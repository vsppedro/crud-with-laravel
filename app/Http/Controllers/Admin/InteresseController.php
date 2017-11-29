<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interesse;
use App\User;
use App\Evento;
use Auth;
use DB;

class InteresseController extends Controller
{
    public function index()
    {
        $registros = DB::table('users')
                        ->join('interesses', 'users.id', '=', 'interesses.usuario_id')
                        ->join('eventos', function ($join) {
                             $join->on('interesses.evento_id', '=', 'eventos.id')
                                ->where('users.id', Auth::user()->id);
                        })
                        ->paginate(3);
        
        $eventos = Evento::where('usuario_id', '=', Auth::user()->id)->paginate(3);
        
        return view('admin.interesse.index', compact('registros', 'eventos'));
    }
    
    public function salvar($eventoId)
    {
        $userId = Auth::user()->id;
        $dados['usuario_id'] = $userId;
        $dados['evento_id'] = $eventoId;
        
        Interesse::create($dados);
        
        return redirect()->route('site.home');
    }
    
    public function interessados($eventoId)
    {
        $interesses = Interesse::where('evento_id', $eventoId)->get();
        $usuarios =[];
        
        foreach($interesses as $interesse){
            $usuarios[] =  User::find($interesse['usuario_id']);
        }
        
        $evento = Evento::find($eventoId);
        
        
        return view('admin.interesse.interessados', compact('usuarios', 'evento'));
    }
    
    public function deletar($eventoId)
    {
        Interesse::where('usuario_id', Auth::user()->id)
                ->where('evento_id', $eventoId)->delete();
                
        return redirect()->route('admin.interesse');
    }
}
