<?php
session_start();
if(isset($_SESSION['number']))
{
if(isset($_POST['update']))
{
	include("database_info.php");
	$conn=mysqli_connect($server,$user,$pass,$database);
	if($conn)
	{
		
		$fname=strtolower($_POST['fname']);
		$mname=strtolower($_POST['mname']);
		$lname=strtolower($_POST['lname']);
		$country=strtolower($_POST['country']);
		$state=strtolower($_POST['state']);
		$city=strtolower($_POST['city']);
		$address=strtolower($_POST['address']);
		$phone=strtolower($_POST['phone']);
		$password=strtolower($_POST['password']);
			
		$query="update student_registration set fname='$fname',mname='$mname',lname='$lname',country='$country',state='$state',city='$city',Address='$address',contact='$phone',password='$password' where number='$_SESSION[number]'";
		$update=mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)==1)
		{
			echo "<script>alert('Profile Updated Successful');document.location='profile.php'</script>";
		} 
		else
		{
			echo "<script>alert('Some Internal Problem Is There');document.location='student_hpage.php'</script>";
		}
	}
	}
}
else
{
	echo "Page Not Found.....";
}
?>