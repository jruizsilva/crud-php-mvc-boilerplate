<?php

namespace App\Controllers;

class AuthController extends Controller
{
  public function login()
  {
    $data = [
      "head_title" => "Login",
      "head_description" => "Login page",
      "jsfilename" => "auth"
    ];
    return $this->view('login', $data);
  }
  public function register()
  {
    $data = [
      "head_title" => "Login",
      "head_description" => "Login page",
      "jsfilename" => "auth"
    ];
    return $this->view('register', $data);
  }

  public function authenticate()
  {
  }

  public function logout()
  {
  }
}
