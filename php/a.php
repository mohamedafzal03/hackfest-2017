<?php
include("db.php");
if(isset($_POST["submit"]))
{
	$userName=$_POST["name"];
	$Password=$_POST["password"];
	$query=mysqli_query($con,"select * from student where username='$userName' and password='$Password'");
	$num=mysqli_num_rows($query);
	if($num==1)
	{
		echo $userName;
		
	}
	else
	{
		echo 'failure';
	}
}
?>