<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
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
    $model = new Contact;
    $data = [
      'head_title' => 'Home',
      'head_description' => 'This is the home page',
      'jsfilename' => 'home',
    ];
    return $this->view('home', $data);
  }
}
