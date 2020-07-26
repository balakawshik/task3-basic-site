<?PHP
$con=mysqli_connect("localhost","root","","phpdemo");
if(isset($_POST['signup']))
{
$name=$_POST['name'];
$number=$_POST['number'];
$mail=$_POST['mail'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$address=$_POST['address'];
$filename=$_FILES['profile']['name'];
$tempname=$_FILES['profile']['tmp_name'];
$folder="profilephoto/".$filename;
move_uploaded_file($tempname,$folder);
if($password==$cpassword)
{
$sql="insert into register ( name,number,mail,dob,password,address,photo)values('".$name."','".$number."','".$mail."','".$dob."','".$password."','".$address."','".$folder."')";
$res=mysqli_query($con,$sql);
if($res)
{
	echo"<script>alert('Register Successfully....!');

	</script>";
	
}
else
{
	echo"<script>alert('Register Failed...!');
	</script>";
}
}
else
{
	echo"<script>alert('Password Not Match...!');
	</script>";
}
}

?>
<html>
<head>
		<title>Task-3</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
		
		<style>



/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding-left: 15px;
 
}

#message p {
  padding: 0px 35px;
  
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>




	</head>
<body>

<nav class="navbar navbar-expand-md  bg-dark navbar-dark">
		 <a class="navbar-brand" href="#">
		  	
		  
			Chat App
		</a>
			<div class="float-right">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			
		
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto p-1">
				<li class="nav-item" ></li>
				<li class="nav-item">
					<a class="nav-link" href="feedback.php">Feedback</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">FAQ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About us!</a>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Sign Up</a>
				</li>
				<li class="nav-item">
						<?php
							if(isset($_COOKIE['web-name']) && isset($_COOKIE['web-psw']))
							{
								echo'<div   class="dropdown" >
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Login As</button>';
								echo'<div id="dropdown" class="dropdown-menu">';
								echo'<a class="dropdown-item  active" href="login.php">'.$_COOKIE['web-name'].'</a>';
								echo'<h6><a class="dropdown-item " href="ologin.php">New User</a><h6></div></div>';
							}
							else{
								echo'<a type="button"  class="btn btn-primary" >';
							}
								
						?>
							
						</a>
				</li>    
			</ul>
		</div>  
	</nav>
	
	
	<div class="modal " id="myModal">
		<div class="modal-dialog ">
			<div class="modal-content bg-mine">
				<div class="modal-header">
				Sign Up
				</div>
				<div class="modal-body">
				
					<form method="post" enctype="multipart/form-data" >
						<div class="input-group mb-3 ">
							<div class="input-group-prepend ">
								<span class="input-group-text username">
								@
								</span>
							</div>
							<input type="text" id="name" name="name" class="form-control username " placeholder="User Name"required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
								Phone
								</span>
							</div>							
						<input type="number" name="number" class="form-control" placeholder="999-999-9999" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
								Mail
								</span>
							</div>
						<input type="email" name="mail" class="form-control" placeholder="abc@xyz.com" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
								DOB
								</span>
							</div>
						<input type="date" name="dob" class="form-control" required>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
								Password
								</span>
							</div>
						<input type="password" id="password" name="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
						</div>

						<div id="message" >
							<p>Password must contain the following:</p>
							<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
							<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
							<p id="number" class="invalid">A <b>number</b></p>
							<p id="length" class="invalid">Minimum <b>8 characters</b></p>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
								Re Type
								</span>
							</div>
							<input type="password" name="cpassword" class="form-control" placeholder="Re-Type Password" required>									</div>
						<div class="input-group mb-3">
							<label for="text">Address</label>
							<textarea name="address" placeholder="Residential Address" class="form-control" required style="resize:none;height:30%;width:100%;"></textarea>
						</div>
						<div class="input-group mb-3">
							
							<input type="file" name="profile" id="productimage" class="custom-file-input" accept=".png, .jpg, .jpeg" required>
							<label class="custom-file-label" for="profile">Choose Profile</label>
						</div>
						<div class="input-group mb-3">
							<label for="text"></label>
							<input type="submit" name="signup" value="Register" class="btn btn-primary" required>
						</div>

					</form>
				</div>
						   
			</div>
		</div>
		   
	</div>
		<img src="images/feedback.png" width=100% height=100%>
		
<script>
var myInput = document.getElementById("password");

var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
	
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

$(document).ready(function(){
	$("#name").on("keyup",function(){
	name=$("#name").val();
	$.ajax
		({
			type:'post',
			url:'profile-search.php',
			data:"name="+name,
			success:function(avail){
					if(avail>0){
					$(".username").addClass('border-danger')
					$(".username").removeClass('border-success');
					}
					else{
						$(".username").removeClass('border-danger');
						$(".username").addClass('border-success');
					}
				}
		});
	});
});
$(".custom-file-input").on("change",function(){
	var filename=$(this).val().split("\\").pop();
	$(this).siblings(".custom-file-label").addClass("selected").html(filename);
	});

</script>
</body>
</html>