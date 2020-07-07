<?php
if(isset($_POST['login']))
{
	include("database_info.php");
	$conn=mysqli_connect($server,$user,$pass,$database);
	if($conn)
	{
		$number=$_POST["number"];
		$password=$_POST["password"];

		$query="select number from student_login where number='$number' and password='$password' limit 1";
		$sql=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($sql);
		if($row[number]<>null)
		{
			session_start();
			$_SESSION['number']=$number;
			$insert="update student_login set login_time_date=now() where number='$_SESSION[number]'";
			$insert=mysqli_query($conn,$insert);	
			header("location:student_hpage.php");
			exit;
		}
		else
		{
			echo "<script>alert('Please Enter The Correct Number And password');document.location='login.php'</script>";
			exit;
		}
	}
	else
	{
				echo "<script>alert('Some Internal Eroor Is There....');document.location='login.php'</script>";
	}
}
else
{
	echo "Page Not Found....";
}

?>