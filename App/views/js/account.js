const d = document;

const accountForm = d.querySelector("#accountForm");

accountForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const name = d.querySelector("#name").value;

  if (name == "") {
    alert("El nombre es obligatorio");
    return;
  }

  const formData = new FormData(accountForm);
  updateAccountData(formData);
});

const updateAccountData = (formData) => {
  const id = d.querySelector("#id").value;
  console.log(`/account/${id}/update`);
  axios
    .post(`/account/${id}/update`, formData)
    .then((res) => {
      console.log(res);
    })
    .catch((err) => {
      console.log(err);
    });
};
