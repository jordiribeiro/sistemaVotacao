@extends('admin.layouts.app')
@section('content')
<ul class="list-group">
  <li class="list-group-item"><h4 class="text-center">Adicionar Temas</h3></li>
    <li class="list-group-item">
      <a href="{!! url('/painel') !!}">Painel</a> -> adicionar-temas
    </li>
</ul>

<form action="{!! url()->current() !!}" method="post">
  {!! csrf_field() !!}
  <div class="form-group">
    <label for="">Título:</label>
    <input type="text" class="form-control" name="titulo">
    <p class="help-block">Digite o título para a enquete.</p>
  </div>

  <div class="form-group">
    <label for="">Descrição:</label>
    <textarea name="descricao" class="form-control" rows="4" cols="40"></textarea>
    <p class="help-block">Digite a descrição para a enquete.</p>
  </div>

  <div class="form-group">
    <label for="">Duração:</label>
    <input type="datetime-local" class="form-control" required="required" name="duracao">
    <p class="help-block">Digite o tempo de duração para a enquete.<br>Exemplo: 22-10-2021 16:00</p>
  </div>

  <div class="form-group">
    <label for="">Opções:</label>
    <input type="text" class="form-control" name="opcoes">
    <p class="help-block">Digite as opções para a enquete separadas por ,<br>Exemplo: opção,opção2.</p>
  </div>

  <button type="submit" class="btn btn-success">Adicionar</button>
  
</form>
@endsection
