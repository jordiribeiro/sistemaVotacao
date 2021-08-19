<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

/**Models**/
use App\Opcoes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temas = Opcoes::select(DB::raw('SUM(qtde) as "total", temas.titulo	'))
        ->join('temas', 'opcoes.tema_id','=', 'temas.id')
        ->where('duracao','>=', Carbon::now())
        ->groupBy('tema_id','temas.id','temas.user_id','temas.titulo')
        ->havingRaw('total > 0')
        ->orderBy('total', 'desc')->get();

        return view('home')->with('temas', $temas);
    }
}
