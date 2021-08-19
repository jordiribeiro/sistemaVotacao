@extends('admin.layouts.app')

@section('content')
<ul class="list-group">
  <li class="list-group-item"><h4 class="text-center">Painel</h3></li>
</ul>

<div class="row">
  <div class="col-md-12">
    <div class="well text-center">
      Quantidade de Temas Criado no Período de 7 Dias: {!! $temas7dias !!}
    </div>
  </div>

  <div class="col-md-6">
    <div class="well text-center">
      Quantidade de Temas Abertos: {!! $qtdeAberto !!}
    </div>
  </div>

  <div class="col-md-6">
    <div class="well text-center">
      Quantidade de Temas Encerrados: {!! $qtdeEncerrado !!}
    </div>
  </div>
</div>
@endsection
