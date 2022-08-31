<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="Log-in page/New folder/style.css">
	<link rel="stylesheet" href="Log-in page/New folder/style0.css">
  <link rel="stylesheet" type="text/css" href="create.css">
	
</head>
<body>

<section id="home">
<div id="particles-js">
</div>
</section>
        
         <div class="create">
        <img src="v-for-vendetta-art.png" alt="" class="avatar">
        <h1>Create account</h1>
        <form action="<?php register();?>" method="post">
            <p>Name</p>
            <input type="text" placeholder="Enter your Name" name="Name" required>
            <p>Username</p>
            <input type="text" placeholder="Enter your Username" name="User" required>
            <p>Password</p>
            <input type="password" placeholder="Password" name="pass" id="paas" required>
            <p>Confirm Password</p>
            <input type="password" placeholder="Confirm Password" name="conn" id="passs" required>
            <input type="submit" value="Sign up">
        </form>

    </div>


	<script type="text/javascript" src="Log-in page/New folder/particles.js" ></script>
	<script type="text/javascript" src="Log-in page/New folder/app.js" ></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script type="text/javascript">
		<?php
			function register(){
				session_start();


				$con = mysqli_connect('localhost', 'root', '');

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
			}
		?>
	</script>
	</body>
</html>