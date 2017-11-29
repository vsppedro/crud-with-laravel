<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;
use App\Interesse;
use Auth;
use DB;

class HomeController extends Controller
{
    public function index ()
    {
        if(Auth::guest()) {
            $eventos = Evento::paginate(3);
        } else {
            $eventos = Evento::where('usuario_id', '!=', Auth::user()->id)->paginate(3);
            
            $interesses = Interesse::where('usuario_id', '=', Auth::user()->id)->get();
            
            foreach($interesses as $interesse) {
                $i = 0;
                foreach($eventos as $evento){
                    if ($interesse['evento_id'] == $evento['id']) {
                        unset($eventos[$i]);
                    }
                    $i++;
                }
            }
        }
        
        return view('home', compact('eventos'));
    }
}
