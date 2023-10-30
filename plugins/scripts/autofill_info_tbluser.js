// onkeyup event will occur when the user
// release the key and calls the function
// assigned to this event
function GetDetail(str) {
if (str.length == 0) {

document.getElementById("USER_NAME").value = "";
document.getElementById("USER_EMAIL").value = "";
document.getElementById("USER_DEPT").value = "";
document.getElementById("USER_SECTION").value = "";
document.getElementById("USER_POSITION").value = "";


return;
}
else {

// Creates a new XMLHttpRequest object
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {

    // Defines a function to be called when
    // the readyState property changes
    if (this.readyState == 4 && this.status == 200) {
        
        // Typical action to be performed
        // when the document is ready
        var myObj = JSON.parse(this.responseText);

        // Returns the response data as a string and store this array in a variable assign the value

        // received to Name input field
        document.getElementById("USER_NAME").value = myObj[0];
        // Position input field
        document.getElementById("USER_EMAIL").value = myObj[1];
        // Assign the value received to Email input field
        document.getElementById("USER_DEPT").value = myObj[2];
        // Department input field
        document.getElementById("USER_SECTION").value = myObj[3];
        // Department input field
        document.getElementById("USER_POSITION").value = myObj[4];
      

    }
};

// xhttp.open("GET", "filename", true);
xmlhttp.open("GET", "autofill_info_tbluser.php?USER_ID=" + str, true);

// Sends the request to the server
xmlhttp.send();
}
}
