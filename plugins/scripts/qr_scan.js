function docReady(fn) {
    // see if DOM is already available
    if (document.readyState === "complete"
        || document.readyState === "interactive") {
        // call on next available tick
        setTimeout(fn, 1);
        
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}

docReady(function () {
    var resultContainer = document.getElementById('qr-reader-results');
    var lastResult, countResults = 0;
    function onScanSuccess(decodedText, decodedResult) {
        //if (decodedText !== lastResult) {
            
            ++countResults;
            lastResult = decodedText;
            // Handle on success condition with the decoded message.
            console.log(`Scan result ${decodedText}`, decodedResult);

            const textArray = decodedText.split("|");

            var it_item_name = document.getElementById('IT_ITEM_NAME');
            var it_item_control_number = document.getElementById('IT_ITEM_CONTROL_NUMBER');
            var it_category_item = document.getElementById('IT_CATEGORY_ITEM');
            var it_item_photo = document.getElementById('IT_ITEM_PHOTO');
            var it_item_quantity = document.getElementById('IT_ITEM_QUANTITY');
            var it_item_description = document.getElementById('IT_ITEM_DESCRIPTION');
            var it_item_remarks = document.getElementById('IT_ITEM_REMARKS');
            var it_item_status = document.getElementById('IT_ITEM_STATUS');
            var it_item_firstclaim_datetime = document.getElementById('IT_ITEM_FIRSTCLAIM_DATETIME');
            var it_item_encoder = document.getElementById('IT_ITEM_ENCODER');
            var it_item_pic = document.getElementById('IT_ITEM_PIC');
            var it_form_num = document.getElementById('IT_FORM_NUM');
            var it_item_label = document.getElementById('IT_ITEM_LABEL');

            it_item_name.value = textArray[0];
            it_item_control_number.value = textArray[1];
            it_category_item.value = textArray[2];
            it_item_photo.value = textArray[3];
            it_item_quantity.value = textArray[4];
            it_item_description.value = textArray[5];
            it_item_remarks.value = textArray[6];
            it_item_status.value = textArray[7];
            it_item_firstclaim_datetime.value = textArray[8];
            it_item_encoder.value = textArray[9];
            it_item_pic.value = textArray[10];
            it_form_num.value = textArray[11];
            it_item_label.value = textArray[12];

            document.getElementById("qrscan").src="../../uploads/user_profilepic/"+it_item_photo.value

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
            icon: 'success',
            title: 'QR Read Successfully'
            })
        //}
    
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "qr-reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);
});