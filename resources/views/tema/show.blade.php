@extends('layouts.app')

@section('content')
<?php use Carbon\Carbon; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h4>{!! $tema->titulo !!}</h4></div>
                <div class="panel-body text-justify">
                    {!! $tema->descricao !!}
                </div>
                <?php if ($tema->duracao >= Carbon::now()): ?>
                  <form class="" action="{!! url()->current() !!}" method="post">
                    {!! csrf_field() !!}
                    <div class="panel-body">
                        <p>Selecione um das opções abaixo:</p>
                        <?php foreach ($opcoes as $key => $value): ?>
                          <p><input type="radio" name="opcao" value="{!! $value->id !!}"> {!! $value->opcao !!} ({!! $value->qtde !!})</p>
                          <?php if ($value->qtde!=0): ?>
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: {!! round(($value->qtde/$total)*100) !!}%;">
                                <span class="">{!! round(($value->qtde/$total)*100) !!}%</span>
                              </div>
                            </div>
                          <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <div class="panel-footer">
                      <button type="submit" class="btn btn-sm btn-success">Votar</button>
                    </div>
                  </form>
                <?php else: ?>
                  <div class="panel-body">
                    <p>Está votação já foi encerrada no dia: {{$tema->duracao}}</p>
                  </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
@endsection
