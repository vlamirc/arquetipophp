@extends('templates.layout')

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#menuMultas").addClass("ativo");
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
                    <i class="icon-search"></i> Busca Multas
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">
        <h4>Por Matrícula (últimos 90 dias)</h4>
        {!! Form::open( array("route" => "doMultasPorMatricula", "class" => "clearfix") ) !!}
            {!! Form::text("matricula", null, array("id" => "matricula", "class" => "span2")) !!}
            <button type="submit" class="btn">Buscar</button><br>
        {!! Form::close() !!}
    </div>
</div>

@stop
