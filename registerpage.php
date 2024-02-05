<!DOCTYPE html>
<html>
<head >
	<title>Registration Form</title>
	<style>
		body {
 		 background: url('https://img.freepik.com/free-vector/vector-cartoon-illustration-school-building-green-lawn-road-trees-educalion-l_134830-1588.jpg?w=2000');
  		 background-repeat: no-repeat;
		 text-align: center;
		 		
		}
	</style>
</head>
<body>
	<div style= "border: 1px solid black; border-radius: 4px; width: 510px; height: 450px; background-color: #f2f2f2">
	<h1>Registration Form</h1>
	<form method="post" action="registerfunction.php" >
		<label for="name">Student Name:</label>
		<input type="text" name="name" id="name" required><br><br>

		<label for="matric">Matric Number:</label>
		<input type="text" name="matric" id="matric" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required><br><br>

		<input type="submit" value="Register">
	</form>
	</div>
</body>
</html>