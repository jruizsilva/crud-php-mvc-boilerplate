const APP_URL = "http://crud.test";
// const APP_URL = "http://jonathanrs.infinityfreeapp.com";

function logout() {
  axios.post(APP_URL + "/logout").catch((err) => {
    const errorMessage = err.response.data.message ?? "Error";
    Swal.fire({
      title: errorMessage,
      icon: "warning",
    });
  });
}
