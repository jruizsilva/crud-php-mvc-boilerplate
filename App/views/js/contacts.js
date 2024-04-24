const d = document;
const createContactForm = d.querySelector("#createContactForm");

createContactForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const name = d.querySelector("#name").value;
  const email = d.querySelector("#email").value;
  const phone = d.querySelector("#phone").value;

  if (name == "" || email == "" || phone == "") {
    return alert("Todos los campos son obligatorios");
  }

  const formData = new FormData(createContactForm);

  for (const [key, value] of formData.entries()) {
    console.log(key, value);
  }

  insertContact(createContactForm);
});

function insertContact(formData) {
  axios
    .post(APP_URL + "/contacts", formData)
    .then((res) => {
      console.log(res);
    })
    .catch((err) => {
      console.log(err);
    });
}
