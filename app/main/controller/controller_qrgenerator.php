<?php 

include '../../../plugins/qr-generator/qrlib.php';

if(isset($_POST['IT_ITEM_CONTROL_NUMBER'])){

    // Get Query for the info
    $sql = mysqli_query($link,"SELECT * FROM tblinventory WHERE IT_ITEM_CONTROL_NUMBER ='".$_POST['IT_ITEM_CONTROL_NUMBER']."'");
    $row = mysqli_fetch_array($sql);

    $text =  $row['IT_ITEM_NAME']."|". $row['IT_ITEM_CONTROL_NUMBER']."|". $row['IT_CATEGORY_ITEM']."|". $row['IT_ITEM_PHOTO']."|". $row['IT_ITEM_QUANTITY']."|". $row['IT_ITEM_DESCRIPTION']."|". $row['IT_ITEM_REMARKS']."|". $row['IT_ITEM_STATUS']."|". $row['IT_ITEM_FIRSTCLAIM_DATETIME']."|". $row['IT_ITEM_ENCODER']."|". $row['IT_ITEM_PIC']."|". $row['IT_FORM_NUM']."|". $row['IT_ITEM_LABEL'];

    // $path variable store the location where to
    // store image and $file creates directory name
    // of the QR code file by using 'uniqid'
    // uniqid creates unique id based on microtime
    $path = '../../qr-upload/';
    $file = $path.uniqid().".png";

    // $ecc stores error correction capability('L')
    $ecc = 'L';
    $pixel_Size = 10;

    // Generates QR Code and Stores it in directory given
    QRcode::png($text, $file, $ecc, $pixel_Size);

    if(isset($_POST['submit'])){
        $type = "success";
        $message = "";
        echo "<label class=\"mt-0 swalDefaultSuccess\" hidden></label>";   
    }   
}
?>