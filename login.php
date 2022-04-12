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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	body{
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color:rgba(247, 214, 253, 0.637);
		font-family: Verdana, Tahoma, sans-serif;

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
		<h1 style="color: rgb(121, 36, 143)">Have an account?</h1>
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name" Placeholder="Enter your username"><br><br>
			<input id="text" type="text" name="email" Placeholder="Enter your email"><br><br>
			
			<input id="text" type="password" name="password" Placeholder="Enter password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php" style="text-decoration: none; text-align: center;" >Don't have an account?</a><br><br>
		</form>
	</div>
</body>
</html>