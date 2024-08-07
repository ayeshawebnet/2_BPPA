  const formOpenBtn = document.querySelector("#form-open"),
  home = document.querySelector(".home"),
  formContainer = document.querySelector(".form_container"),
  formCloseBtn = document.querySelector(".form_close"),
  signupBtn = document.querySelector("#signup"),
  loginBtn = document.querySelector("#login"),
  pwShowHide = document.querySelectorAll(".pw_hide");

  const email=document.getElementById("email");
  const password=document.getElementById("password");

  const default_email="ayesha@webnet.com.pk";
  const default_password="123456";

  formOpenBtn.addEventListener("click", () => {
  document.body.style.overflow = "hidden";
  home.classList.add("show");
});

  formCloseBtn.addEventListener("click", () => {
  document.body.style.overflow = "visible";
  home.classList.remove("show");
});

  pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    if (getPwInput.type === "password") {
      getPwInput.type = "text";
      icon.classList.replace("uil-eye-slash", "d-none");
      icon.classList.replace("uil-eye-slash", "d-none");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("uil-eye", "uil-eye-slash");
    }
  });
});

  signupBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
});

  loginBtn.addEventListener("click", (e) => {
  // e.preventDefault();
  formContainer.classList.remove("active");
  debugger
  if(email.value==default_email && password.value==default_password){
    alert("Login Successful");
    formCloseBtn.click();
  }
  



});
