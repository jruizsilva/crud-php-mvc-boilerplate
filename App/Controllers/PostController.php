<?php

namespace App\Controllers;

class PostController extends Controller
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
      'head_title' => 'Posts',
      'head_description' => 'Posts',
      'jsfilename' => 'posts',
    ];
    return $this->view('posts', $data);
  }
}
