<?php

namespace App\Controllers;

use App\Models\Contact;
use Exception;

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
    validateFields($_POST, "name", "email", "phone");
    $_POST['name'] = ucwords($_POST['name']);
    try {
      $model = new Contact;
      $insertId = $model->create($_POST);
      if ($insertId > 0) {
        return createdResponse("Contacto creado exitosamente");
      }
    } catch (Exception $e) {
      internalServerErrorResponse("Error al crear contacto", $e->getMessage());
    }
  }

  public function update()
  {
    return "update";
  }

  public function delete()
  {
  }
}
