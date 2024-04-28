<?php

namespace App\Controllers;

class HomeController extends Controller
{
  public function index()
  {
    $data = [
      'head_title' => 'Home',
      'head_description' => 'This is the home page',
      'jsfilename' => 'home',
    ];
    return $this->view('home', $data);
  }
}
