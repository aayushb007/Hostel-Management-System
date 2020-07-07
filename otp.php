<?php
session_start();
if(isset($_SESSION['number']))
{
	include("database_info.php");
	$conn=mysqli_connect($server,$user,$pass,$database);
	if($conn)
	{
		$ano=$_POST['ano'];
		$fees=$_POST["fees"];
		$bal="select balance from account where ano='$ano' limit 1";
		$bal=mysqli_query($conn,$bal);
		$bal=mysqli_fetch_row($bal);
		$dbal=$bal[0]-$fees;

		if($dbal>0)
		{
				$query="select cid from account_holder where ano='$ano' limit 1";
			$query=mysqli_query($conn,$query);
			$cid=mysqli_fetch_row($query);
			$phone="select phone from customer where cid='$cid[0]' limit 1";
			$phone=mysqli_query($conn,$phone);
			$phone=mysqli_fetch_row($phone);
				require('textlocal.class.php');
				
				$textlocal = new Textlocal(false, false, 'gl2GKE+4TWI-PCcc5NDyo0dQE6r2xWu5rnxyZ2kOsJ');
                // You can access MOBILE from credential.php
				// $numbers = array(MOBILE);
                // Access enter mobile number in input box
                $numbers = array($phone[0]);
				$sender = 'TXTLCL';
				$otp = mt_rand(10000, 99999);
				$message = "Hello  This is your OTP: " . $otp;
				try {
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp', $otp);
				    setcookie('ano',$ano);
				    header("location:verifyotp.php");
				} catch (Exception $e) {
				    die('Error: ' . $e->getMessage());
				}
			
		
		}	

		
		else
		{
						
			echo "<script>alert('You Have Not Sufficient Balance');document.location='merit.php'</script>";	

		}
	}
}
else
{
	echo "Page Not Found....";
}


?>