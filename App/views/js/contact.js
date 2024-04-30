const d = document;
const createContactForm = d.querySelector("#createContactForm");

createContactForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const name = d.querySelector("#name").value;
  const email = d.querySelector("#email").value;
  const phone = d.querySelector("#phone").value;
  const id = d.querySelector("#id").value;

  if (name == "" || email == "" || phone == "") {
    Swal.fire({
      title: "Todos los campos son obligatorios",
      icon: "warning",
    });
    return;
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
        window.location.href = APP_URL + "/contacts";
      }
    })
    .catch((err) => {
      Swal.fire({
        title: err.message ?? "Error",
        icon: "warning",
      });
    });
}

async function handleDelete(id) {
  const result = await Swal.fire({
    title: "¿Desea eliminar el registro?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar!",
  });
  if (!result.isConfirmed) {
    return;
  }
  axios
    .post(`${APP_URL}/contacts/${id}/delete`)
    .then((res) => {
      if (res.status == 200 && res.data.success == true) {
        window.location.href = res.data.redirectUrl;
      }
    })
    .catch((err) => {
      Swal.fire({
        title: err.message ?? "Error",
        icon: "warning",
      });
    });
}

function handleUpdate(formData) {
  const id = formData.get("id");
  axios
    .post(`${APP_URL}/contacts/${id}/update`, formData)
    .then((res) => {
      console.log(res);
      if (res.status == 200 && res.data.success == true) {
        window.location.href = res.data.redirectUrl;
      }
    })
    .catch((err) => {
      Swal.fire({
        title: err.message ?? "Error",
        icon: "warning",
      });
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
