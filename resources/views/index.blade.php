@extends('templates.layout')

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#menuInicio").addClass("ativo");
    });
</script>
@stop

@section('conteudo')
﻿
<div class="page-header">
    <h1> {{ config("PRF.nomeCurto") }}
        <small><i class="icon-double-angle-right"></i> {{ config("PRF.nomeSistema") }}</small>
    </h1>
</div>
<div class="box">
    <div class="box-header">
        <span class="title" style="font-size: 18px;">
            <div class="text-center">
                <strong>
                    <span class="text-error">
                        <i class="icon-pushpin"></i>
                    </span>
                    <span class="text-success">
                        Avisos
                    </span>
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">
        <table class="table">
            <tbody>
                @forelse($faleconosco as $key => $mensagem)
                    <tr>
                        <td>
                            <span class="badge badge-info">{{ $key + 1 }}</span>
                            <span style="text-wrap: normal;">
                                <span class="muted">{!! date("d/m/Y H:i:s",$mensagem['dataCadastro'] / 1000) !!}</span>
                                <div>
                                    {!! str_replace("\r\n","<br/>",$mensagem['mensagem']) !!}
                                </div>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            Nenhuma Mensagem Cadastrada.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@stop