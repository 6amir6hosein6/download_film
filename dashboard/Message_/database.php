<?php
error_reporting(0);
//getting_message();
function connect_db(){
    $db = new SQLite3("message_to_admin.db");
    return $db;
}

function getting_message(){
    $db = connect_db();
    $arr = array("title","message","date","from","read");
    $arr2 = array($arr);
    $user = $db -> query("select * from message");
    $i =0 ;
    do{
        $row = $user -> fetchArray(SQLITE3_ASSOC);
        $arr['title']=$row['subject'] ;
        $arr['message']=$row['message'] ;
        $arr['date']=$row['date'] ;
        $arr['from']=$row['from'] ;
        $arr['read']=$row['read'] ;
        unset($arr[0]);
        unset($arr[1]);
        unset($arr[2]);
        unset($arr[3]);
        unset($arr[4]);
//        echo '<pre>     arr:';
//        print_r($arr);
//        echo '<pre>';
        array_push($arr2,$arr);

    }while(next($row));
    unset($arr2[(sizeof($arr2)-1)]);
    unset($arr2[0]);
//    echo '<pre>     arr2:';
//    print_r($arr2);
//    echo '<pre>';
    return $arr2;

}
function Insert_to_db($subject,$message,$date,$reed,$from){
    $db = connect_db();
    $db ->query("Insert Into message values ('$subject','$message','$date',$reed,'$from')");
    return true;
}

