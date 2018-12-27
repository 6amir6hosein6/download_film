<?php
//echo '<pre>';
//print_r($_COOKIE);
//echo '</pre>';
unset($_COOKIE['username']);
unset($_COOKIE['password']);
unset($_COOKIE['email']);
setcookie('username', null, -1, '/');
setcookie('email', null, -1, '/');
header("Location:../test.php");
//echo '<pre>';
//print_r($_COOKIE);
//echo '</pre>';