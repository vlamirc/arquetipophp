<div id="sidebar" class="fixed">
    <ul class="nav nav-list nav-open">
        <li><a href="#" class="fechar-sidebar"><i class="icon-reorder"></i> Fechar menu </a></li>

        {{--Início dos ítens do menu.--}}

        <li id="menuInicio"><a href="{{URL::to('/')}}"><i class="icon-home"></i> Início</a></li>

        {{--MENU DE EXEMPLO--}}

        <li id="menuServidor"><a href="{{ action('BuscaController@servidor') }}"><i class="icon-group"></i> Busca Servidor</a></li>
        <li id="menuViatura"><a href="{{ action('BuscaController@viatura') }}"><i class="icon-truck"></i> Busca Viatura</a></li>
        <li id="menuVeiculos"><a href="{{ action('BuscaController@veiculos') }}"><i class="icon-expand"></i> Busca Veículos</a></li>
        <li id="menuMultas"><a href="{{ action('BuscaController@multas') }}"><i class="icon-dollar"></i> Busca Multas</a></li>

        {{--FIM DO MENU DE EXEMPLO--}}

        {{--Fim dos ítens do menu.--}}
    </ul>
    <ul class="nav nav-list nav-close" style="display:none">
        <li><a href="#" class="fechar-sidebar"><i class="icon-reorder"></i> Abrir menu</a></li>
    </ul>
</div>
