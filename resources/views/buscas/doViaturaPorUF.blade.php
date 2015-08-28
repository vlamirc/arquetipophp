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
                    <i class="icon-search"></i> Busca Viatura Por UF - Resultados para a UF "{{ $uf }}"
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">
        <table class='table'>
            <thead>
                <td>Placa</td>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Ano</td>
                <td>UO</td>
            </thead>
            <tbody>
                @foreach($viaturas as $viatura)
                    <tr>
                        <td>
                            {!! link_to_route('doViaturaPorPlaca', $viatura['placa'], ['placa' => $viatura['placa']]) !!}
                        </td>
                        <td>{{ $viatura['anoModelo']['modelo']['marca']['denominacao'] }}</td>
                        <td>{{ $viatura['anoModelo']['modelo']['denominacao'] }}</td>
                        <td>{{ $viatura['anoModelo']['ano'] }}</td>
                        <td>{{ $viatura['unidadeOrganizacional']['sigla'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop