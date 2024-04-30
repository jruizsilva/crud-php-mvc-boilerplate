<?php

namespace App\Controllers;

use App\Models\Contact;
use Exception;

class ContactController extends Controller
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
    if (isset($_GET['search'])) {
      $search = $_GET['search'];
      $contacts = $model
        ->where("user_id", "=", $_SESSION['user']['id'])
        ->andWhere("name", "LIKE", "%$search%")
        ->orWhere("email", "LIKE", "%$search%")
        ->orWhere("phone", "LIKE", "%$search%")
        ->paginate(1);
    } else {
      $contacts = $model
        ->where("user_id", "=", $_SESSION['user']['id'])
        ->paginate(1);
    }
    $data = [
      'contacts' => $contacts,
      'head_title' => 'Contactos',
      'head_description' => 'Listado de contactos',
      'jsfilename' => 'contact',
    ];

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
      return internalServerErrorResponse("Error al obtener contacto", $e->getMessage());
    }
  }

  public function create()
  {
    validateFields($_POST, "name", "email", "phone");
    $_POST['name'] = ucwords($_POST['name']);
    $_POST['user_id'] = $_SESSION['user']['id'];
    try {
      $model = new Contact;
      $contact = $model
        ->where('user_id', '=', $_SESSION['user']['id'])
        ->andWhere("email", "=", $_POST["email"])
        ->first();
      if (!empty($contact)) {
        return badRequestResponse("El email ya esta asignado a uno de tus contactos");
      }
      $insertId = $model->create($_POST);
      if ($insertId > 0) {
        $_SESSION['success_message'] = "Contacto creado exitosamente";
        return createdResponse("Contacto creado exitosamente");
      }
    } catch (Exception $e) {
      return internalServerErrorResponse("Error al crear contacto", $e->getMessage());
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
      if ($contact['user_id'] != $_SESSION['user']['id']) {
        return forbiddenResponse("No tienes permisos para actualizar este contacto");
      }

      $model->update($id, $_POST);
      $_SESSION['success_message'] = "Contacto actualizado correctamente";
      return okResponse("Contacto actualizado correctamente");
    } catch (Exception $e) {
      return internalServerErrorResponse("Error al actualizar usuario", $e->getMessage());
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
      if ($contact['user_id'] != $_SESSION['user']['id']) {
        return forbiddenResponse("No tienes permisos para eliminar este contacto");
      }
      $model->deleteById($id);

      $_SESSION['success_message'] = "Contacto eliminado correctamente";
      return okResponse("Contacto eliminado correctamente");
    } catch (Exception $e) {
      return internalServerErrorResponse("Error al eliminar contacto", $e->getMessage());
    }
  }
}
