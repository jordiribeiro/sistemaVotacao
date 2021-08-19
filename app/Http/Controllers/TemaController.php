<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**Models**/
use App\Temas;
use App\Opcoes;

class TemaController extends Controller
{
    public function show($id,$slug)
    {
      $tema = Temas::find($id);
      $opcoes = Opcoes::where('tema_id','=',$id)->orderBy('id','asc')->get();
      $total = Opcoes::where('tema_id','=',$id)->sum('qtde');

      return view('tema.show')
      ->with('tema', $tema)
      ->with('opcoes', $opcoes)
      ->with('total', $total);
    }

    public function adicionar_voto(Request $request)
    {
      if(is_null($request->input('opcao'))){}
        else{
          $opcao = Opcoes::find($request->input('opcao'));
          $opcao->qtde++;
          $opcao->save();
        }

        return back();
    }
}
