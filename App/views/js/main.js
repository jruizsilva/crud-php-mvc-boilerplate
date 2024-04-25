const APP_URL = "http://crud.test";

function logout() {
  axios
    .post(APP_URL + "/logout")
    .then((res) => {
      if (res.status === 200 && res.data.success) {
        window.location.href = `${APP_URL}/login`;
      }
    })
    .catch((err) => {
      console.log(err);
    });
}
