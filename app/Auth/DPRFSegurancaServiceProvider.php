<?php namespace App\Auth;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Auth\GenericUser;
use Illuminate\Support\Facades\Session;
use PRF\DPRFSeguranca;
use Illuminate\Support\Facades\Config;

class DPRFSegurancaServiceProvider implements UserProvider  {

  public function retrieveByID($cpf)
  {
    try {
      $seguranca = new DPRFSeguranca(Config::get("PRF.siglaSistema"), Config::get("PRF.producao"));
      $usuario = $seguranca->getUsuarioByCPF($cpf);

      return new GenericUser($usuario);
    }
    catch (\Exception $e) {
      return false;
    }
  }

  /**
   * Retrieve a user by the given credentials.
   *
   * @param  array $credentials
   *
   * @throws \Exception
   * @return \Illuminate\Auth\UserInterface|null
   */
  public function retrieveByCredentials(array $credentials)
  {
    try {
      $seguranca = new DPRFSeguranca(Config::get("PRF.siglaSistema"), Config::get("PRF.producao"));
      $usuario = $seguranca->getUsuarioByCPF($credentials["cpf"]);
      $usuario["id"] = $usuario["cpf"];
      return new GenericUser($usuario);
    } catch (\Exception $e) {
      throw new \Exception("Usuário não encontrado.");
    }
  }

  /**
   * Validate a user against the given credentials.
   *
   * @param \Illuminate\Auth\UserInterface $user
   * @param  array $credentials
   *
   * @throws \Exception
   * @return bool
   */
  public function validateCredentials(Authenticatable $user, array $credentials)
  {
    try {
      $seguranca = new DPRFSeguranca(Config::get("PRF.siglaSistema"), Config::get("PRF.producao"));
      $usuario = $seguranca->login($credentials["cpf"],$credentials["senha"]);
      Session::put('permissoes', $usuario['controlePermissoes']['siglasDasFuncionalidades']);
      return true;
    } catch (\Exception $e) {
      throw new \Exception("Usuário ou Senha Inválidos.");
    }
  }

  /**
   * Retrieve a user by by their unique identifier and "remember me" token.
   *
   * @param  mixed $identifier
   * @param  string $token
   * @return \Illuminate\Auth\UserInterface|null
   */
  public function retrieveByToken($identifier, $token)
  {
    // TODO: Implement retrieveByToken() method.
  }

  /**
   * Update the "remember me" token for the given user in storage.
   *
   * @param  \Illuminate\Auth\UserInterface $user
   * @param  string $token
   * @return void
   */
  public function updateRememberToken(Authenticatable $user, $token)
  {
    // TODO: Implement updateRememberToken() method.
  }


}