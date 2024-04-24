const d = document;
const createContactForm = d.querySelector("#createContactForm");

createContactForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const name = d.querySelector("#name").value;
  const email = d.querySelector("#email").value;
  const phone = d.querySelector("#phone").value;
  const id = d.querySelector("#id").value;

  if (name == "" || email == "" || phone == "") {
    return alert("Todos los campos son obligatorios");
  }
  const formData = new FormData(createContactForm);
  if (id == "") {
    handleInsert(formData);
  } else {
    handleUpdate(formData);
  }
});

function handleInsert(formData) {
  axios
    .post(APP_URL + "/contacts", formData)
    .then((res) => {
      if (res.status == 201 && res.data.success == true) {
        alert("Contacto creado correctamente");
        window.location.href = APP_URL + "/contacts";
      }
    })
    .catch((err) => {
      console.log(err);
    });
}

function handleDelete(id) {
  if (!confirm("¿Estas seguro que desea eliminar el registro?")) {
    return;
  }
  axios
    .post(`${APP_URL}/contacts/${id}/delete`)
    .then((res) => {
      if (res.status == 200 && res.data.success == true) {
        fetchAllContacts();
      }
    })
    .catch((err) => {
      console.log(err);
    });
}

function handleUpdate(formData) {
  const id = formData.get("id");
  axios
    .post(`${APP_URL}/contacts/${id}/update`, formData)
    .then((res) => {
      console.log(res);
      if (res.status == 200 && res.data.success == true) {
        fetchAllContacts();
      }
    })
    .catch((err) => {
      console.log(err);
    });
}

function fillFieldsCreateForm() {
  d.querySelector("#contactModalLabel").textContent = "Crear contacto";
  d.querySelector("#modalSubmitBtn").textContent = "Agregar contacto";
  resetForm();
}

function fillFieldsEditForm(id) {
  d.querySelector("#contactModalLabel").textContent = "Editar contacto";
  d.querySelector("#modalSubmitBtn").textContent = "Actualizar contacto";
  d.querySelector("#id").value = id;

  axios
    .get(`${APP_URL}/contacts/${id}`)
    .then((res) => {
      const contact = res.data;
      d.querySelector("#name").value = contact.name;
      d.querySelector("#email").value = contact.email;
      d.querySelector("#phone").value = contact.phone;
    })
    .catch((err) => {
      console.log(err);
    });
}

function resetForm() {
  d.querySelector("#name").value = "";
  d.querySelector("#email").value = "";
  d.querySelector("#phone").value = "";
  d.querySelector("#id").value = "";
}

function fetchAllContacts() {
  axios
    .get(`${APP_URL}/contacts/all`)
    .then((res) => {
      const contacts = res.data;
      const contactsTableBody = d.querySelector("#contactsTableBody");
      contactsTableBody.innerHTML = "";
      let contador = 1;
      contacts.forEach((contact) => {
        contactsTableBody.innerHTML += `
          <tr>
            <td scope="row">${contador++}</td>
            <td>${contact.name}</td>
            <td>${contact.email}</td>
            <td>${contact.phone}</td>
            <td>
            <button type="button" class="btn btn-sm btn-warning" onclick="${fillFieldsEditForm(
              contact.id
            )}" data-bs-toggle="modal" data-bs-target="#contactModal">Editar</button>
            <button type="button" class="btn btn-sm btn-danger" onclick="handleDelete(${
              contact.id
            })">Eliminar</button>
            </td>
          </tr>
        `;
      });
    })
    .catch((err) => {
      console.log(err);
    });
}
