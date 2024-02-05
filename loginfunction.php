<?php
session_start();
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
// Get email and password from form submission
$matric = $_POST['matric'];
$password = $_POST['pass'];
// Check if email and password are correct
$sql = "SELECT * FROM users WHERE matrix_number='$matric' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // Login successful, set session variable and redirect to dashboard page
  $_SESSION['matric'] = $matric;
  header("Location: main page.php");
  } else {
  // Login failed, show error message
  echo "Invalid email or password";
  }
  mysqli_close($conn);
  ?>