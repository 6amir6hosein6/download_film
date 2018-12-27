<?php
error_reporting(0);
//getting_message();
function connect_db(){
    $db = new SQLite3("file_requested.db");
    return $db;
}
function getting_files_request(){
    $db = connect_db();
    $arr = array("name","discription","link","image_link");
    $arr2 = array($arr);
    $user = $db -> query("select * from files");
    $i =0 ;
    do{
        $row = $user -> fetchArray(SQLITE3_ASSOC);
        $arr['name']=$row['name'] ;
        $arr['discription']=$row['discription'] ;
        $arr['link']=$row['link'] ;
        $arr['image_link']=$row['image'] ;
        $arr['filter']=$row['filter'] ;
        unset($arr[0]);
        unset($arr[1]);
        unset($arr[2]);
        unset($arr[3]);
        array_push($arr2,$arr);

    }while(next($row));
    unset($arr2[(sizeof($arr2)-1)]);
    unset($arr2[0]);
//    echo '<pre>     arr2:';
//    print_r($arr2);
//    echo '<pre>';
    return $arr2;

}
function Insert_to_db($name,$discription,$link,$image_link,$filter){
    $db = connect_db();
    $db ->query("Insert Into files values ('$name','$discription','$link','$image_link',$filter)");
    return true;
}
function delete_db($link){
    $db = connect_db();
    $db ->query("delete from files where link = '$link'");
    return true;
}

