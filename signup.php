<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

	body{
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color:rgba(247, 214, 253, 0.637);
		font-family: Verdana, Geneva, Tahoma, sans-serif;

	}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 15px;
		width: 100%;
		color: white;
		background-color: rgb(121, 36, 143);
		border: none;

	}

	#box{

		background-color: #fff;
		margin: auto;
		box-shadow: 0px 0px 5px black;
		width: fit-content;
		padding: 30px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<h1 style="color: rgb(121, 36, 143)">Create an account</h1>
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			 <input id="text" type="text" name="user_name" Placeholder="Enter your username"><br><br>
			 <input id="text" type="text" name="email" Placeholder="Enter your email"><br><br>
			<input id="text" type="password" name="password" Placeholder="Create Password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php" style="text-decoration: none; text-align: center;" >Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>