<?php
if(isset($_POST['login']))
{
	include("database_info.php");
	$conn=mysqli_connect($server,$user,$pass,$database);
	if($conn)
	{
		$email=$_POST["email"];
		$password=$_POST["password"];
		$query="select * from warden where email='$email' and password='$password' limit 1";
		$sql=mysqli_query($conn,$query);
		if(mysqli_fetch_array($sql))
		{
			session_start();
			$_SESSION['email']=$email;
				header("location:warden_hpage.php");
				exit;
		}
			else
			{
				echo "<script>alert('Email and Password Are incorrect');document.location='index.html'</script>";
				exit;
			}
	}
		else
		{
				echo "<script>alert('There Is Some Internal Error Try After Some Time..');document.location='index.html'</script>";
				exit;
		}
	
}


?>

