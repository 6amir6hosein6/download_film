<?php
include ("connect_to_database.php");
insert_data($_POST['name'],$_POST['username'],$_POST['email'],$_POST['password']);
unset($_POST['username']);
unset($_POST['password']);
unset($_POST['email']);
unset($_POST['name']);
