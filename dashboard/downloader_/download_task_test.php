<?php
$file = 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Ruhollah_Khomeinii.jpg/220px-Ruhollah_Khomeinii.jpg';
$file_contents = file_get_contents($link);
file_put_contents($file, $file_contents);

        header('Content-type: image/jpeg');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit();
?>