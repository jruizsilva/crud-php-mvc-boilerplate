<?php

namespace App\Controllers;

class UserController extends Controller
{
  public function __construct()
  {
    if (!isset($_SESSION['user'])) {
      $this->redirect('login');
    }
  }

  public function register()
  {
  }
}
