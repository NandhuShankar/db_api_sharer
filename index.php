<?php 
//Continues with same session data from login
session_start();

	include("connection.php");
	include("functions.php");
	//Check to see if login is valid
	$user_data = check_login($con);

	//Collect data from database to display
	$dbquery = "SELECT data_column1, data_column2, data_column3, data_column4, data_column5 FROM user_data_".$user_data['user_id'];
	$result = mysqli_query($con, $dbquery);
	if (!$result) {
   		die("Query failed: " . mysqli_error($con));
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Database</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
</head>
<body>
	<div>
	<a href="logout.php">Logout</a>
	<h3>Your API key is http://localhost:8081/anypoint/user_data_<?php echo $user_data['user_id']; ?>, share it with the world!</h3>
	<h3>Thisis the index page</h3>
	<div>
	<br>
	Hello, <?php echo $user_data['user_name']; ?> here is your here is your data:

	<?php
		// Create an array to store the row data
		$rowDataArray = [];

		// Outer loop to generate queries and store results in the array
		for ($id = 1; $id <= 10; $id++) {
			// Query individual values for each column using the $id
			$query = "SELECT data_column1, data_column2, data_column3, data_column4, data_column5 FROM user_data_" . $user_data['user_id'] . " WHERE id = $id";
			$result = mysqli_query($con, $query);

			if ($result && mysqli_num_rows($result) > 0) {
				$row_data = mysqli_fetch_assoc($result);
				$rowDataArray[$id] = $row_data;
			} else {
				// Handle the case when no data is found for the given id
				$rowDataArray[$id] = null;
			}
		}
		// Display the table using the stored row data
		echo '<table>';
		for ($row = 1; $row <= 10; $row++) {
			echo '<tr>';

			if (isset($rowDataArray[$row])) {
				echo '<td>' . $row . '</td>';
				echo '<td><input type="text" value="' . ($rowDataArray[$row]['data_column1'] ?? '') . '"></td>';
				echo '<td><input type="text" value="' . ($rowDataArray[$row]['data_column2'] ?? '') . '"></td>';
				echo '<td><input type="text" value="' . ($rowDataArray[$row]['data_column3'] ?? '') . '"></td>';
				echo '<td><input type="text" value="' . ($rowDataArray[$row]['data_column4'] ?? '') . '"></td>';
				echo '<td><input type="text" value="' . ($rowDataArray[$row]['data_column5'] ?? '') . '"></td>';
			} else {
				echo '<td>' . $row . '</td>';
				echo '<td colspan="5">No data here</td>';
			}

			echo '</tr>';
		}
		echo '</table>';
	?>
	<a href="edit_table.php" class="btn">Edit Table</a>
</body>
</html>