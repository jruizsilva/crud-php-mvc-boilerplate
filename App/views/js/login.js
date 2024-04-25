const d = document;

const loginForm = d.querySelector("#loginForm");

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const username = d.querySelector("#username").value;
  const password = d.querySelector("#password").value;

  if (username === "" || password === "") {
    alert("Todos los campos son obligatorios");
    return;
  }

  const formData = new FormData(loginForm);

  loginAccount(formData);
});

function loginAccount(formData) {
  axios
    .post(APP_URL + "/login", formData)
    .then((res) => {
      console.log(res);
      if (res.status == 200 && res.data.success == true) {
        window.location.href = APP_URL;
      }
    })
    .catch((err) => {
      console.log(err);
    });
}
