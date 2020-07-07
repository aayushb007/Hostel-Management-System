<?php 
session_start();
if(isset($_SESSION['number']))
{
echo "<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Hostel Manangment System</title>

  <!-- Bootstrap -->
  <link href='css/bootstrap.min.css' rel='stylesheet'>
  <link rel='stylesheet' href='css/font-awesome.min.css'>
  <link rel='stylesheet' href='css/animate.css'>
  <link href='css/prettyPhoto.css' rel='stylesheet'>
  <link href='css/style.css' rel='stylesheet' />
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://<bootstrapmade class='com'></bootstrapmade>
  ======================================================= -->

<style type='text/css'>
.l1{
	color:black;	
	text-decoration:underline;
}
</style>


</head>

<body>
<script>
var valid = false;

function validate_fileupload(input_element)
{
    var el = document.getElementById('feedback');
    var fileName = input_element.value;
    var allowed_extensions = new Array('jpg','png','gif');
    var file_extension = fileName.split('.').pop(); 
    for(var i = 0; i < allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension)
        {
            valid = true; // valid file extension
           	return;
        }
    }
   alert('This File Type Is Not Allowed');
    valid = false;
}

function valid_form()
{
    return valid;
}
</script>
  <header>
    <nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
      <div class='navigation'>
        <div class='container'>
          <div class='navbar-header'>
            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='.navbar-collapse.collapse'>
              <span class='sr-only'>Toggle navigation</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>
            <div class='navbar-brand'>
              <a href='index.html'><h1><span>Hoste</span>lers</h1></a>
            </div>
          </div>

          <div class='navbar-collapse collapse'>
            <div class='menu'>
              <ul class='nav nav-tabs' role='tablist'>
                <li role='presentation'><a href='student_hpage.php' >Home</a></li>
                <li role='presentation'><a href='profile.php' >Profile</a></li>
                <li role='presentation'><a href='apply.php' class='active'>Apply</a></li>
                <li role='presentation'><a href='merit.php'>Merit</a></li>
                
                <li role='presentation'><a href='contact.php' >Contact</a></li>
                <li role='presentation'>";?><a href='logout.php' onclick="return confirm('Do You Really Whant To Logout....?')">Logout</a>
                	<?php 
                echo "</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id='breadcrumb'>
    <div class='container'>
      <div class='breadcrumb'>
        <li><a href='student_hpage.php'>Home</a></li>
        <li>Profile</li>
      </div>
    </div>
  </div>

	

	<title>file uploading</title>
</head>
<body>
<div>";
include("database_info.php");
$conn=mysqli_connect($server,$user,$pass,$database);
if($conn)
{	
	$query="select snumber from student_identity where snumber='$_SESSION[number]' limit 1";
	$select=mysqli_query($conn,$query);
	if($select)
	{
			$row=mysqli_fetch_array($select);
			if($row['snumber']!==NULL)
			{
			echo "<script>alert('You Have Alreadt Uploaded The Document ');document.location='student_hpage.php'</script>";
			}
			else
			{
	echo "<div id='feedback' style='color: red;'></div>
	<form method='POST'  enctype='multipart/form-data'>
	<center>
	<br>
	<h1 class='l1'> Upload The Necessary Document Carefully</h1>
	<br>
	<l class='l1' style='margin-right:14%;'>Photo: </l><input type='file' name='photo' onchange='validate_fileupload(this);' accept='.jpg,.png,.jpeg'><br>
<l class='l1' style='margin-right:14%;'>sign: </l><input type='file' name='sign' onchange='validate_fileupload(this);' accept='.jpg,.png,.jpeg'><br>
<l class='l1' style='margin-right:8.7%;'>Tuition Fees receipt: </l><input type='file' name='receipt' onchange='validate_fileupload(this);' accept='.jpg,.png,.jpeg'><br>
<l class='l1' style='margin-right:11%;'>ADHAR CARD: </l><input type='file' name='adhar_card' onchange='validate_fileupload(this);' accept='.jpg,.jpeg'><br>
<input type='submit' style='background:green;padding:10px;border-color:black;' name='upload' value='upload' id='uploadsubmit' onclick='return valid_form();'>
</center>
</form>
</body>
</html>";

 
if(isset($_POST['upload']))
{
	
		function photo()
		{	

			
		$filepath="";
				if(isset($_FILES["photo"]) && $_FILES["photo"]["name"]<>"")
					{
						$file_ext=strtolower(pathinfo(basename($_FILES["photo"]["name"]),PATHINFO_EXTENSION));
						$target_file="$_SESSION[number]". "." .$file_ext;
						if(move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/".$target_file)){
							$filepath=$target_file;
					}
		}
		return $filepath;
		}

		function adhar_card()
		{	

			
		$filepath="";
				if(isset($_FILES["adhar_card"]) && $_FILES["adhar_card"]["name"]<>"")
					{
						$file_ext=strtolower(pathinfo(basename($_FILES["adhar_card"]["name"]),PATHINFO_EXTENSION));
						$target_file="$_SESSION[number]". "." .$file_ext;
						if(move_uploaded_file($_FILES["adhar_card"]["tmp_name"], "upload/".$target_file)){
							$filepath=$target_file;
					}
		}
		return $filepath;
		}

		function sign()
		{
			$filepath="";
			if(isset($_FILES["sign"]) && $_FILES["sign"]["name"]<>'')
			{
					$file_ext=strtolower(pathinfo(basename($_FILES["sign"]["name"]),PATHINFO_EXTENSION));
					$target_file=$_SESSION['number']."_sign".".".$file_ext;
					if(move_uploaded_file($_FILES["sign"]["tmp_name"], "upload/".$target_file));
					{
						$filepath=$target_file;
					}
			
			}
		return $filepath;
		}

		function receipt()
		{
			$filepath="";
			if(isset($_FILES["receipt"]) && $_FILES["receipt"]["name"]<>'')
			{
				$file_ext=strtolower(pathinfo(basename($_FILES["receipt"]["name"]),PATHINFO_EXTENSION));
				$target_file=$_SESSION['number']."_receipt".".".$file_ext;
				if(move_uploaded_file($_FILES["receipt"]["tmp_name"], "upload/".$target_file	));
				{
					$filepath=$target_file;
				}
			}
			return $filepath;
		}	
		
			$photo=photo();
			$sign=sign();
			$receipt=receipt();
			$adhar_card=adhar_card();
			$query="insert into student_identity values('$_SESSION[number]','$photo','$sign','$receipt','$adhar_card')";
			$sql=mysqli_query($conn,$query);
			if($sql)
			{
				echo "success";
			}
			else
			{
				echo "failed";
			}		
	}

}
}
}
	}	
else
{
	echo "Page Not Found....";
}
?>
