<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

/**Models**/
use App\Opcoes;
use App\Temas;
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
        $temas = Temas::orderBy('created_at','desc')->get();
        return view('home')->with('temas', $temas);
    }
    public function quantidade(){
        $temasqtd =Temas::orderBy('created_at','desc')->whereNull('deleted_at')->get()->count();
        return $temasqtd;
    }
}
