// onkeyup event will occur when the user
// release the key and calls the function
// assigned to this event
function GetDetail(str) {
  if (str.length == 0) {
    document.getElementById("EMPLOYEE_NAME").value = "";
    document.getElementById("EMPLOYEE_ID").value = "";
    document.getElementById("EMPLOYEE_DEPT").value = "";
    document.getElementById("EMPLOYEE_SECTION").value = "";
    document.getElementById("EMPLOYEE_POSITION").value = "";
    document.getElementById("EMPLOYEE_STATUS").value = "";
    document.getElementById("EMPLOYEE_PHOTO").value = "";
    return;
  } else {
    // Creates a new XMLHttpRequest object
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      // Defines a function to be called when
      // the readyState property changes
      if (this.readyState == 4 && this.status == 200) {
        // Typical action to be performed
        // when the document is ready
        var myObj = JSON.parse(this.responseText);

        if(myObj.action && myObj.action === 'error'){
            Swal.fire({
                icon: "error",
                title: "Error!",
                text: "No Employee Number Found!",
                timer: 1000,
                didOpen: () => {
                  Swal.showLoading();
      
                  timerInterval = setInterval(() => {
                    Swal.getHtmlContainer().querySelector("strong").textContent =
                      (Swal.getTimerLeft() / 1000).toFixed(0);
                  }, 100);
                },
                willClose: () => {
                  clearInterval(timerInterval);
                }
              });
            document.getElementById("ATTN_RFID_NUM").value = '';
            return;
        }
        // Returns the response data as a string and store this array in a variable assign the value
        document.getElementById("EMPLOYEE_NAME").value = myObj[0];
        document.getElementById("EMPLOYEE_ID").value = myObj[1];
        document.getElementById("EMPLOYEE_DEPT").value = myObj[2];
        document.getElementById("EMPLOYEE_SECTION").value = myObj[3];
        document.getElementById("EMPLOYEE_POSITION").value = myObj[4];
        document.getElementById("EMPLOYEE_STATUS").value = myObj[5];
        document.getElementById("EMPLOYEE_PHOTO").value = myObj[6];
        document.getElementById("qrscan").src =
          "../../uploads/employee_photo/" +
          document.getElementById("EMPLOYEE_PHOTO").value;
        document.getElementById("sendAttendanceRFID").click();
      }
    };

    // xhttp.open("GET", "filename", true);
    xmlhttp.open("GET", "autofill_assoc_info.php?rfid=" + str, true);
    // Sends the request to the server
    xmlhttp.send();
  }
}
