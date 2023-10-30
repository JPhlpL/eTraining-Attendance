function fetchcontrolNum(){
    $.getJSON("../controller/controller_createtraining.php?action=fetchcontrolnum", function(data) {
        // Clear the existing control number display
        $("#TRAINING_NUM").empty();

        $.each(data, function(i, item) {
            
            let itemTransaction = item.TRAINING_NUM;
            const transactParam = itemTransaction.split("R");
            const controlNum = parseInt(transactParam[1]);
            let incrementNum = controlNum + 1;
            let formControlNum = transactParam[0]+'R'+incrementNum;
            $("#TRAINING_NUM").val(formControlNum);
        });
    });
}

function GetDetail(str) {
    if (str.length == 0) {
        document.getElementById("TRAINING_LOCATION").value = "";
        document.getElementById("TRAINING_DETAIL").value = "";
        document.getElementById("TRAINING_STATUS").value = "";
        document.getElementById("TRAINING_OCCUR").value = "";
        document.getElementById("TRAINING_OCCUR_NUM").value = "";
        document.getElementById("TRAINING_START_DATE").value = "";
        document.getElementById("TRAINING_END_DATE").value = "";
        document.getElementById("TRAINING_START_TIME").value = "";
        document.getElementById("TRAINING_END_TIME").value = "";
        document.getElementById("TRAINING_REMARKS").value = "";
        document.getElementById("TRAINING_MIN_REQ").value = "";
        document.getElementById("TRAINING_MAX_REQ").value = "";
        document.getElementById("TRAINING_TRAINOR").value = "";
        return;
        }
        else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                    document.getElementById("TRAINING_LOCATION").value = myObj[0];
                    document.getElementById("TRAINING_DETAIL").value = myObj[1];
                    document.getElementById("TRAINING_STATUS").value = myObj[2];
                    document.getElementById("TRAINING_OCCUR").value = myObj[3];
                    document.getElementById("TRAINING_OCCUR_NUM").value = myObj[4];
                    document.getElementById("TRAINING_START_DATE").value = myObj[5];
                    document.getElementById("TRAINING_END_DATE").value = myObj[6];
                    document.getElementById("TRAINING_START_TIME").value = myObj[8];
                    document.getElementById("TRAINING_END_TIME").value = myObj[9];
                    document.getElementById("TRAINING_REMARKS").value = myObj[10];
                    document.getElementById("TRAINING_MIN_REQ").value = myObj[11];
                    document.getElementById("TRAINING_MAX_REQ").value = myObj[12];
                    document.getElementById("TRAINING_TRAINOR").value = myObj[13];
            }
        };
        xmlhttp.open("GET", "autofill_info_trainingform.php?trainingname=" + str, true);
        xmlhttp.send();
        }
}

$(document).ready(function(){

  

    fetchcontrolNum();
    setInterval(function() {
        fetchcontrolNum();
    }, 3000);


    $("#trainingform").submit(function(e) {

        e.preventDefault();
 
        Swal.fire({
         title: "Confirmation",
         text: "Are you sure?",
         type: "info",
         showCancelButton: true,
         confirmButtonColor: "#DD6B55",
         confirmButtonText: "Yes",
         cancelButtonText: "No",
         closeOnConfirm: false,
         closeOnCancel: false
     }).then(function (result) {
 
         if (result.value) {
             //
             $.ajax({
             
                 url:"../controller/controller_createtraining.php?action=addtraining",  
                 method:"POST",  
                 data: new FormData($('#trainingform')[0]), // get all form field value in serialize form
                 contentType: false,
                 cache: false,
                 processData:false,
                 success: function()
                 { 
                     Swal.fire(
                         'Success',
                         'Your form is submitted. Thank you!',
                         'success'
                       ).then(function()
                       {  
                        location.reload();
                        return false;
                       });
                 },
                 
                 error: function() {
                     Swal.fire(
                         'Error',
                         'Check again your inputs. Thank you!',
                         'error'
                       )
                 }
              });
             //
         } 
         else if (result.value === "")
         {
             Swal.fire("Cancelled", "Cancel", "error");
             return false;  
         }
         
         });
 
     return false;  
 
     });  

});