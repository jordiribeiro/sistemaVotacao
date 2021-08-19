@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="text-center">As enquetes mais votadas.</h2>
        <?php foreach ($temas as $key => $value): ?>
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  
                  <div class="panel-heading">
                    <span class="h4">Titulo:</span> {{$value->titulo}} | <span class="h4">Data Inicio:</span> {{$value->created_at}} 
                  </div>
                  <div class="panel-body">
                      {{$value->descricao}}
                      @if($value->duracao > date("Y-m-d H:i:s"))
                        <a href="{!! url('tema/'.$value->id.'/'.$value->slug) !!}" class="pull-right">Visualizar</a>
                      @else
                         <a href="{!! url('/') !!}" class="pull-right">Encerrado</a>
                      @endif
                  </div>
                  

              </div>
          </div>
        <?php endforeach; ?>
    </div>
</div>
@endsection
