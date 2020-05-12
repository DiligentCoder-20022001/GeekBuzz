<?php
include("database.php");
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$name=stripslashes($name);
	$name=addslashes($name);
	$email=$_POST['email'];
	$email=stripslashes($email);
	$email=addslashes($email);
	$password=$_POST['password'];
	$password=stripslashes($password);
	$password=addslashes($password);
	$college=$_POST['college'];
	$college=stripslashes($college);
	$college=addslashes($college);
	$str="SELECT email from user WHERE email='$email'";
	$result=mysqli_query($con,$str);
	if((mysqli_num_rows($result))>0)
	{
		echo"<center><h3><script>alert('Sorry...This email is already registered for an account. Please try again');</script></h3></center>";
		header("refresh:0;url=login.php");
	}
	else
	{
		$str="insert into user set name='$name',email='$email',password='$password',college='$college'";
		if((mysqli_query($con,$str)))
		{
			echo "<center><h3><scipt>alert('Congrats, you have been successfully enrolled into GeekBuzz!!');</script></h3></center>";
			header('location: welcome.php?q=1');
		}
	}
}
?>

<html>

<head>
	<title>My Awesome Login Page</title>
	<link href="https://fonts.googleapis.com/css?family=Lilita+One|Ubuntu&display=swap" rel="stylesheet">
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  <script src="https://kit.fontawesome.com/b23a79e4da.js" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<style>
/* Coded with love by Mutiullah Samim */
body,
html {
	margin: 0;
	padding: 0;
	height: 100%;
	background: #4169E1 !important;
}
.user_card {
	height: 600px;
	width: 350px;
	margin-top: 3%;
	margin-bottom: auto;
	background: #f39c12;
	position: relative;
	display: flex;
	justify-content: center;
	flex-direction: column;
	padding: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius: 5px;

}
.brand_logo_container {
	position: absolute;
	height: 170px;
	width: 170px;
	top: -75px;
	border-radius: 50%;
	background: #60a3bc;
	padding: 10px;
	text-align: center;
}
.brand_logo {
	height: 150px;
	width: 150px;
	border-radius: 50%;
	border: 2px solid white;
}
.form_container {
	margin-top: 100px;
}
.navbar {
	padding: 0 0 4.5rem;
}

.navbar-brand {
	font-family: "Ubuntu";
	font-size: 2.5rem;
	font-weight: bold;
}

.nav-item {
	padding: 0 18px;
}

.nav-link {
	font-family: "Lilitia One";
	font-size: 1.2rem;
	font-weight: lighter;
}

.login_btn {
	width: 100%;
	background: #4682B4 !important;
	color: white !important;
}
.login_btn:focus {
	box-shadow: none !important;
	outline: 0px !important;
}
.login_container {
	padding: 0 2rem;
}
.input-group-text {
	background: #4682B4 !important;
	color: white !important;
	border: 0 !important;
	border-radius: 0.25rem 0 0 0.25rem !important;
}
.input_user,
.input_pass:focus {
	box-shadow: none !important;
	outline: 0px !important;
}
.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
	background-color: #4682B4 !important;
}
#title {
	background-color: #4169E1;
	color: #fff;
}
.container-fluid {
	padding: 3% 15%;
}
</style>
<body>
	<section id="title">
		<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark ">
		<a class="navbar-brand" href="#">GeekBuzz</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="aboutus.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About us</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#">Sponsors</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
</section>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="images\geek.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="register.php" method="post">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>Email ID:</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label>College name:</label>
						<input type="text" name="college" class="form-control">
					</div>
					<button type="submit" class="btn btn-success" name="submit">Login</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
