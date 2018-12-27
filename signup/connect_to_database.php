<?php
function connect_to_db(){
    $link = new mysqli("localhost", "root", "", "users_of_film_website");
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    return $link;
}

function getting_data($comming_username,$comming_password){
    session_start();
    unset($_SESSION["user_message"]);
    echo "serach for : ".$comming_username;
    $sql = "SELECT * FROM users";
    $link = connect_to_db();
    $result = $link->query($sql);
    echo '<br>line number = '.$result->num_rows;
    if ($result->num_rows > 0) {
        $p = 0;
        while($row = $result->fetch_assoc()) {
            echo '<br>-> '.$row['username'];
            if($row['username'] == $comming_username){
                if($row['password'] == $comming_password){
                    //$_SESSION["user_message"] = "log";
                    setcookie('username',$row['username'],time()+3600*24*7,'/');
                    setcookie('email',$row['email'],time()+3600*24*7,'/');
                    header("Location:../test.php");
                }else{
                    $_SESSION["user_message"] = "Wrong password!!!";
                    header("Location:index.php");
                }
                break;
            }else if($row['username'] != $comming_username&&$p==($result->num_rows-1)){
                $_SESSION["user_message"] = "not found";
                header("Location:index.php");
                echo $_SESSION["user_message"];
            }
            $p++;
        }
    } else {

    }
}
function insert_data($name,$username,$email,$password){
    $link = connect_to_db();
    mysqli_set_charset($link,"utf8");
    $sql = "INSERT INTO users (name1,password,email,username) values ('$name','$password','$email','$username')";
    if ($link->query($sql) === TRUE) {
        header("Location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
}

?>
