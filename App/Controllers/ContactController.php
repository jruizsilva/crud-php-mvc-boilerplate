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

  public function findOne($id)
  {
    validateId($id);
    $model = new Contact;
    try {
      $contact = $model->where("id", "=", $id)->first();
      if (empty($contact)) {
        notFoundResponse("El contacto no existe");
      }
      return $contact;
    } catch (Exception $e) {
      internalServerErrorResponse("Error al obtener contacto", $e->getMessage());
    }
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
    validateFields($_POST, "id", "name", "email", "phone");
    $id = $_POST['id'];
    validateId($id);
    try {
      $model = new Contact;
      $contact = $model->where("id", "=", $id)->first();
      if (empty($contact)) {
        return notFoundResponse("El contacto a actualizar no existe");
      }

      $model->update($id, $_POST);

      return okResponse("Contacto actualizado correctamente");
    } catch (Exception $e) {
      internalServerErrorResponse("Error al actualizar usuario", $e->getMessage());
    }
  }

  public function delete($id)
  {
    validateId($id);
    $model = new Contact;
    try {
      $contact = $model->where("id", "=", $id)->first();
      if (empty($contact)) {
        notFoundResponse("El contacto no existe");
      }
      $model->deleteById($id);
      return okResponse("Contacto eliminado correctamente");
    } catch (Exception $e) {
      internalServerErrorResponse("Error al eliminar contacto", $e->getMessage());
    }
  }
}
