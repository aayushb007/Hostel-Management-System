<?php
session_start();
if(isset($_SESSION['number']))
{
	include("database_info.php");
	$conn=mysqli_connect($server,$user,$pass,$database);
	if($conn)
	{

echo "<html>
<head>
	<title>Send SMS from PHP using textlocal</title>
	<link rel='stylesheet' href='../css/bootstrap.min.css'>
</head>
<body>
<div class='container'>
	<hr>
	 <div class='col-md-9 col-md-offset-2'>
       <form method='POST' action='verifyotp.php'>
            <div class='row'>
                <div class='col-sm-9 form-group'>
                    <label for='otp'>OTP</label>
                    <input type='text' class='form-control' id='otp' name='otp' placeholder='Enter OTP' maxlength='5' required>
                </div>
            </div>
             <div class='row'>
                <div class='col-sm-9 form-group'>
                    <button type='submit' name='verifyotp' class='btn btn-lg btn-info btn-block'>Verify</button>
                </div>
            </div>

</div>
</div>
</body>
</html>";

if(isset($_POST['verifyotp']))
 { 
				$otp = $_POST['otp'];
				if($_COOKIE['otp'] == $otp) {

					$query="select gender from student_registration where number='$_SESSION[number]' limit 1";
					$query=mysqli_query($conn,$query);
					$query=mysqli_fetch_row($query);
					if($query[0]=='male')
					{
						$query1="select fees_per_student from warden where gender='male' limit 1";
						$query1=mysqli_query($conn,$query1);
						$query1=mysqli_fetch_row($query1);

						$query2="select balance from account where ano='$_COOKIE[ano]' limit 1";
						$query2=mysqli_query($conn,$query2);
						$query2=mysqli_fetch_row($query2);
						
						$debit=$query2[0]-$query1[0];

						$update="update account set balance=$debit where ano='$_COOKIE[ano]'";
						$update=mysqli_query($conn,$update);
						if(mysqli_affected_rows($conn)==1)
						{

							$update1="update account set balance=balance+$query1[0] where ano='1470213'";
							$update1=mysqli_query($conn,$update1);
							if(mysqli_affected_rows($conn)==1)
							{
								$update2="update payment_status set payment='confirm' where number='$_SESSION[number]'";
								$update2=mysqli_query($conn,$update2);
								if(mysqli_affected_rows($conn)==1)
								{
									echo "<script>alert('THE AMOUNT '.$query1[0].' is debited from your account');document.location='student_hpage.php'</script>";		
							
								}
							}
						}
					}
					elseif($query[0]=='female')
					{
						$query1="select fees_per_student from warden where gender='female' limit 1";
						$query1=mysqli_query($conn,$query1);
						$query1=mysqli_fetch_row($query1);

						$query2="select balance from account where ano='$_COOKIE[ano]' limit 1";
						$query2=mysqli_query($conn,$query2);
						$query2=mysqli_fetch_row($query2);
						
						$debit=$query2[0]-$query1[0];

						$update="update account set balance=$debit where ano='$_COOKIE[ano]'";
						$update=mysqli_query($conn,$update);
						if(mysqli_affected_rows	($conn)==1)
						{

							$update1="update account set balance=balance+$query1[0] where ano='321654'";
							$update1=mysqli_query($conn,$update1);
							if(mysqli_affected_rows($conn)==1)
							{
								$update2="update payment_status set payment='confirm' where number='$_SESSION[number]'";
								$update2=mysqli_query($conn,$update2);
								if(mysqli_affected_rows($conn)==1)
								{
								echo "<script>alert('THE AMOUNT '.$query1[0].' is debited from your account');document.location='student_hpage.php'</script>";		
								}
							}
						}
					}
					
				} 
				else {
					echo "<script>alert('OTP IS INCORRECT');document.location='otp.php'</script>";
				}
}
}
}
else
{
	echo "Page Not Found....";
}
?>