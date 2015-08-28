@extends('templates.layout')

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#menuVeiculos").addClass("ativo");
    });
</script>
@stop

@section('conteudo')
﻿
<div class="box">
    <div class="box-header">
        <span class="title" style="font-size: 18px;">
            <div class="text-center">
                <strong>
                    <i class="icon-search"></i> Busca Veículos
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">
        <h4>Por Placa</h4>
        {!! Form::open( array("route" => "doVeiculosPorPlaca", "class" => "clearfix") ) !!}
            {!! Form::text("placa", null, array("id" => "placa", "class" => "span3")) !!}
            <button type="submit" class="btn">Buscar</button><br>
        {!! Form::close() !!}
    </div>
</div>

@stop
