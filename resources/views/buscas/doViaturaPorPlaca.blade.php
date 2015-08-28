@extends('templates.layout')

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#menuViatura").addClass("ativo");
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
                    <i class="icon-search"></i> Busca Viatura Por Placa: {{ $placa }}
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">      
        <ul>
            <li><b>Placa:</b> {{ $viaturas[0]['placa'] }}</li>
            <li><b>Marca:</b> {{ $viaturas[0]['anoModelo']['modelo']['marca']['denominacao'] }}</li>
            <li><b>Modelo:</b> {{ $viaturas[0]['anoModelo']['modelo']['denominacao'] }}</li>
            <li><b>Ano:</b> {{ $viaturas[0]['anoModelo']['ano'] }}</li>
            <li><b>UO:</b> {{ $viaturas[0]['unidadeOrganizacional']['nome']}} ({{ $viaturas[0]['unidadeOrganizacional']['sigla'] }})</li>
        </ul>
    </div>
</div>

@stop