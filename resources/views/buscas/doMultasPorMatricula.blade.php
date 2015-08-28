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
                    <i class="icon-search"></i> Busca Multas Por Matrícula - Resultados para a Matrícula "{{ $matricula }}"
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">
    	@include('buscas.multasTable')
    </div>
</div>

@stop
