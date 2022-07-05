var userPassword = document.getElementById("userPassword")
    , confirm_password = document.getElementById("userRepeatPassword");

function validatePassword(){
  if(userPassword.value != userRepeatPassword.value) {
    userRepeatPassword.setCustomValidity("Passwords Don't Match");
  } else {
    userRepeatPassword.setCustomValidity('');
  }
}
userPassword.onchange = validatePassword;
userRepeatPassword.onkeyup = validatePassword;
