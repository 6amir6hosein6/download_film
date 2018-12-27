<?php
error_reporting(1);
include "file_requested_db.php";
include "adding_downloade_file_into_db.php";
$file = getting_files_request()[$_POST['download']];
$file_name = $file['name'];
//echo '<pre>';
//print_r($file);
//echo '</pre>';
//------getting the format of file from link
$filename = $file['link'];
$ext = end(explode('.', $filename));
$ext = substr(strrchr($filename, '.'), 1);
$ext = substr($filename, strrpos($filename, '.') + 1);
$ext = preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);
//------end of getting the format of file from link
//------making new folder----------
mkdir('downloaded_file/amirhoseinNajafy', 0777, true);
file_put_contents("downloaded_file/amirhoseinNajafy/$file_name.$ext", fopen("$filename", 'r'));
//------checking the size of file have downloaded if it was not 0 it is a seccessfully downloading
$downloaded_file = filesize("downloaded_file/amirhoseinNajafy/$file_name.$ext");
//delete_db($filename);
if($downloaded_file != 0){
    echo 'downloaded';
    insert_data_of_downloaded_file($file['name'],$file['discription'],$file['image_link'],"downloaded_file/amirhoseinNajafy/$file_name.$ext");
}else{
    echo 'error in downloading!!!';
}