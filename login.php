<?php
$con=mysqli_connect("localhost","root","","phpdemo");

if(isset($_COOKIE['web-name']) && isset($_COOKIE['web-psw'])&& !empty($_COOKIE['web-psw']) && !empty($_COOKIE['web-name']))
{
	
	$name=$_COOKIE['web-name'];
	$password=$_COOKIE['web-psw'];
	
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
		echo"<script>alert('I Forgot You');
		window.location.href='ologin.php';
		</script>";
	}
}?>
<html>
<head>
		<title>Task-3</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
<body style="background:linear-gradient(25deg,#ff8902,#e52f6f); color:white;">
</body>
</html>