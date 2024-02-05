
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=width=device-width, initial-scale=1.0>

    <title>Student grading system</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;


        }   
        body{
            min-height: 100vh;
            background:#eee;
            background-image: url('https://img.freepik.com/free-vector/vector-cartoon-illustration-school-building-green-lawn-road-trees-educalion-l_134830-1588.jpg?w=2000') ;
            background-repeat: no repeat ;
            display: flex;
            font-family: sans-serif;
        }
        .container{
            margin: auto;
    width: 500px;
    max-width: 90%;


}
.container form{
    width: 50%;
    height: 60%;
    padding: 20px;
    background:white;
    border-radius: 4px;
    box-shadow: 0 8px 16px rgba(0,0,0,3);

}
.container form h1{
text-align: center;
margin-bottom: 24px; 
color: #222

}
.container form .form-control{
    width: 100px;
    height: 40px;
    background:white;
    border-radius: 4px;
    border: 1px solid silver;
    margin: 10px 0 18px 0;
    padding: 0 10px;


}
.container form .btn{
    margin-left: 40%;
    transform: translateX(-50%);
    width: 120px;
    height: 34px;
    border: none;
    outline: none;
    background: #27a327;
    cursor: pointer;
    font-size: 16px;
    text-transform: uppercase;
    color: white;
    border-radius: 4px;
    transition: .3s;
}
.container form .button{
    margin-left: 40%;
    transform: translateX(-50%);
    width: 120px;
    height: 34px;
    border: none;
    outline: none;
    background: #27a327;
    cursor: pointer;
    font-size: 16px;
    text-transform: uppercase;
    color: white;
    border-radius: 4px;
    transition: .3s;

}

</style>
</head>
<body>
<div class="container" >
<form action="loginfunction.php"method="POST">
<h1>STUDENT GRADING SYSTEM LOGIN </h1>
<div class="form-group">
<label for="">Matric number:</label>
<input type="text" id="matric" name="matric" class="form control" required>
</div>
<div class="form-group">
<label for="">Password:</label>
<input type="password" id="pass" name="pass" class="form control" required>
</div>
<input type="submit"  id="btn" name="btn" class="btn" value="Login">
</form>
<form action="registerpage.php">
<a href="registerpage.php" class="form-group">
<input type="submit" id="button" name="button" class="button" value="register">
</a>
</form>
</div>
</body>
</html>