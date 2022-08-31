<?php

session_start();


$con = mysqli_connect('127.0.0.1:3325', 'root', '');

mysqli_select_db($con, 'sqldb');

$name = $_POST['name'];
$user = $_POST['email'];
$pass = $_POST['phone'];


/*$s = "select username from student_details where username = '$user'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
*/
    $reg = "insert into user_details values('$name', '$user', '$pass')";
    mysqli_query($con, $reg);
?>