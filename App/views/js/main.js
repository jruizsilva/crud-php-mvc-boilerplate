let APP_URL;

if (process.env.NODE_ENV === "production") {
  APP_URL = "jonathanrs.infinityfreeapp.com";
} else {
  APP_URL = "http://crud.test";
}

function logout() {
  axios.post(APP_URL + "/logout").catch((err) => {
    const errorMessage = err.response.data.message ?? "Error";
    Swal.fire({
      title: errorMessage,
      icon: "warning",
    });
  });
}
