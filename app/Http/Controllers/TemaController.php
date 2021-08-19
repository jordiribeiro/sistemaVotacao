<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;

/**Models**/
use App\Models\Tema;
use App\Models\Opcoes;

class TemaController extends Controller
{
  public function listar_por_usuario()
  {
    $temas = Tema::where('user_id','=','0')->orderBy('created_at','desc')->get();
    return view('admin.tema.index')->with('temas',$temas)->with('titulo','Meus Temas');
  }

  public function listar_temas()
  {
    $temas = Tema::orderBy('created_at','desc')->get();
    return view('admin.tema.index')->with('temas',$temas)->with('titulo','Listar Temas');
  }

  public function listar_removidos()
  {
    $temas = Tema::onlyTrashed()->orderBy('deleted_at','desc')->get();
    return view('admin.tema.index')->with('temas',$temas)->with('titulo','Listar Removidos');
  }

  public function create()
  {
    return view('admin.tema.create');
  }

  public function store(Request $request)
  {
    $tema = new Tema;
    $tema->user_id ='0';
    $tema->titulo = $request->input('titulo');
    $tema->descricao = $request->input('descricao');
    $tema->duracao = Carbon::parse($request->input('duracao'));
    $tema->slug = $this->criar_slug($request->input('titulo'));
    $tema->save();

    $opcoes = explode(",", $request->input('opcoes'));
    foreach ($opcoes as $key => $value) {
      $opcao = new Opcoes;
      $opcao->tema_id = $tema->id;
      $opcao->opcao = $value;
      $opcao->save();
    }

    return back();
  }

  function criar_slug($titulo){
    $procurar =   ['ã','â','ê','é','í','õ','ô','ú',' ','?'];
    $substituir = ['a','a','e','e','i','o','o','u','-',''];
    return str_replace($procurar,$substituir,mb_strtolower($titulo));
  }

  public function destroy($id)
  {
    Tema::find($id)->delete();
    return back();
  }

  public function ativar($id)
  {
    Tema::withTrashed()->find($id)->restore();
    return back();
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