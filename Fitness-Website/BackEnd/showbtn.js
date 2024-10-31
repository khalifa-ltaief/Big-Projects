let input = document.querySelector(".pass-input");
let showBtn = document.querySelector(".test i");
showBtn.onclick = function () {
  if (input.type === "password") {
    input.type = "text";
    showBtn.classList.add("active");
  } else {
    input.type = "password";
    showBtn.classList.remove("active");
  }
  
};
