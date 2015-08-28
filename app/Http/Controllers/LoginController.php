<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use PRF\DPRFSeguranca;
use Exception;

class LoginController extends Controller {

//	public function __construct()
//	{
////		middleware para evitar tentativa de login de outros domínios
//		$this->middleware('csrf', ['only' => 'doLogin']);
//    }

	public function index()
	{
		return view("login");
	}

	/**
	 * Função para login no sistema. Os parâmetros (login e senha) são passados por POST
	 *
	 * @return mixed
	 */
	public function doLogin()
	{
		try {
			Auth::attempt(array('cpf' => Input::get('login'), 'senha' => Input::get('senha')));
			return Redirect::intended('/');
		} catch (Exception $e) {
			return Redirect::to('login')->withErrors($e->getMessage())->withInput();
		}
	}

	public function logout() {
		$seguranca = new DPRFSeguranca(config("PRF.siglaSistema"),config("PRF.producao"));
		$seguranca->auditoria(Auth::user()->cpf,"LOGOUT","Logout",array());
		Auth::logout();
		return Redirect::to("/");
	}

}
