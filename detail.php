<?php
session_start();
if(isset($_SESSION['number']))
{
	include("database_info.php");
	$conn=mysqli_connect($server,$user,$pass,$database);
	if($conn)
	{
		$query="select gender from student_registration where number='$_SESSION[number]' limit 1";
		$query=mysqli_query($conn,$query);
		$select=mysqli_fetch_row($query);
		if($select[0]=='male')
		{
			$query="select fees_per_student,total_bed_per_room from warden where gender='male' limit 1 ";
			$query=mysqli_query($conn,$query);
			$fees=mysqli_fetch_row($query);
			$room_fees=(($fees[0])*50)/100;

			echo "<center><form><h2 style='text-decoration:underline;color:red '>BRIEF DETAIL OF HOSTEL FOR STUDENT<h2><table border='1' bgcolor='pink' width='40%'>
					<tr>
						<th>ROOM FEES</th>
						<td>$room_fees</td>
					</tr>
					<tr>
						<th>FOOD FEES</th>
						<td>$room_fees</td>
					</tr>	

					<tr>
						<th>TOTAL FEES</th>
						<td>$fees[0]</td>
					</tr>

					<tr>
						<th>NUMBER OF STUDENTS IN EACH ROOM</th>
						<td>$fees[1]</td>
					</tr>
					</table>
					<input type='submit' style='margin-right:36%;background:red;border-color:black;padding:12px;border-radius:15px' value='BACK' formaction='merit.php' formmethod	='POST'>
						";
		}	
		elseif($select[0]=='female')
		{
			$query="select fees_per_student,total_bed_per_room from warden where gender='female' limit 1 ";
			$query=mysqli_query($conn,$query);
			$fees=mysqli_fetch_row($query);
			$room_fees=(($fees[0])*50)/100;

			echo "<center><form><h2 style='text-decoration:underline;color:red '>BRIEF DETAIL OF HOSTEL FOR STUDENT<h2><table border='1' bgcolor='pink' width='40%'>
					<tr>
						<th>ROOM FEES</th>
						<td>$room_fees</td>
					</tr>
					<tr>
						<th>FOOD FEES</th>
						<td>$room_fees</td>
					</tr>	

					<tr>
						<th>TOTAL FEES</th>
						<td>$fees[0]</td>
					</tr>

					<tr>
						<th>NUMBER OF STUDENTS IN EACH ROOM</th>
						<td>$fees[1]</td>
					</tr>
					</table>
					<input type='submit' style='margin-right:36%;background:red;border-color:black;padding:12px;border-radius:15px' value='BACK' formaction='merit.php' formmethod	='POST'>
						";
		}	
	}
}
else
{
	echo "Page Not Found.....";
}
?>