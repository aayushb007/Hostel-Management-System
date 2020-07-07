<?php
session_start();
if(isset($_SESSION['email']))
{
if(isset($_POST['update']))
{
	include("database_info.php");
	$conn=mysqli_connect($server,$user,$pass,$database);
	if($conn)
	{
		$password=$_POST["password"];
		$your_name=$_POST["your_name"];
		$college_name=$_POST["college_name"];
		$contact=$_POST["contact"];
		$country=$_POST["country"];
		$state=$_POST["state"];
		$city=$_POST["city"];
		$address=$_POST["address"];
		
		$query="update warden set password='$password',your_name='$your_name',college_name='$college_name',country='$country',state='$state',city='$city',address='$address',contact=$contact where email='$_SESSION[email]'";
		$update=mysqli_query($conn,$query);

		if(mysqli_affected_rows($conn)==1)
		{
			echo "<script>alert('Profile Updated Successful');document.location='profile.php'</script>";
		} 
		else
		{
			echo "error";
			echo $_SESSION['email'];
			//echo "<script>alert('Some Internal Problem Is There');document.location='warden_hpage.php'</script>";
		}
	}
	}
}
else
{
	echo "Page Not Found.....";
}
?>