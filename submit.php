<?php
include('dbconfig.php');
// Fetching Values From the post method
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_POST['username'])) {
$query = mysqli_query($dbconfig,"insert into user(username, password) values ('$username', '$password')"); //Insert Query
echo "Form Submitted succesfully";
}
?>
