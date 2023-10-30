$(document).ready(function() {

    //! Displaying the Item in Realtime
    setInterval(function() {
        $.getJSON("../controller/controller_getCurrentControlNumber.php", function(data) {
            // Clear the existing control number display
            $("#control_numbers").empty();

            // Loop through the data and add the control numbers to the display
            $.each(data, function(i, item) {
              
                let itemTransaction = item.IT_TRANSACTION_ID;
                const transactParam = itemTransaction.split("F");
                const controlNum = parseInt(transactParam[1]);
                let incrementNum = controlNum + 1;
                let formControlNum = transactParam[0]+'F'+incrementNum;
        
                $("#IT_TRANSACTION_ID").val(formControlNum);
            
            });
        });
    }, 3000); // Update the display every 5 seconds
    //! Displaying the Item in Realtime
    
});

