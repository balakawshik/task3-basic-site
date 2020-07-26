<?php
$con=mysqli_connect("localhost","root","","phpdemo");
if(isset($_POST['feedback']))
{
	$name=$_POST['name'];
	$text=$_POST['text'];
	$mail=$_POST['mail'];
	$sql="insert into feedback ( name,mail,text)values('".$name."','".$mail."','".$text."')";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		
		header ("location:index.php");
		echo"<script>alert('Feedback Accepted');
		
		</script>";
	}
	else
	{
		echo"<script>alert('Feedback Declined');
		</script>";
	}
}

?>
<html>
<head>
		<title>Task-3</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
	
	<div class="formBx">
		<form method="post" enctype="multipart/form-data" >
			<h2>Feedback</h2>
			<div class="inputBox">
				<input type="text" name="name" required="required">
				<span>Name</span>
			</div>
			<div class="inputBox">
				<input type="text" name="mail" required="required">
				<span>Mail</span>
			</div>
			<div class="inputBox">
				<textarea required="required" name="text"></textarea>
				<span>Type Your Message Here...</span>
			</div>
			<div class="inputBox">
				<input type="submit" value="send" name="feedback" required="required">
			</div>
			
			
			
		</form>
	</div>
	<div class="imgBx"><img src="images/feedback.png"></div>
</div>
</body>
</html>