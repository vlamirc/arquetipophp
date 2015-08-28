@extends('templates.layout')

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#menuServidor").addClass("ativo");
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
                    <i class="icon-search"></i> Busca Servidor Por CPF: {{ $cpf }}
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">      
        <ul>
            <li><b>CPF:</b> {{ $servidor[0]['cpf'] }}</li>
            <li><b>Nome Completo:</b> {{ $servidor[0]['nomeCompleto'] }}</li>
            <li><b>Nome Guerra:</b> {{ $servidor[0]['nomeGuerra'] }}</li>
            <li><b>UO:</b> {{ $servidor[0]['unidadeOrganizacional']['nome']}} ({{ $servidor[0]['unidadeOrganizacional']['sigla'] }})</li>
            <li><b>Classe:</b> {{ $servidor[0]['classePadrao']['descricao'] }}</li>
            <li><b>Email:</b> {{ $servidor[0]['email'] }}@prf.gov.br</li>
            <li><b>Matrícula:</b> {{ $servidor[0]['matricula'] }}</li>
            <li><b>Tipo:</b> {{ $servidor[0]['tipoUsuario'] }}</li>
        </ul>
    </div>
</div>

@stop