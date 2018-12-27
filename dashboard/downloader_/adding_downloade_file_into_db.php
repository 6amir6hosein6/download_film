<?php

function connect_to_db(){
    $link = new mysqli("localhost", "root", "", "the_file_of_site");
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    return $link;
}

function getting_file_downloaded(){
    $arr = array('name'=>null
    ,'dis'=>null
    ,'image_addess'=>null
    ,'file_addess'=>null);
    $arr2 = array($arr);
    $sql = "SELECT * FROM files";
    $link = connect_to_db();
    mysqli_set_charset($link,"utf8");
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $arr['name'] = $row['name1'];
            $arr['dis'] = $row['discription'];
            $arr['image_addess'] = $row['Image_address'];
            $arr['file_addess'] = $row['file_address'];
            array_push($arr2,$arr);
        }
    }
    return $arr2;
}
function insert_data_of_downloaded_file($name,$dis,$image_address,$file_address){
    $link = connect_to_db();
    mysqli_set_charset($link,"utf8");
    echo '<br>'.$name;
    echo '<br>'.$dis;
    $sql = "INSERT INTO files (name1,discription,Image_address,file_address) values ('".$name."','".$dis."','$image_address','$file_address')";
    if ($link->query($sql) === TRUE) {
        //header("Location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
}

?>
