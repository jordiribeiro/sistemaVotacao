<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

/**Models**/
use App\Temas;

class PainelController extends Controller
{
    public function index()
    {
      $temas7dias = Temas::whereBetween('created_at',[Carbon::now()->subDay(7),Carbon::now()])->count('id');
      $qtdeAberto = Temas::where('duracao','>=',Carbon::now())->count('id');
      $qtdeEncerrado = Temas::where('duracao','<',Carbon::now())->count('id');

      return view('admin.painel')
      ->with('temas7dias', $temas7dias)
      ->with('qtdeAberto', $qtdeAberto)
      ->with('qtdeEncerrado', $qtdeEncerrado);
    }
}
