<?php
    session_start();
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>ALIAS KOLEJ</title>
	<style>
		table {
			border-collapse: collapse;
			width: 50%;
			margin: auto;
		}
		th, td {
			padding: 10px;
			text-align: center;
			border: 1px solid black;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>
	<form method="post">
		<h1>ALIAS Student Grading System</h1>
		<table>
			<tr>
				<th>Assessment</th>
				<th>Score</th>
			</tr>
			<tr>
				<td> Student name</td>
				<td><input type="text" name="T0" id="T0" /></td>
			</tr>
			<tr>
				<td> Student ID</td>
				<td><input type="text" name="T4" id="T4" /></td>
			<tr>
				<td>Test 1</td>
				<td><input type="text" name="T1" id="T1" /></td>
			</tr>
			<tr>
				<td>Test 2</td>
				<td><input type="text" name="T2" id="T2" /></td>
			</tr>
			<tr>
				<td>Final Exam</td>
				<td><input type="text" name="T3" id="T3" /></td>
			</tr>
		</table>

		<button type="submit" name="calculate"> Calculate </button>
		<input type="hidden" name="action" value="Calculate">

		<?php

		if(isset($_POST['action']))
		{
		    function Calculate($t1,$t2,$t3)
		    {
		        $t1 = $t1 / 100 * 20;
		        $t2 = $t2 / 100 * 30;
		        $t3 = $t3 / 100 * 50;

		        return $t1 + $t2 + $t3;
		    }

		    $t1 = $_POST['T1'];
		    $t2 = $_POST['T2'];
		    $t3 = $_POST['T3'];
			$t4 = $_POST['T4'];
			$t0 = $_POST['T0'];
		    $results = Calculate($t1, $t2, $t3);

			saveToDatabase($t0, $t4, $t1, $t2, $t3);

			echo "<table>";
			echo "<tr><th>Student name</th><td>". ($t0) . "</td></tr>";
			echo "<tr><th>Student ID</th><td>". ($t4) . "</td></tr>";
		    echo "<tr><th>Total Marks</th><td>" . round($results, 0,) . "</td></tr>";
		    echo "<tr><th>Final Grade</th><td>";
			;
		    
		    switch(true)
		    {
		        case ($results >= 80 && $results <= 100);
		            echo "A";
		            break;

		        case ($results >= 60 && $results <= 79);
		            echo "B";
		            break;

		        case ($results >= 40 && $results <= 59);
		            echo "C";
		            break;

		        case ($results >= 20 && $results <= 39);
		            echo "D";
		            break;

		        case ($results >= 0 && $results <= 19);
		            echo "F";
		            break;

		        default : 
		            echo "Please enter the correct mark";

		    }
		    
		    echo "</td></tr>";
		    echo "</table>";

			
		}
		function saveToDatabase($t0, $t4, $t1, $t2, $t3)
            {
                // Establish a database connection
                $conn = mysqli_connect('localhost', 'root', '', 'login_db');

                // Check if the connection was successful
                if (!$conn) {
                    die('Failed to connect to MySQL: ' . mysqli_connect_error());
                }

			

             $insertSql = "INSERT INTO grading (name ,id, test1, test2, final ) VALUES ('$t0', '$t4', '$t1', '$t2', '$t3')";
                    if (mysqli_query($conn, $insertSql)) {
                        echo 'User saved to the database successfully.';
                    } else {
                        echo 'Error saving user to the database: ' . mysqli_error($conn);
                    }
                mysqli_close($conn);
               }
			
		?>

	</form>

	<form action="exit.php" method="post">
		<button type="submit" name="Logout"> Exit</button>
		<input type="hidden" name="logout" id="logout">
	</form>
</body>
</html>

