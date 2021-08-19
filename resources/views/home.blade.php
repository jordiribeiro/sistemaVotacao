@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="text-center">As enquetes mais votadas.</h2>
        <?php foreach ($temas as $key => $value): ?>
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      {{$value->titulo}}
                        
                  </div>

                  <div class="panel-body">
                      {{$value->descricao}}
                      <a href="{!! url('tema/'.$value->id.'/'.$value->slug) !!}" class="pull-right">Visualizar</a>
                  </div>
              </div>
          </div>
        <?php endforeach; ?>
    </div>
</div>
@endsection
