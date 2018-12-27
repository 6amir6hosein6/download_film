<?php
include "file_requested_db.php";
//it get the file witch clicked to delete
//it goes to file request  db and get the selecting file
$file = getting_files_request()[$_POST['download']];
$filename = $file['link'];
$file_address = $file['image_link'];
unlink($file_address);
delete_db($filename);