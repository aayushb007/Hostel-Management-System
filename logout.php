<?php
session_start();
include("database_info.php");
$conn=mysqli_connect($server,$user,$pass,$database);
if($conn)
{
	$query="update student_login set logout_time_date=now() where number='$_SESSION[number]'";
	$update=mysqli_query($conn,$query);
	if(mysqli_affected_rows($conn)==1)
	{
		echo "success";
	}
	else
	{
		echo "some internal error";
	}
}
session_destroy();
header("location:index.html");
?>