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
                    <i class="icon-search"></i> Busca Servidor Por Nome - Resultados para o Nome "{{ $nome }}"
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">
    	@include('buscas.servidorTable')
    </div>
</div>

@stop