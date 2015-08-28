@extends('templates.layout')

@section('menu')
@stop

@section('conteudo')
<style>
    #main-content {
        margin-left: 40px !important;
    }
</style>
<div id="page-content" class="clearfix fixed">
    <div class="row-fluid">
        <div class="span7">
            <div class="span2 text-center">
                <img src="https://www.prf.gov.br/design/assets/img/prf-brasao-login.png" width="70" height="84">
            </div>
            <div class="page-header position-relative clearfix span10">
                <h1>{{ Config::get("PRF.nomeCurto") }}</h1>
                @if ( count($errors) > 0)
                    @foreach ($errors->all() as $erro)
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Erro!</h4>
                            {{ $erro }}
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="span4">
            <div class="well">
                <span class="span12 page-header"><h4>{{ Config::get("PRF.nomeSistema") }}</h4></span>
                {!! Form::open( array("route" => "doLogin", "class" => "clearfix") ) !!}
                <label>Conta dos Sistemas PRF <a href="#" data-toggle="tooltip" title="" data-original-title="Sistemas que utilizam o CPF para login.">o que é isto?</a></label>
                        {!! Form::text("login",null,array("id" => "login", "placeholder" => "CPF", "class" => "span12")) !!}<br>
                        {!! Form::password("senha",array("id" => "senha", "placeholder" => "Senha", "class" => "span12")) !!}<br>
                        {!! Form::token() !!}
                        <button type="submit" class="btn">Entrar</button><br>
                        <br>
                        <a href="https://www.prf.gov.br/portal/espaco-do-servidor/senhas" target="_blank">Esqueceu a senha?</a><br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop