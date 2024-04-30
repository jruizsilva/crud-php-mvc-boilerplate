<?php

namespace App\Controllers;

use App\Models\User;
use Exception;

class UserController extends Controller
{
  public function __construct()
  {
    session_start();
    if (!isset($_SESSION['user'])) {
      $this->redirect('login');
    }
  }

  public function index()
  {
    $model = new User();
    try {
      $users = $model->select("id", "name", "email")->all();
      $data = [
        'users' => $users,
        'head_title' => 'Usuarios',
        'head_description' => 'Usuarios',
        'jsfilename' => 'users',
      ];
      return $this->view('users', $data);
    } catch (Exception $e) {
      return internalServerErrorResponse("Error al obtener usuarios", $e->getMessage());
    }
  }

  public function accountView()
  {
    $data = [
      'head_title' => 'Mi cuenta',
      'head_description' => 'Configuracion de la cuenta',
      'jsfilename' => 'account',
    ];

    return $this->view('account', $data);
  }

  public function update($id)
  {
    validateFields($_POST, "name");
    validateId($id);
    if ($_SESSION['user']['id'] != $id) {
      return badRequestResponse("Can't update another user data");
    }
    $model = new User();
    try {
      $user = $model->where('id', "=", $id)->first();
      if (empty($user)) {
        return notFoundResponse("Usuario no encontrado");
      }
      $model->update($id, $_POST);
      $user = $model->select("name", "email")->where('id', "=", $id)->first();
      $_SESSION['user']['name'] = $user['name'];
      $_SESSION['user']['email'] = $user['email'];

      $_SESSION['success_message'] = "Datos actualizados";
      return okResponse("Datos de la cuenta actualizados");
    } catch (Exception $e) {
      return internalServerErrorResponse("Error al actualizar datos de la cuenta", $e->getMessage());
    }
  }
}
