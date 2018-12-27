<?php
include ("file_requested_db.php");
echo '<pre>';
print_r($_POST);
echo '</pre>';
session_start();
error_reporting(1);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


echo '<pre>';
print_r($_FILES);
echo '</pre>';

// Check if file is an image file or not!!!!!------------
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    $_SESSION['message_of_uploading'] = "it is not an image";
    header("Location:user_download.php");
    $uploadOk = 0;
}else{
    $_SESSION['message_of_uploading'] = null;
}
//------------end of cheking ---------------------------






//-------------checking the size of file-----------------
if ($_FILES["fileToUpload"]["size"] > 500000) {
echo "Sorry, your file is too large.";
$uploadOk = 0;
}
//------------end of checking size-----------------------





//-------------uploading image ---------------------------
$file = $_FILES["fileToUpload"]["tmp_name"];
echo "$file<br>";
echo "$target_file";

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"img/request_for_upload/".basename($_FILES["fileToUpload"]["name"]))) {
    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    $filter = 0;
    if($_POST['filter']) $filter =1 ;
    Insert_to_db($_POST['Title'],$_POST['Discription'],$_POST['Link'],"img/request_for_upload/".basename($_FILES["fileToUpload"]["name"]),$filter);
} else {
    print_r($errors);
}
//-------end of uploading image  --------------------------




