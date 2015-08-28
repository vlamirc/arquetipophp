<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>{{config("PRF.nomeSistema")}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->

    <link href="https://www.prf.gov.br/design/assets/css/pig.css" rel="stylesheet">
    <!--<link href="https://www.prf.gov.br/design/assets/css/docs.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="https://www.prf.gov.br/design/assets/css/prf-sistemas-internos.css">
    <script src="https://www.prf.gov.br/design/assets/js/jquery.js"></script>
    <script src="https://www.prf.gov.br/design/assets/js/bootstrap.js"></script>
    <script src="https://www.prf.gov.br/design/assets/js/prf.js"></script>
    <script src="https://www.prf.gov.br/design/assets/js/bootstrap-inputmask.min.js"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://www.prf.gov.br/design/assets/js/html5shiv.js"></script>
    <![endif]-->

    @section("scripts")
    @show


</head>

<body data-spy="scroll">
@section('cabecalho')
    <div class="navbar navbar-inverse fixed">
        <div class="navbar-inner">
            <div class="container">
                <div class="brand-content"><a class="brand" href="{{ URL::to('/') }}"></a></div>
                <span class="nome-sistema">{{ config("PRF.nomeCurto") }}</span>

                <div class="login-sistema">
                    @if (Auth::check())
                        <div class="btn-group btn-group-user"><a class="btn btn-user dropdown-toggle "
                                                                 data-toggle="dropdown" href="#"><i
                                        class="icon-user"></i> {{Auth::user()->nome}}<span class="caret"></span></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{ URL::to('logout') }}"><i class="icon-off"></i> Sair</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@show

<div class="container-fluid" id="main-container">
    <!-- Menú principal lateral ================================================== -->
    @section('menu')
        @include("templates.menu")
    @show
    <div id="main-content" class="clearfix">
        <!-- Breadcrumb    ================================================== -->
        <!-- Navegação secundária    ================================================== -->
        @section('secundaria')
            <div class="menu-nav fixed">
                <ul class="nav inline">
                    <li class=""><a href="#modalContato" data-toggle="modal">Fale Conosco</a></li>
                </ul>
            </div>
            @show


                    <!-- Conteúdo da página    ================================================== -->
            <div id="page-content" class="clearfix fixed">
                @section('conteudo')
                    ﻿
                    <div class="page-header position-relative">
                        <h1> {{config("PRF.nomeCurto")}}
                            <small><i class="icon-double-angle-right"></i> Template de Sistema da PRF em PHP.</small>
                        </h1>
                    </div>
                @show
            </div>
            <!-- Fim do conteúdo da página ================================================== -->

    </div>

</div>
@section('rodape')
    <!-- Footer   ================================================== -->
    <footer class="footer">
        <div class="container">

            <ul class="footer-links">
                <li><a href="#">Topo</a></li>
            </ul>
            <p class="inline">{{config("PRF.nomeCurto")}}
                <small>{{config("PRF.versao")}}</small>
            </p>
        </div>
    </footer>

    <!-- O javascript
    ================================================== -->
    <!-- Colocado no final para o documento carregar mais rápido -->
    <div id="modalContato" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel"><i class="icon-comments"></i> Envie seus comentários e dúvidas</h3>
        </div>
        @if(\Illuminate\Support\Facades\Auth::check())
            <iframe style="width:96%; height:420px; border:0;margin-top: 10px;" id="iframeContato"
                    name="iframeContato" src="{!! Funcoes::urlFaleConosco() !!}" frameborder="0"></iframe>
        @else
            <form method="get" action="{!! Funcoes::urlFaleConosco() !!}"
                  class="forms form-inline" id="frmContato" target="iframeContato">

                <div class="modal-body">
                    <input type="hidden" name="url" value="mensagem">
                    <input type="hidden" name="siglaSistema" value="{!! config('PRF.siglaSistema') !!}">

                    <label><strong>Informe seu CPF</strong></label>
                    <input type="text" placeholder="Digite seu cpf" name="usuarioCpf" class="validate[required]"
                           id="cpf" maxlength="100" value="" data-mask="99999999999">
                    <button class="btn btn-primary" type="submit" data-loading-text="Enviando...">Continuar >></button>
                    <iframe style="width:96%; height:480px; border:0;margin-top: 10px; display:none" id="iframeContato"
                            name="iframeContato" src="" frameborder="0"></iframe>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>

                </div>
            </form>
        @endif
    </div>
@show
</body>
</html>