<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
  public function index()
  {
    $model = new Contact;
    $data = [
      'title' => 'Home',
      'description' => 'This is the home page'
    ];
    return $this->view('home', $data);
  }
}
