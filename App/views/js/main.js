const APP_URL = "http://crud.test";

function logout() {
  axios
    .post(APP_URL + "/logout")
    .then((res) => {
      console.log(res);
      if (res.status === 200) {
        // window.location.href = `${APP_URL}/login`;
      }
    })
    .catch((err) => {
      console.log(err);
    });
}
