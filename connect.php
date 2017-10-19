<?php
$con=mysqli_connect("localhost","root","root","t_db");

$id=$_POST['id'];
$name=$_POST['name'];
$credit=$_POST['credit'];
$semister=$_POST['semister'];
$cgpa=$_POST['cgpa'];
$program=$_POST['program'];

$sql="INSERT INTO `t_tb`(`id`, `name`, `credit`, `semister`, `cgpa`, `program`)VALUES('$id','$name','$credit','$semister','$cgpa','$program')";
if(mysqli_query($con,$sql)){
	echo "Data saved";
}
else{
	echo "Sorry :(";
}
mysqli_close($con);
?>