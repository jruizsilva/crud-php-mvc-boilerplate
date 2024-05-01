const d = document;

const loginForm = d.querySelector("#loginForm");

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const username = d.querySelector("#username").value;
  const password = d.querySelector("#password").value;

  if (username === "" || password === "") {
    Swal.fire({
      title: "Todos los campos son obligatorios",
      icon: "warning",
    });
    return;
  }

  const formData = new FormData(loginForm);

  loginAccount(formData);
});

function loginAccount(formData) {
  axios
    .post(APP_URL + "/login", formData)
    .then((res) => {
      if (res.status == 200 && res.data.success == true) {
        window.location.href = `${APP_URL}/contacts`;
      }
    })
    .catch((err) => {
      const errorMessage = err.response.data.message ?? "Error";
      Swal.fire({
        title: errorMessage,
        icon: "warning",
      });
    });
}
