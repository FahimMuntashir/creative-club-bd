<?php

include "connection.php";

$name = $_POST['username'];
$pass = $_POST['password'];


$s = "select * from user_info where username='$name' && password='$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    header('location:home.php');
} else {
    header('location:login.php');
}

?>