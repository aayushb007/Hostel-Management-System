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
		$total_room=$_POST["total_room"];
		$total_bed_per_room=$_POST["total_bed_per_room"];
		$fees_per_student=$_POST["fees_per_student"];
		

		$query="update warden set total_room=$total_room,total_bed_per_room=$total_bed_per_room,fees_per_student=$fees_per_student where email='$_SESSION[email]' ";
		$update=mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)==1)
		{
			echo "<script>alert('Your Change Is Published Successfully');document.location='facilities.php'</script>";
			exit;
		} 
		else
		{
			
			echo "<script>alert('Some Internal Problem Is There');document.location='warden_hpage.php'</script>";
			exit;
		}
	}
	}
}
else
{
	echo "Page Not Found.....";
}
?>