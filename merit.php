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
l{
  color:black;  
  text-decoration:underline
}
td,th{
  color:black; 
text-align:center;
}
</style>
</head>

<body>
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
                <li role='presentation'><a href='apply.php'>Apply</a></li>
                <li role='presentation'><a href='merit.php' class='active'>Merit</a></li>
                
                <li role='presentation'><a href='contact.php' >Contact</a></li>
                <li role='presentation'>";?><a href='logout.php' onclick="return confirm('Do You Really Whant To Logout....?')">Logout</a> 
                </li>
               <?php
              echo "</ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

   <div id='breadcrumb'>
    <div class='container'>
      <div class='breadcrumb'>
        <li><a href='student_hpage.html'>Home</a></li>
        <li>Merit</li>
      </div>
    </div>
  </div>

  

  <section id='contact-page'>
  
      <div class='center'><br>
        <h2 style='background:red'>STUDENT LIST WHO CAN PARTICIPATE IN HOSTEL<br>
        THESE STUDENT CAN MAKE PAYMENT NOW</h2>
       </div>

        
          <form  role='form' class='contactForm'>";

            include('database_info.php');
            $conn=mysqli_connect($server,$user,$pass,$database);
            if($conn)
            {
              $identity="select snumber from student_identity where snumber='$_SESSION[number]' limit 1";
              $identity=mysqli_query($conn,$identity);
              $identity=mysqli_fetch_array($identity);
             
              if($identity[0]!=NULL)
              {
              $query="select gender from student_registration where number='$_SESSION[number]' limit 1";
              $row=mysqli_query($conn,$query);
              $gen=mysqli_fetch_array($row);
              
              if($gen['gender']=='male')
              {
                $query1="select total_room,total_bed_per_room from warden where gender='male' limit 1";
                $wrow=mysqli_query($conn,$query1);
                
                $total=mysqli_fetch_row($wrow); 
                $total_row=$total[0]*$total[1];
               $query2="SELECT number,mname FROM student_registration WHERE gender='male' order by date limit $total_row";
                $srow=mysqli_query($conn,$query2);

                  echo "<center><table border='3'width='50%' >
                    <tr>
                    <th>NUMBER</th>
                    <th>NAME</th>
                    <th>INFO ABOUT HOSTEL</th>
                    <th>PAYMENT STATUS</th>
                    </tr>";
                  while($data=mysqli_fetch_row($srow))
                  { 
                    $query3="select payment from payment_status where number='$data[0]' limit 1";
                    $select=mysqli_query($conn,$query3);

                    $select1=mysqli_fetch_row($select);
                                   
                    echo "<tr>
                        <td><input type='radio' value='$data[0]' name='number'>$data[0]</td>
                        <td>$data[1]</td>
                        <td><a href='detail.php' style='color:blue;text-decoration:underline'> Hostel Detail</a></td>
                        <td>$select1[0]</td>
                        </tr>"; 
                    }
                echo "</table>";
                echo " <button type='submit' name='registration' class='btn btn-primary btn-lg' formaction='payment.php' formmethod='POST' >Make Payment</button>";
               }
             
             

               if($gen['gender']=='female')
              {
                $query1="select total_room,total_bed_per_room from warden where gender='female' limit 1";
                $wrow=mysqli_query($conn,$query1);
                
                $total=mysqli_fetch_row($wrow); 
                $total_row=$total[0]*$total[1];
               $query2="SELECT number,mname FROM student_registration WHERE gender='female' order by date limit $total_row";
                $srow=mysqli_query($conn,$query2);
                  echo "<center><table border='3'width='50%' >
                    <tr>
                    <th>NUMBER</th>
                    <th>NAME</th>
                    <th>INFO ABOUT HOSTEL</th>
                    <th>PAYMENT STATUS</th>
                    </tr>";
                  while($data=mysqli_fetch_row($srow))
                  {
                    $query3="select payment from payment_status where number='$data[0]' limit 1";
                    $select=mysqli_query($conn,$query3);
                    $select1=mysqli_fetch_row($select);
                    echo "<tr>
                        <td><input type='radio' value='$data[0]' name='number'>$data[0]</td>
                        <td>$data[1]</td>
                        <td><a href='detail.php' style='color:blue;text-decoration:underline'> Hostel Detail</a></td>
                        <td>$select1[0]</td>
                        
                        </tr>"; 
                  }
                  echo "</table>";
                    echo " <button type='submit' name='registration' class='btn btn-primary btn-lg' formaction='payment.php' formmethod='POST' >Make Payment</button>";
                  }

                }
                else
                     {
                      
                    echo "<script>alert('You Have Not Uploaded The Document Yet So Upload Required Document Then Try');document.location='apply.php'</script>";

                     }

            }
          }
        else
       {
          echo "Page Not Found...";
      }
        ?>