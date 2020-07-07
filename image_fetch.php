<?php
session_start();
include("database_info.php");
$conn=mysqli_connect($server,$user,$pass,$database);
if($conn)
{
	$query="select * from student_identity where snumber='$_SESSION[number]' ";
	echo "".$_SESSION['number'];
	$select=mysqli_query($conn,$query);
	if($select)
	{
		$row=mysqli_fetch_array($select);
		
		echo "<img src='upload/$row[sphoto]' heigt=20% width=30%> <br>";
		echo "<img src='upload/$row[ssign]' heigt=20% width=30%><br>";
		echo "<img src='upload/$row[stuition_fees]' heigt=20% width=30%><br>";

	} 
	else
	 {
	 	echo "query problem";
	}
}
?>