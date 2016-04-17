<?php

if(isset($_POST["submit"]))
{


$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
 
$username = mysqli_real_escape_string($db, $username);
$email = mysqli_real_escape_string($db, $email);
$password = mysqli_real_escape_string($db, $password);
$password = md5($password);








}