<?php

namespace App\Http\Controllers;


use DB;
use Carbon\Carbon;
use App\Models\Opcoes;

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
        $temas = Opcoes::select(('SUM(qtde) as "total", temas.titulo'))
        ->join('temas', 'opcoes.tema_id','=', 'temas.id')
        ->where('duracao','>=', Carbon::now())
        ->groupBy('tema_id')
        ->havingRaw('total > 0')
        ->orderBy('total', 'desc')->get();

        return view('home')->with('temas', $temas);
    }
}