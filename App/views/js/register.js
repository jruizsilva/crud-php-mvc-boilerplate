const d = document;

const registerForm = d.querySelector("#registerForm");

registerForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const name = d.querySelector("#name").value;
  const username = d.querySelector("#username").value;
  const password = d.querySelector("#password").value;

  if (name === "" || username === "" || password === "") {
    alert("Todos los campos son obligatorios");
    return;
  }

  const formData = new FormData(registerForm);

  createAccount(formData);
});

function createAccount(formData) {
  axios
    .post(APP_URL + "/register", formData)
    .then((res) => {
      console.log(res);
    })
    .catch((err) => {
      console.log(err);
    });
}
