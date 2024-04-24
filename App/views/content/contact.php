<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
  <?php require_once("App/views/inc/head.php"); ?>
</head>

<body>
  <div class="container py-4">
    <h1 class="text-center">Listado de contactos</h1>

    <?php
    dep($contacts);
    ?>
    <!-- Button trigger create contact modal -->
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#createContact">
      Agregar contacto
    </button>
    <table class="table">
      <thead>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Telefono</th>
        <th scope="col" class="text-center">Acciones</th>
      </thead>
      <tbody>
        <?php $contador = 1 ?>
        <?php foreach ($contacts as $contact) { ?>
          <tr>
            <td scope="row"><?php echo $contador++; ?></td>
            <td><?php echo $contact['name']; ?></td>
            <td><?php echo $contact['email']; ?></td>
            <td><?php echo $contact['phone']; ?></td>
            <td class="d-flex justify-content-center gap-2"><button type="button" class="btn btn-warning">Edit</button><button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <!-- Modal create contact -->
    <div class="modal fade" id="createContact" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="contactModalLabel">Crear contacto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="createContactForm">
              <div class="mb-3">
                <label for="name" class="form-label">Nombre*</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone*</label>
                <input type="text" class="form-control" name="phone" id="phone">
              </div>
              <button type="submit" class="btn btn-primary ms-auto">Crear</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once("App/views/inc/script.php") ?>
  <script src="App/views/js/contacts.js"></script>
</body>

</html>