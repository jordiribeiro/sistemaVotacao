@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="text-center">Enquetes Cadastradas</h2>
        <?php foreach ($temas as $key => $value): ?>
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  
                  <div class="panel-heading">
                    <span class="h3">Titulo:{{$value->titulo}} </span> 
                    <div>
                    <span class="h5">Data Inicio:</span> {{$value->created_at}}  | <span class="h5">Data Fim:</span> {{$value->duracao}}
                    </div> 
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
