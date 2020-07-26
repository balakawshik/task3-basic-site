<html>
<head>
		<title>PHP Tutorial</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	 <!-- JS, Popper.js, and jQuery -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>     
	 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	 <style>
		.grad{
			background:-webkit-linear-gradient(25deg,#ff8902,#e52f6f);
			-webkit-background-clip:text;
			-webkit-text-fill-color:transparent;
		}
		a{
			background:linear-gradient(25deg,#ff8902,#e52f6f); 
			color:white;
			text-decoration:none;
			padding:5px;
			border-radius:9px;
			
		}
		a:hover{
			background:linear-gradient(30deg,#ff8902,#e52f6f); 
			color:white;
			text-decoration:none;
			padding:6px;
			border-radius:6px;
			
		}
	</style>
			
	</head>
<body style="background:linear-gradient(25deg,#ff8902,#e52f6f); color:white;">
<div class="container">
	<div class="row mt-5 p-3">
		<div class="col-md-3 col-lg-3"></div>
		
		<div class="col-md-5 col-lg-5 text-center">
			<div class="jumbotron  " style="background-color:#100e17;">
<?php

$con=mysqli_connect("localhost","root","","phpdemo");
session_start();
$username=$_SESSION['name'];
if (!isset($_SESSION["name"]))
{
   header('location:loginpage.php');
}
$sql="select * from register where name='".$username."'";
$res=mysqli_query($con,$sql);

				
	
while($row=mysqli_fetch_array($res))
{
	
	
	echo"<img src='".$row['photo']."' class='rounded-circle' style='width=150px;height:150px;'>";
	echo"<br>";
	
	echo"<H4>Welcome&nbsp;&nbsp;<span class='grad'>".$row['name']."</span>&nbsp;!</h4>";
	echo"<br>";
	echo"<div class='text-left ml-3'>";
	echo"<h6>Mobile : ".$row['number']."</h6>";
	echo"<h6>Date of Birth : ".$row['dob']."</h6>";
	echo"<h6>Mail ID : ".$row['mail']."</h6>";
	echo"<h6>Address : ".$row['address']."</h6><br>";
	echo"<h6><a  href='logout.php'>Logout</a></h6>";
	echo"</div>";
}
echo"</table>";

?>
</div>
</div>
</div>
</div>
</body>
</html>