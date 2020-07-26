<?php
$con=mysqli_connect("localhost","root","","phpdemo");



if(isset($_POST['name']) && !empty($_POST['name'])){
	$name=$_POST['name'];
	

$sel="select name FROM register where name='".$name."'";
$result=MYSQLI_qUERY($con,$sel);
$rt=mysqli_num_rows($result);
echo$rt;
}
?>