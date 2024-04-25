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

  public function register()
  {
  }
}
