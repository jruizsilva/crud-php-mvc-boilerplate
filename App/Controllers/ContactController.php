<?php

namespace App\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
  public function findAll()
  {
    $model = new Contact;
    $contacts = $model->findAll();
    $data = compact('contacts');

    return $this->view('contact', $data);
  }

  public function findOne()
  {
  }

  public function create()
  {
  }

  public function update()
  {
  }

  public function delete()
  {
  }
}
