<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
    
// Get student name, matric number, and password from form submission
$name = $_POST['name'];
$matric = $_POST['matric'];
$password = $_POST['password'];

// Check if the matric number already exists in the database
$sql = "SELECT * FROM users WHERE matrix_number='$matric'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "Matric number already exists.";
	exit();
}

// Insert new student record into the database
$sql = "INSERT INTO users (student_name , matrix_number, password) VALUES ('$name', '$matric', '$password')";
if (mysqli_query($conn, $sql)) {
	echo "Registration successful.";
    header("location:logindesign.php");
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>