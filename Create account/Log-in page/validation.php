<?php

session_start();

$con = mysqli_connect('127.0.0.1:3325', 'root', '');

mysqli_select_db($con, 'sqldb');

$name = $_POST['User'];
$pass = $_POST['Pass'];

$s = "Select username, password from Student_details where username = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
    echo '<script>alert("Login Successful")</script>';
    header('location:instruction/subjects.html');   
}
else{
    echo '<script>alert("Login Unsuccessful")</script>'; 
    
}
?>