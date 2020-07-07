<?php
session_start();
if(isset($_SESSION['number']))
{
	include("database_info.php");
	$conn=mysqli_connect($server,$user,$pass,$database);
	if($conn)
	{
		$no=$_POST['number'];
		$query="select payment from payment_status where number='$no' limit 1";
		$select=mysqli_query($conn,$query);
		$select=mysqli_fetch_row($select);
		if($select[0]=='not confirm')
		{
			echo "<div><form action='otp.php' method='POST' >";
					$query="select gender from student_registration where number='$_SESSION[number]' limit 1";
					$query=mysqli_query($conn,$query);
					$select=mysqli_fetch_row($query);
					if($select[0]=='male')
					{
						$query="select fees_per_student from warden where gender='male' limit 1 ";
						$query=mysqli_query($conn,$query);
						$fees=mysqli_fetch_row($query);
						$room_fees=(($fees[0])*50)/100;

						echo "<center><form role='form' method='post' enctype='multipart/form-data'>";
									
									echo "<h3>YOUR TOTAL FEES FOR THIS TERM:".$fees[0]."</h3>

										<input type='hidden' name='fees' value='$fees[0]'>
									<input type='number' name='ano' style='margin-left:35%' placeholder='Enter Account Number'>
									

								<center><br><input type='submit' style='margin-right:2%;background:red;border-color:black;padding:7px;border-radius:15px' value='SEND OTP' formaction='otp.php' formmethod	='POST'></form>";
									
					}	
					elseif($select[0]=='female')
					{
						$query="select gender from student_registration where number='$_SESSION[number]' limit 1";
					$query=mysqli_query($conn,$query);
					$select=mysqli_fetch_row($query);
					if($select[0]=='female')
					{
						$query="select fees_per_student from warden where gender='female' limit 1 ";
						$query=mysqli_query($conn,$query);
						$fees=mysqli_fetch_row($query);
						$room_fees=(($fees[0])*50)/100;

						echo "<center><form role='form' method='post' enctype='multipart/form-data'>";
									
									echo "<h3>YOUR TOTAL FEES FOR THIS TERM:".$fees[0]."</h3>";

									echo "<input type='hidden' name='fees' value='$fees[0]'>
									<input type='number' name='ano' style='margin-left:35%' placeholder='Enter Account Number'>

								<input type='submit' style='margin-right:36%;background:red;border-color:black;padding:12px;border-radius:15px' value='PROCESS' formaction='otp.php' formmethod	='POST'></form>";
									
					}	
					}	
		}
	if($select[0]=='confirm')
		{
			echo "<script>alert('Your HAVE ALREADY DONE THE PAYMENT<br>(YOU CAN SEE THAT IN PAYMENT STATUS)');document.location='merit.php'</script>";
			exit;
		}
	}
}
else
{
	echo "Page Not Found......";
}
?>