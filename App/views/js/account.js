const d = document;

const accountForm = d.querySelector("#accountForm");

accountForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const name = d.querySelector("#name").value;

  if (name == "") {
    Swal.fire({
      title: "El nombre es obligatorio",
      icon: "warning",
    });
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
      if (res.status == 200 && res.data.success == true) {
        window.location.href = res.data.redirectUrl;
      }
    })
    .catch((err) => {
      console.log(err);
    });
};
