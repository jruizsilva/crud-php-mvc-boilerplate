<?php require_once("App/views/inc/head.php"); ?>

<body>
  <?php require_once("App/views/inc/nav.php"); ?>
  <div class="container py-4">
    <h1 class="text-center">Listado de contactos</h1>

    <?php
    dep($contacts);
    ?>
    <div class="d-flex justify-content-between">
      <form action="/contacts" class="d-flex gap-1" autocomplete="off">
        <input type="text" class="form-control" name="search" id="search" aria-describedby="searchHelp">
        <button type="submit" class="btn btn-sm btn-primary">Buscar</button>
      </form>
      <!-- Button trigger create contact modal -->
      <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal" onclick="fillFieldsCreateForm()">
        Agregar contacto
      </button>
    </div>

    <table class="table">
      <thead>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Telefono</th>
        <th scope="col">Acciones</th>
      </thead>
      <tbody id="contactsTableBody">
        <?php $contador = $contacts['from']; ?>
        <?php foreach ($contacts['data'] as $contact) { ?>
          <tr>
            <td scope="row"><?php echo $contador++; ?></td>
            <td><?php echo $contact['name']; ?></td>
            <td><?php echo $contact['email']; ?></td>
            <td><?php echo $contact['phone']; ?></td>
            <td>
              <button type="button" class="btn btn-sm btn-warning" onclick="fillFieldsEditForm(<?php echo $contact['id'] ?>)" data-bs-toggle="modal" data-bs-target="#contactModal">Editar</button>
              <button type="button" class="btn btn-sm btn-danger" onclick="handleDelete(<?php echo $contact['id'] ?>)">Eliminar</button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php $paginate = "contacts";
    require_once("App/views/inc/pagination.php"); ?>

    <!-- Modal contact -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="contactModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="createContactForm" autocomplete="off">
              <input type="hidden" name="id" id="id">
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
              <button type="submit" class="btn btn-primary ms-auto" id="modalSubmitBtn"></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once("App/views/inc/script.php") ?>
</body>

</html>