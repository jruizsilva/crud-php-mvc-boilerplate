<?php

namespace App\Controllers;

class DashboardController extends Controller
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
    $data = [
      'head_title' => 'Dashboard',
      'head_description' => 'Dashboard',
      'jsfilename' => 'dashboard',
    ];
    return $this->view('dashboard', $data);
  }
}
