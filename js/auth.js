
  home = document.querySelector("body"),
  formContainer = document.querySelector(".form_container")
  pwShowHide = document.querySelectorAll(".pw_hide");


//variables for form open and close
  const formCloseBtn = document.querySelector(".form_close")
  // const formOpenBtn = document.querySelector("#form-open")
  const formOpenBtn = document.getElementById("auth-body")
  console.log(formOpenBtn)
  //variable to switch between login and signup form
let signupLink = document.querySelector("#signup")
let loginLink = document.querySelector("#login")

//variables for signup form
const signBtn = document.getElementById("signBtn");
const signupPasswordInput = document.getElementById("signup-password");
const signupEmailInput = document.getElementById("signup-email");

//variables for login form
const loginBtn = document.getElementById("loginBtn");
const loginPasswordInput = document.getElementById("login-password");
const loginEmailInput = document.getElementById("login-email");

//variable for signout
const signout = document.getElementById("signout");

const default_email = "ayesha@webnet.com.pk";
const default_password = "123456";

// formOpenBtn.addEventListener("click", () => {
//   document.body.style.overflow = "hidden";
//   home.classList.add("show");
// });
function formOpen(){
  document.body.style.overflow = "hidden";
  home.classList.add("show");
}
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

function goToSignup(){
  formContainer.classList.add("active");
};
function goToLogin(){

  formContainer.classList.remove("active");
}


function formClose() {
  document.body.style.overflow = "visible";
  home.classList.remove("show");
}

function saveCredentials(email, password) {
  localStorage.setItem("email", email);
  localStorage.setItem("password", password);
}

function getCredentials() {
  return {
    // email: localStorage.getItem("email"),
    // password: localStorage.getItem("password"),
    email: default_email,
    password: default_password
  };
}

function isUserExist() {
  const { email } = getCredentials();
  if (email) {
    // document.getElementById("user").innerHTML = email;
    formOpenBtn.style.display = "none";
    // document.getElementById("signout").classList.remove("d-none");
    document.getElementById("member-ship").classList.remove("d-none");
  }
  else {
    // signOut()
  }
}



document.addEventListener("DOMContentLoaded", () => {
  formOpen();

});



loginBtn.addEventListener('click', (e) => {
  e.preventDefault();

  const email = loginEmailInput.value;
  const password = loginPasswordInput.value;

  const { email: storedEmail, password: storedPassword } = getCredentials();
  console.log("storedEmail===>",storedEmail,getCredentials());
  if (email === storedEmail && password === storedPassword) {
      alert('Login Successful');
      formClose();
      isUserExist();
     
  } else {
      alert('Login Failed');
  }
});

signupBtn.addEventListener('click', (e) => {
  e.preventDefault();
  const email = signupEmailInput.value;
  const password = signupPasswordInput.value;

  if (email && password) {
      saveCredentials(email, password);
      alert('Signup Successful, Please Login');
      loginEmailInput.value = email;
      loginPasswordInput.value = password;
      goToLogin();
  } else {
      alert('Signup Failed');
  }
});

function signOut() {
  // document.getElementById("user").innerHTML = "";
    formOpenBtn.style.display = "block";
    // document.getElementById("signout").classList.add("d-none");
    document.getElementById("member-ship").classList.add("d-none");
};


formCloseBtn.addEventListener("click", formClose);
signupLink.addEventListener("click", goToSignup);
loginLink.addEventListener("click", goToLogin);
// signout.addEventListener("click", signOut)

 