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
                    <i class="icon-search"></i> Busca Servidor
                </strong>
            </div>
        </span>
    </div>
    <div class="box-content padded">
        <h4>Por Nome</h4>
        {!! Form::open( array("route" => "doServidorPorNome", "class" => "clearfix") ) !!}
            {!! Form::text("nome", null, array("id" => "nome", "class" => "span6")) !!}
            <button type="submit" class="btn">Buscar</button><br>
        {!! Form::close() !!}
        
        <hr>

        <h4>Por Matricula</h4>
        {!! Form::open( array("route" => "doServidorPorMatricula", "class" => "clearfix") ) !!}
            {!! Form::text("matricula", null, array("id" => "matricula", "class" => "span2")) !!}
            <button type="submit" class="btn">Buscar</button><br>
        {!! Form::close() !!}
        
        <hr>

        <h4>Por CPF</h4>
        {!! Form::open( array("route" => "doServidorPorCpf", "class" => "clearfix") ) !!}
            {!! Form::text("cpf", null, array("id" => "cpf", "class" => "span5")) !!}
            <button type="submit" class="btn">Buscar</button><br>
        {!! Form::close() !!}
        
        <hr>

        <h4>Por UF</h4>
        {!! Form::open( array("route" => "doServidorPorUF", "class" => "clearfix") ) !!}
            {!! Form::text("uf", null, array("id" => "uf", "class" => "span1")) !!}
            <button type="submit" class="btn">Buscar</button><br>
        {!! Form::close() !!}

    </div>
</div>

@stop