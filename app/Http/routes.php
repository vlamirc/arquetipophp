<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Rotas de Login
get('login', 'LoginController@index');
post('login', ['as' => 'doLogin', 'uses' => 'LoginController@doLogin']);
get('logout', 'LoginController@logout');

//Rota página inicial
get('/', 'HomeController@index');

// Busca servidor
get('/busca/servidor', 'BuscaController@servidor');

post('/busca/servidorpornome', ['as' => 'doServidorPorNome', 'uses' => 'BuscaController@doServidorPorNome']);

post('/busca/servidorpormatricula', ['as' => 'doServidorPorMatricula', 'uses' => 'BuscaController@doServidorPorMatricula']);

get('/busca/servidorporcpf', ['as' => 'doServidorPorCpf', 'uses' => 'BuscaController@doServidorPorCpf']);
post('/busca/servidorporcpf', ['as' => 'doServidorPorCpf', 'uses' => 'BuscaController@doServidorPorCpf']);

post('/busca/servidorporuf', ['as' => 'doServidorPorUF', 'uses' => 'BuscaController@doServidorPorUF']);

get('/busca/viatura', 'BuscaController@viatura');
get('/busca/viaturaporplaca', ['as' => 'doViaturaPorPlaca', 'uses' => 'BuscaController@doViaturaPorPlaca']);
post('/busca/viaturaporplaca', ['as' => 'doViaturaPorPlaca', 'uses' => 'BuscaController@doViaturaPorPlaca']);
post('/busca/viaturaporuf', ['as' => 'doViaturaPorUF', 'uses' => 'BuscaController@doViaturaPorUF']);

get('/busca/multas', 'BuscaController@multas');
post('/busca/multaspormatricula', ['as' => 'doMultasPorMatricula', 'uses' => 'BuscaController@doMultasPorMatricula']);
get('/busca/multaDetalhes', ['as' => 'doMultaDetalhes', 'uses' => 'BuscaController@doMultaDetalhes']);

get('/busca/veiculos', 'BuscaController@veiculos');
get('/busca/veiculosporplaca', ['as' => 'doVeiculosPorPlaca', 'uses' => 'BuscaController@doVeiculosPorPlaca']);
post('/busca/veiculosporplaca', ['as' => 'doVeiculosPorPlaca', 'uses' => 'BuscaController@doVeiculosPorPlaca']);

