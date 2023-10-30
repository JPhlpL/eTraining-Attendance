
//! For Password Checker
let state = false;
let password = document.getElementById("password");
let confirmpass = document.getElementById("confirm_password");
let passwordStrength = document.getElementById("password-strength");
let lowUpperCase = document.querySelector(".low-upper-case i");
let number = document.querySelector(".one-number i");
let specialChar = document.querySelector(".one-special-char i");
let eightChar = document.querySelector(".eight-character i");
let confirmPassword = document.querySelector(".confirm-password i");

password.addEventListener("keyup", function(){
    let pass = document.getElementById("password").value;
    checkStrength(pass);
});

function checkStrength(password) {
  let strength = 0;

  //If password contains both lower and uppercase characters
  if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
      strength += 1;
      lowUpperCase.classList.remove('fa-circle');
      lowUpperCase.classList.add('fa-check');
      lowUpperCase.classList.add('text-success');
      lowUpperCase.classList.remove('text-danger');
  } else {
      lowUpperCase.classList.add('fa-circle');
      lowUpperCase.classList.remove('fa-check');
      lowUpperCase.classList.remove('text-success');
      lowUpperCase.classList.add('text-danger');

  }
  //If it has numbers and characters
  if (password.match(/([0-9])/)) {
      strength += 1;
      number.classList.remove('fa-circle');
      number.classList.add('fa-check');
      number.classList.add('text-success');
      number.classList.remove('text-danger');
  } else {
      number.classList.add('fa-circle');
      number.classList.remove('fa-check');
      number.classList.remove('text-success');
      number.classList.add('text-danger');
  }
  //If it has one special character
  if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
      strength += 1;
      specialChar.classList.remove('fa-circle');
      specialChar.classList.add('fa-check');
      specialChar.classList.add('text-success');
      specialChar.classList.remove('text-danger');
  } else {
      specialChar.classList.add('fa-circle');
      specialChar.classList.remove('fa-check');
      specialChar.classList.remove('text-success');
      specialChar.classList.add('text-danger');
  }
  //If password is greater than 7
  if (password.length > 7) {
      strength += 1;
      eightChar.classList.remove('fa-circle');
      eightChar.classList.add('fa-check');
      eightChar.classList.add('text-success');
      eightChar.classList.remove('text-danger');
  } else {
      eightChar.classList.add('fa-circle');
      eightChar.classList.remove('fa-check');
      eightChar.classList.remove('text-success');
      eightChar.classList.add('text-danger'); 
  }

  // If value is less than 2
  if (strength < 2) {
      passwordStrength.classList.remove('bg-warning');
      passwordStrength.classList.remove('bg-success');
      passwordStrength.classList.add('bg-danger');
      passwordStrength.style = 'width: 10%';
  } else if (strength == 3) {
      passwordStrength.classList.remove('bg-success');
      passwordStrength.classList.remove('bg-danger');
      passwordStrength.classList.add('bg-warning');
      passwordStrength.style = 'width: 60%';
  } else if (strength == 4) {
       // Password Matching 
        $('#password, #confirm_password').on('keyup keypress blur change', function () {

          function notEnabled()
          {
            confirmPassword.classList.add('fa-circle');
            confirmPassword.classList.remove('fa-check');
            confirmPassword.classList.remove('text-success');
            confirmPassword.classList.add('text-danger');  

            $("#changebtn").attr("disabled",true);
          }
          function isEnabled()
          {
            confirmPassword.classList.remove('fa-circle');
            confirmPassword.classList.add('fa-check');
            confirmPassword.classList.add('text-success');
            confirmPassword.classList.remove('text-danger');  
            $("#changebtn").removeAttr("disabled");
          }

          //! If All Empty
          if($('#password').val() === '' || $('#confirm_password').val() === '')
          {
            notEnabled();
          }
          //! If Confirm not match
          else if($('#password').val() != $('#confirm_password').val())
          {
            notEnabled();
          }
          else{
            isEnabled();
          }
      });

      passwordStrength.classList.remove('bg-warning');
      passwordStrength.classList.remove('bg-danger');
      passwordStrength.classList.add('bg-success');
      passwordStrength.style = 'width: 100%';
  }
}

// Validate Password
function validatePassword() {
    const password = document.querySelector('input[name=password]');
    const confirm_password = document.querySelector('input[name=confirm_password]');
    if (confirm_password.value === password.value) {
      confirm_password.setCustomValidity('');
    } else {
      confirm_password.setCustomValidity('Passwords do not match');
    }
  }

// showing Password
const pass_field = document.querySelector('.pass-key');
const showBtn = document.querySelector('.passwordshow');
    showBtn.addEventListener('click', function(){
    if(pass_field.type === "password"){
        pass_field.type = "text";
        document.getElementById("show-pass").classList.add('fa-eye-slash');
    }else{
        pass_field.type = "password";
        document.getElementById("show-pass").classList.remove('fa-eye-slash');
         document.getElementById("show-pass").classList.add('fa-eye');  
    }
    }); 

// showing Confirm Password
const confirm_pass_field = document.querySelector('.confirm-pass-key');
const confirm_showBtn = document.querySelector('.confirm-passwordshow');
confirm_showBtn.addEventListener('click', function(){
    if(confirm_pass_field.type === "password"){
        confirm_pass_field.type = "text";
        document.getElementById("confirm-showpass").classList.add('fa-eye-slash');
    }else{
        confirm_pass_field.type = "password";
        document.getElementById("confirm-showpass").classList.remove('fa-eye-slash');
        document.getElementById("confirm-showpass").classList.add('fa-eye');  
    }
    }); 