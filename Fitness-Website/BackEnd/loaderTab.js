document.addEventListener("DOMContentLoaded", function () {
  fetch("adminPannel/aside.html")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("asideHeader").innerHTML = data;
    });
  fetch("adminPannel/header.html")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("headerAdmin").innerHTML = data;
    });
  fetch("adminPannel/responsiveTab.html")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("responsiveTab").innerHTML = data;
    });
});
