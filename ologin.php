<?php
$con=mysqli_connect("localhost","root","","phpdemo");

if(isset($_POST['login']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	if(isset($_POST['check']))
	{
		
		setcookie("web-name",$name,time()+86400*365,'/');
		setcookie("web-psw",$password,time()+86400*365,'/');
	}
	$sql="select * from register where name='".$name."' and password='".$password."'";
	$res=mysqli_query($con,$sql);
	$rt=mysqli_num_rows($res);
	if($rt)
	{
		session_start();
		$_SESSION['name']=$name;
		
		echo"<script>
		window.location.href='Profile.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Invalid Usera name?passowrd');</script>";
	}
}
?>
<html>
<head>
		<title>Task-3</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	 <!-- JS, Popper.js, and jQuery -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>     
	 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	 

	</head>
<body style="background:linear-gradient(25deg,#ff8902,#e52f6f); color:white;">
	<div class="container">
	<div class="row mt-5 ">
		<div class="col-md-3 col-lg-3"></div>
		
		<div class="col-md-5 col-lg-5 text-center">
			<div class="jumbotron" style="background-color:#100e17;">
				
				<img src="images/male.jpg" class="rounded-circle" width=80px height=80px>
				<h3> Login Here!</h3>
				<form method="post">
					<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
							</div>
						
							<input type="name" class="form-control" name="name" required placeholder="Enter Username">
						<span></span>
					</div>
					<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
							</div>
					
						<input type="password" name="password" class="form-control" required placeholder="password">
						<span></span>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
								<div class="input-group-text">
									<input type="checkbox" name="check" >
								</div>
							</div>
							<div class="input-group-append">
								<span type="text" id="eye" class="input-group-text" >Remember Me</span>
							</div>
						</div>
											
					<input type="submit" name="login" class="btn btn-primary" value="Login"  required >
					
				</form>
				<a href="#"> Forgot password</a>
			<div>
				
		</div>
	</div>
	</div>
</body>
</html>