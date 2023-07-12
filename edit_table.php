<?php
session_start();

include("connection.php");
include("functions.php");
//Check to see if login is valid
$user_data = check_login($con);
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Make 10 queries to update the 10 rows (probably not the most optimal solution but its straightforward)
        //1
        $updateQuery = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_1_1'] . "', data_column2 =  '" . $_POST['data_1_2'] . "', data_column3 =  '" . $_POST['data_1_3'] . "', data_column4 =  '" . $_POST['data_1_4'] . "', data_column5 =  '" . $_POST['data_1_5'] . "'
        WHERE id = 1";
        $result = mysqli_query($con, $updateQuery);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        //2
        $updateQuery1 = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_2_1'] . "', data_column2 =  '" . $_POST['data_2_2'] . "', data_column3 =  '" . $_POST['data_2_3'] . "', data_column4 =  '" . $_POST['data_2_4'] . "', data_column5 =  '" . $_POST['data_2_5'] . "'
        WHERE id = 2";
        $result = mysqli_query($con, $updateQuery1);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        //3
        $updateQuery = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_3_1'] . "', data_column2 =  '" . $_POST['data_3_2'] . "', data_column3 =  '" . $_POST['data_3_3'] . "', data_column4 =  '" . $_POST['data_3_4'] . "', data_column5 =  '" . $_POST['data_3_5'] . "'
        WHERE id = 3";
        $result = mysqli_query($con, $updateQuery);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        //4
        $updateQuery = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_4_1'] . "', data_column2 =  '" . $_POST['data_4_2'] . "', data_column3 =  '" . $_POST['data_4_3'] . "', data_column4 =  '" . $_POST['data_4_4'] . "', data_column5 =  '" . $_POST['data_4_5'] . "'
        WHERE id = 4";
        $result = mysqli_query($con, $updateQuery);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        //5
        $updateQuery = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_5_1'] . "', data_column2 =  '" . $_POST['data_5_2'] . "', data_column3 =  '" . $_POST['data_5_3'] . "', data_column4 =  '" . $_POST['data_5_4'] . "', data_column5 =  '" . $_POST['data_5_5'] . "'
        WHERE id = 5";
        $result = mysqli_query($con, $updateQuery);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        //6
        $updateQuery = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_6_1'] . "', data_column2 =  '" . $_POST['data_6_2'] . "', data_column3 =  '" . $_POST['data_6_3'] . "', data_column4 =  '" . $_POST['data_6_4'] . "', data_column5 =  '" . $_POST['data_6_5'] . "'
        WHERE id = 6";
        $result = mysqli_query($con, $updateQuery);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        //7
        $updateQuery = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_7_1'] . "', data_column2 =  '" . $_POST['data_7_2'] . "', data_column3 =  '" . $_POST['data_7_3'] . "', data_column4 =  '" . $_POST['data_7_4'] . "', data_column5 =  '" . $_POST['data_7_5'] . "'
        WHERE id = 7";
        $result = mysqli_query($con, $updateQuery);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        //8
        $updateQuery = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_8_1'] . "', data_column2 =  '" . $_POST['data_8_2'] . "', data_column3 =  '" . $_POST['data_8_3'] . "', data_column4 =  '" . $_POST['data_8_4'] . "', data_column5 =  '" . $_POST['data_8_5'] . "'
        WHERE id = 8";
        $result = mysqli_query($con, $updateQuery);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        //9
        $updateQuery = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_9_1'] . "', data_column2 =  '" . $_POST['data_9_2'] . "', data_column3 =  '" . $_POST['data_9_3'] . "', data_column4 =  '" . $_POST['data_9_4'] . "', data_column5 =  '" . $_POST['data_9_5'] . "'
        WHERE id = 9";
        $result = mysqli_query($con, $updateQuery);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        //10
        $updateQuery = "UPDATE user_data_".$user_data['user_id']."
        SET data_column1 = '" . $_POST['data_10_1'] . "', data_column2 =  '" . $_POST['data_10_2'] . "', data_column3 =  '" . $_POST['data_10_3'] . "', data_column4 =  '" . $_POST['data_10_4'] . "', data_column5 =  '" . $_POST['data_10_5'] . "'
        WHERE id = 10";
        $result = mysqli_query($con, $updateQuery);
        if (!$result) {
        die("Query failed: " . mysqli_error($con));
        }

        header("Location: index.php");
        die;

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
</head>
<body>
    <form method="POST" action="">
    <table>
        <tr>
            <td><input type="text" name="data_1_1" value=""></td>
            <td><input type="text" name="data_1_2" value=""></td>
            <td><input type="text" name="data_1_3" value=""></td>
            <td><input type="text" name="data_1_4" value=""></td>
            <td><input type="text" name="data_1_5" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="data_2_1" value=""></td>
            <td><input type="text" name="data_2_2" value=""></td>
            <td><input type="text" name="data_2_3" value=""></td>
            <td><input type="text" name="data_2_4" value=""></td>
            <td><input type="text" name="data_2_5" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="data_3_1" value=""></td>
            <td><input type="text" name="data_3_2" value=""></td>
            <td><input type="text" name="data_3_3" value=""></td>
            <td><input type="text" name="data_3_4" value=""></td>
            <td><input type="text" name="data_3_5" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="data_4_1" value=""></td>
            <td><input type="text" name="data_4_2" value=""></td>
            <td><input type="text" name="data_4_3" value=""></td>
            <td><input type="text" name="data_4_4" value=""></td>
            <td><input type="text" name="data_4_5" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="data_5_1" value=""></td>
            <td><input type="text" name="data_5_2" value=""></td>
            <td><input type="text" name="data_5_3" value=""></td>
            <td><input type="text" name="data_5_4" value=""></td>
            <td><input type="text" name="data_5_5" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="data_6_1" value=""></td>
            <td><input type="text" name="data_6_2" value=""></td>
            <td><input type="text" name="data_6_3" value=""></td>
            <td><input type="text" name="data_6_4" value=""></td>
            <td><input type="text" name="data_6_5" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="data_7_1" value=""></td>
            <td><input type="text" name="data_7_2" value=""></td>
            <td><input type="text" name="data_7_3" value=""></td>
            <td><input type="text" name="data_7_4" value=""></td>
            <td><input type="text" name="data_7_5" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="data_8_1" value=""></td>
            <td><input type="text" name="data_8_2" value=""></td>
            <td><input type="text" name="data_8_3" value=""></td>
            <td><input type="text" name="data_8_4" value=""></td>
            <td><input type="text" name="data_8_5" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="data_9_1" value=""></td>
            <td><input type="text" name="data_9_2" value=""></td>
            <td><input type="text" name="data_9_3" value=""></td>
            <td><input type="text" name="data_9_4" value=""></td>
            <td><input type="text" name="data_9_5" value=""></td>
        </tr>
        <tr>
            <td><input type="text" name="data_10_1" value=""></td>
            <td><input type="text" name="data_10_2" value=""></td>
            <td><input type="text" name="data_10_3" value=""></td>
            <td><input type="text" name="data_10_4" value=""></td>
            <td><input type="text" name="data_10_5" value=""></td>
        </tr>
    </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>