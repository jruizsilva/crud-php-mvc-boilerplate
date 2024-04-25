<?php

namespace App\Controllers;

class UserController extends Controller
{
  public function __construct()
  {
    session_start();
    if (!isset($_SESSION['user'])) {
      $this->redirect('login');
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

  public function register()
  {
  }
}
