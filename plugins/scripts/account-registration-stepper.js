// Preview Profile Picture
function preview() {
  thumb1.src=URL.createObjectURL(event.target.files[0]);
  }
  
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    var stepperNode = document.querySelector('.bs-stepper');
    stepper = new Stepper(stepperNode, {
      animation: true,
      linear: false,
    });
  
    stepperNode.addEventListener('show.bs-stepper', function (event) {
      var index = event.detail.indexStep;
      var numberOfSteps = document.querySelectorAll('#candidate-content .line').length;
      var line = document.getElementsByClassName('line');
  
  // The first for loop is for increasing the steps, 
  // the second is for turning them off when going back
  // and the third with the if statement because the last line 
  // can't seem to turn off when I press the first item. ¯\_(ツ)_/¯
  
      for (i = 0; i < index; i++) {
        line[i].classList.add("crossed");
        for (j = index; j < numberOfSteps; j++) {
          line[j].classList.remove("crossed"); 
        }
      }
      
      if (event.detail.to == 0) {
        for (k = index; k < numberOfSteps; k++) {
          line[k].classList.remove("crossed");
        }
        line[0].classList.remove("crossed");
      }
      // console.log(0);
    });
  });

    var form = document.querySelector('form');
    var validFormFeedback = document.querySelector('#confirmation-part .valid-feedback');
    var inValidFormFeedback = document.querySelector('#confirmation-part .invalid-feedback');
    
    form.addEventListener('submit', function(event) {
    form.classList.remove('was-validated');
    inValidFormFeedback.classList.remove('d-block');
    validFormFeedback.classList.remove('d-block');
    
    if (!form.checkValidity()) {
    Swal.fire({
      title: 'Error!',
      text: 'Check again your inputs',
      icon: 'error',
      confirmButtonText: 'OK' 
      });
    event.preventDefault();
    event.stopPropagation();
    inValidFormFeedback.classList.add('d-block');
    } else {
    validFormFeedback.classList.add('d-block');
    }
    form.classList.add('was-validated');
    }, false);
    
    //! Password Showing
    // showing Password
    const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         document.getElementById("show").classList.remove('fa-eye');
         document.getElementById("show").classList.add('fa-eye-slash');
       }else{
         pass_field.type = "password";
         document.getElementById("show").classList.remove('fa-eye-slash');
         document.getElementById("show").classList.add('fa-eye');        
       }
      });
    // showing Confirm Password
    const con_pass_field = document.querySelector('.con_pass-key');
      const con_showBtn = document.querySelector('.con_show');
      con_showBtn.addEventListener('click', function(){
       if(con_pass_field.type === "password"){
         con_pass_field.type = "text";
         document.getElementById("con_show").classList.remove('fa-eye');
         document.getElementById("con_show").classList.add('fa-eye-slash');
       }else{
         con_pass_field.type = "password";
         document.getElementById("con_show").classList.remove('fa-eye-slash');
         document.getElementById("con_show").classList.add('fa-eye');        
       }
      });
      //! 

      //! Username Duplicate Checker Function
        function usernameDuplicateValidation(){
          var username_state = false;
          var username = $('#username').val();

              if (username == '') {
                username_state = false;
                return;
              }
              
              $.ajax({
                url: 'register.php',
                type: 'post',
                data: {
                  'username_check' : 1,
                  'username' : username,
                },
                success: function(response){
                  if (response == 'taken' ) {
                    username_state = false;
                    $('#username').addClass("border border-danger");
                    $('#username_validation_label').removeClass("d-none");

                    $('#username_duplicate').val(0);
                    duplicateUsername.classList.add('fa-circle');
                    duplicateUsername.classList.remove('fa-check');
                    duplicateUsername.classList.remove('text-success');
                    duplicateUsername.classList.add('text-danger');       
                  }else if (response == 'not_taken') {
                    username_state = true;
                    $('#username').removeClass("border border-danger");
                    $('#username_validation_label').addClass("d-none");

                    $('#username_duplicate').val(1);
                    duplicateUsername.classList.remove('fa-circle');
                    duplicateUsername.classList.add('fa-check');
                    duplicateUsername.classList.add('text-success');
                    duplicateUsername.classList.remove('text-danger');
                  }
                }
          });
        }
        //! Username Duplicate Checker Function

        //! Name Duplicate Checker Function
        function nameDuplicateValidation(){

          var name_state = false;
          var name = $('#name').val();
          if (name == '') {
            name_state = false;
            return;
          }  
          $.ajax({
            url: 'register.php',
            type: 'post',
            data: {
              'name_check' : 1,
              'name' : name,
            },
            success: function(response){
              if (response == 'taken' ) {
                name_state = false;
                $('#name').addClass("border border-danger");
                $('#name_duplicate').val(0);
                $('#name_validation_label').removeClass("d-none");
                //console.log(0);
              }else if (response == 'not_taken') {
                name_state = true;
                $('#name').removeClass("border border-danger");
                $('#name_duplicate').val(1);
                $('#name_validation_label').addClass("d-none");
                //console.log(1);
              
              }
            }
          });
        }
        //! Name Duplicate Checker Function

      //! For Password Checker
      let state = false;
      let username = document.getElementById("username");
      let password = document.getElementById("password");
      let confirmpass = document.getElementById("confirm_password");
      let passwordStrength = document.getElementById("password-strength");
      let lowUpperCase = document.querySelector(".low-upper-case i");
      let number = document.querySelector(".one-number i");
      let specialChar = document.querySelector(".one-special-char i");
      let eightChar = document.querySelector(".eight-character i");
      let confirmPassword = document.querySelector(".confirm-password i");
      let duplicateUsername = document.querySelector(".username-duplicate i");
    
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
            passwordStrength.classList.remove('progress-bar-warning');
            passwordStrength.classList.remove('progress-bar-success');
            passwordStrength.classList.add('progress-bar-danger');
            passwordStrength.style = 'width: 10%';
        } else if (strength == 3) {
            passwordStrength.classList.remove('progress-bar-success');
            passwordStrength.classList.remove('progress-bar-danger');
            passwordStrength.classList.add('progress-bar-warning');
            passwordStrength.style = 'width: 60%';
        } else if (strength == 4) {
             // Password Matching 
              $('#username,#password, #confirm_password').on('keyup keypress blur change', function () {

                function notEnabled()
                {
                  confirmPassword.classList.add('fa-circle');
                  confirmPassword.classList.remove('fa-check');
                  confirmPassword.classList.remove('text-success');
                  confirmPassword.classList.add('text-danger');  
                  $("#profilenextbtn").attr("disabled",true);
                }
                function isEnabled()
                {
                  confirmPassword.classList.remove('fa-circle');
                  confirmPassword.classList.add('fa-check');
                  confirmPassword.classList.add('text-success');
                  confirmPassword.classList.remove('text-danger');  
                  $("#profilenextbtn").removeAttr("disabled");
                }

                //! If All Empty
                if($('#username').val() === '' || $('#password').val() === '' || $('#confirm_password').val() === '')
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
    
            passwordStrength.classList.remove('progress-bar-warning');
            passwordStrength.classList.remove('progress-bar-danger');
            passwordStrength.classList.add('progress-bar-success');
            passwordStrength.style = 'width: 100%';
        }
    }
    
    // $(document).keypress(
    //   function(event){
    //     if (event.which == '13') {
    //       event.preventDefault();
    //     }
    // });
    
      //! For info
      let employeeName = document.getElementById("name");
      let employeeEmail = document.getElementById("email");
      let employeeMobile = document.getElementById("mobile");
      let employeeDept = document.getElementById("dept");
      let employeeSection = document.getElementById("section");
      let employeePosition = document.getElementById("position");
      //!

      $('#username, #name, #email, #mobile, #dept, #section, #position').on('keyup keypress blur change', function () {
      //! if the info is not empty
      if ($('#username').val() === "" 
          || $('#name').val() === "" 
          || $('#email').val() === ""
          || $('#mobile').val() === "" 
          || $('#dept').val() === "" 
          || $('#section').val() === ""
          || $('#position').val() === ""
          || $('#username_duplicate').val() === ""
          || $('#name_duplicate').val() === "") {
          $("#userinfobtn").attr("disabled",true);
      } 
      //! if the employee number and name is duplicate
      else if($('#username_duplicate').val() == 0 || $('#name_duplicate').val() == 0 )
      {
        $("#userinfobtn").attr("disabled",true);
      }
      else{
        $("#userinfobtn").removeAttr("disabled");
      }
    
    });

      //! Duplicate Checker < ---- For First Loading. You must use ready function then call for loading after page
      $(document).ready(function() {
        usernameDuplicateValidation();
        nameDuplicateValidation();
        $('#username,#password, #confirm_password').on('keyup keypress blur change', function(){
          usernameDuplicateValidation();
        });	
        $('#username, #name, #email, #mobile, #dept, #section, #position').on('keyup keypress blur change', function(){
          nameDuplicateValidation();
        });	
      });	
      //!

    //!For Image File Size Validation (Not more than 5mb)
    function validateSize(input) {
      const fileSize = input.files[0].size / 1024 / 1024 ; // in MiB
      if (fileSize > 5) {

        //! Create Sweet Alert Instead

        Swal.fire({
          icon: 'error',
          title: 'File Size Exceed!',
          text: 'The Maximum allowed file is 5mb. Thank you!'
        })

        $('#imageprof').val(''); //for clearing with Jquery

      } 
    }

    //! For Validation of File Extension in Image
    $("#imageprof").change(function () {
      var fileExtension = ['jpeg', 'jpg', 'png'];
      if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {

        Swal.fire({
          icon: 'error',
          title: 'Wrong file extension',
          text: 'Only formats are allowed : '+fileExtension.join(', ')
        })
        $('#imageprof').val(''); //for clearing with Jquery
      }
    });

  
  
   