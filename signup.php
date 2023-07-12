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

			//create a new table for the user
			$createTableQuery = "CREATE TABLE IF NOT EXISTS user_data_$user_id (
				id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				data_column1 VARCHAR(255),
				data_column2 VARCHAR(255),
				data_column3 VARCHAR(255),
				data_column4 VARCHAR(255),
				data_column5 VARCHAR(255)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
			//if it works, route to login, else display errors
				if (mysqli_query($con, $createTableQuery)) {
					for ($i = 1; $i <= 10; $i++) {
						$tableQuery = "INSERT INTO user_data_$user_id(data_column1, data_column2, data_column3, data_column4, data_column5) VALUES (' ', ' ', ' ', ' ', ' ')";
						$result = mysqli_query($con, $tableQuery);
						if (!$result) {
							echo "Query failed: " . mysqli_error($con);
						}
					}
					header("Location: login.php");
					die;
				} else {
					echo "Error creating table: " . mysqli_error($con);
				}
		} else {
				echo "Please enter valid information!";
			}

	}else
		{
			echo "Please enter some valid information!";
		}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
	<title>Signup</title>
</head>
<body>

	<div id="box">
		
		<form method="post">
			<div>Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>