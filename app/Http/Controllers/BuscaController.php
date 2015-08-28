<?php namespace App\Http\Controllers;

use PRF\FaleConosco;
use Illuminate\Support\Facades\Auth;
use Input;
use PRF\RH;
use PRF\Sipac;
use PRF\Multas;
use PRF\Motor;

class BuscaController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function servidor()
    {
        return view('buscas.servidor');
    }

    public function doServidorPorNome()
    {
        $nome = Input::get('nome');
        $rh = new RH(config('PRF.producao'));
        $servidores = $rh->getByNome($nome);

        return view('buscas.doServidorPorNome', compact('nome', 'servidores'));
    }

    public function doServidorPorMatricula()
    {
        $matricula = Input::get('matricula');
        $rh = new RH(config('PRF.producao'));
        $servidores = $rh->getByMatricula($matricula);

        return view('buscas.doServidorPorMatricula', compact('matricula', 'servidores'));
    }

    public function doServidorPorCpf()
    {
        $cpf = Input::get('cpf');
        $rh = new RH(config('PRF.producao'));
        $servidor = $rh->getByCPF($cpf);

        return view('buscas.doServidorPorCpf', compact('cpf', 'servidor'));
    }

    public function doServidorPorUF()
    {
        $uf = Input::get('uf');
        $rh = new RH(config('PRF.producao'));
        $servidores = $rh->getUsuariosByUF($uf);

        return view('buscas.doServidorPorUF', compact('uf', 'servidores'));
    }

    public function viatura()
    {
        return view('buscas.viatura');
    }

    public function doViaturaPorPlaca()
    {
        $placa = Input::get('placa');
        $sipac = new Sipac(config('PRF.producao'));
        $viaturas = $sipac->getViaturaPorPlaca($placa);

        return view('buscas.doViaturaPorPlaca', compact('placa', 'viaturas'));
    }

    public function doViaturaPorUF()
    {
        $uf = Input::get('uf');
        $sipac = new Sipac(config('PRF.producao'));
        $viaturas = $sipac->getViaturasPorUF($uf);

        return view('buscas.doViaturaPorUF', compact('uf', 'viaturas'));
    }

    public function multas()
    {
        return view('buscas.multas');
    }

    public function doMultasPorMatricula()
    {
        $matricula = Input::get('matricula');
        $siscom = new Multas(config('PRF.producao'));
        $data_final = time() * 1000; // Agora
        $data_inicial = $data_final - (90 * 24 * 60 * 60 * 1000); // Ultimos 90 dias
        $multas = $siscom->getMultasDoPRF($matricula, $data_inicial, $data_final);
        return view('buscas.doMultasPorMatricula', compact('matricula', 'multas'));
    }

    public function doMultaDetalhes()
    {
        $numeroAuto = Input::get('numeroAuto');
        $siscom = new Multas(config('PRF.producao'));
        $multa = $siscom->getMulta($numeroAuto);
        return view('buscas.doMultaDetalhes', compact('multa'));
    }

    public function veiculos()
    {
        return view('buscas.veiculos');
    }

    public function doVeiculosPorPlaca()
    {
        $placa = Input::get('placa');
        $matricula = Auth::user()->matriculaSiape;
        $cpf = Auth::user()->cpf;
        $motor = new Motor(config('PRF.producao'));
        $veiculo = $motor->getVeiculoPorPlaca($cpf, $matricula, $placa);
        return view('buscas.doVeiculosPorPlaca', compact('placa', 'veiculo'));
    }

}

