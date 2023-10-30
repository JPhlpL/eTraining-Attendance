//!! Must improved if the input data is not found
$(document).ready(function() {
    $.getJSON('../controller/controller_getapprovaltag.php', function(data) {
        var selectize = $('#USER_ACCOUNT_TYPE').selectize({
        plugins: ["remove_button"],
        options: data,
        labelField: 'text',
        valueField: 'value',
        delimiter: ',',
        create: false
        });
    });
    
});