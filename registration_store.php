<?php
if(isset($_POST['register']))
{
	include("database_info.php");
	$conn=mysqli_connect($server,$user,$pass,$database);
	if($conn)
	{
		$number=$_POST['number'];
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$country=$_POST['country'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$gender=$_POST['gender'];

		$cpassword=$_POST['cpassword'];
	
		if($password==$cpassword)
		{
			$query="insert into student_registration values('$number','$fname','$mname','$lname','$email','$country','$state','$city','$address',$phone,'$password','$gender', now())";
			$query1="insert into student_login values('$number','$password',now(),now())";
			$query2="insert into payment_status values('$number','not confirm')";
			$insert=mysqli_query($conn,$query);
			if($insert)
			{
				$insert1=mysqli_query($conn,$query1);
				if($insert1)
				{
					$insert2=mysqli_query($conn,$query2);
					if($insert2)
					{
					echo "<script>alert('Registration is SuccessFul');document.location='login.php'</script>";	
					}
				}
				else
				{
					echo "problem in internal query";
				}
			}
			else
			{
				echo "<script>alert('Some Internal Error Is There Try After Some Time....');document.location='registration_form.php'</script>";	
			}
		}
		else
		{
			echo "<script>alert('Password Are not match..');document.location='registration_form.php'</script>";	
		}
}}

?>