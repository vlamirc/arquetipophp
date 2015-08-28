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
                    <span class="text-error">
                        <i class="icon-pushpin"></i>
                    </span>
                    <span class="text-success">
                        Busca Veículos Por Placa: {{ $placa }}
                    </span> 
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">
        {{ var_dump($veiculo) }}
    </div>
</div>

@stop
