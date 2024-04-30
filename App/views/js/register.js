const d = document;

const registerForm = d.querySelector("#registerForm");

registerForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const name = d.querySelector("#name").value;
  const username = d.querySelector("#username").value;
  const password = d.querySelector("#password").value;

  if (name === "" || username === "" || password === "") {
    Swal.fire({
      title: "Todos los campos son obligatorios",
      icon: "warning",
    });
    return;
  }

  const formData = new FormData(registerForm);

  createAccount(formData);
});

function createAccount(formData) {
  axios
    .post(APP_URL + "/register", formData)
    .then((res) => {
      if (res.status == 200 && res.data.success == true) {
        Swal.fire({
          title: "Cuenta creada!",
          text: res.data.message,
          icon: "success",
        });
      }
    })
    .catch((err) => {
      console.log(err);
    });
}
