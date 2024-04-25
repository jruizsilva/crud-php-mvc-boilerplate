<?php

namespace App\Controllers;

use App\Models\User;
use Exception;

class AuthController extends Controller
{
  public function __construct()
  {
    session_start();
    if (isset($_SESSION['user'])) {
      return $this->redirect('/');
    }
  }
  public function loginView()
  {
    $data = [
      "head_title" => "Iniciar sesión",
      "head_description" => "Iniciar sesión",
      "jsfilename" => "login"
    ];
    return $this->view('login', $data);
  }
  public function registerView()
  {
    $data = [
      "head_title" => "Crear cuenta",
      "head_description" => "Crear cuenta",
      "jsfilename" => "register"
    ];
    return $this->view('register', $data);
  }
  public function register()
  {
    validateFields($_POST, "name", "username", "password");
    $_POST['name'] = ucwords($_POST['name']);
    $_POST['username'] = strtolower($_POST['username']);
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $model = new User();
    try {
      $user = $model->where("username", "=", $_POST['username'])->first();
      if (!empty($user)) {
        return badRequestResponse("El username ingresado ya esta en uso");
      }
      $insertId = $model->create($_POST);
      if ($insertId > 0) {
        return createdResponse("Usuario creado exitosamente");
      }
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }

  public function login()
  {
    validateFields($_POST, "name", "username", "password");
    $_POST['username'] = strtolower($_POST['username']);
    $model = new User();
    try {
      $user = $model->where("username", "=", $_POST['username'])->first();
      if (empty($user)) {
        return badRequestResponse("El usuario o la contraseña son incorrectos");
      }
      if (!password_verify($_POST['password'], $user['password'])) {
        return badRequestResponse("El usuario o la contraseña son incorrectos");
      }
      unset($user['password']);
      $_SESSION['user'] = $user;
      return okResponse("Usuario logueado exitosamente");
    } catch (Exception $e) {
      return $e->getMessage();
    }
    return "login";
  }

  public function logout()
  {
    if (session_destroy()) {
      return [
        'success' => true,
        'message' => 'Sesión cerrada exitosamente'
      ];
    };
  }
}
