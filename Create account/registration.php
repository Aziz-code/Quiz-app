<?php

session_start();


$con = mysqli_connect('127.0.0.1:3325', 'root', '');

mysqli_select_db($con, 'sqldb');

$name = $_POST['Name'];
$user = $_POST['User'];
$pass = $_POST['pass'];
$conn = $_POST['conn'];


$s = "select username from student_details where username = '$user'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
    echo "Username Already Taken";
}
elseif($pass!=$conn)
{
    echo "<script>alert('Password does not match');</script>";
}
else{
    $reg = "insert into student_details values('$name', '$user', '$pass','$conn')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
    header('location:Log-in page/index.html');
}
?>