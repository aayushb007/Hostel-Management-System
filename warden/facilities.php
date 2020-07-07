<?php 
session_start();
if(isset($_SESSION['email']))
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
                <li role='presentation'><a href='warden_hpage.php' >Home</a></li>
                <li role='presentation'><a href='profile.php' >Profile</a></li>
                <li role='presentation'><a href='facilities.php' class='active'>Facilities</a></li>
                <li role='presentation'><a href='short_list.php'>Short_list</a></li>
                <!--<li role='presentation'><a href='portfolio.html'>Portfolio</a></li>
                <li role='presentation'><a href='blog.html'>Blog</a></li>
                -->
                <li role='presentation'><a href='contact.php' >Contact</a></li>
                <li role='presentation'>";?><a href='logout.php' onclick="return confirm('Do You Really Whant To Logout....?')">Logout</a><?php echo "</li>
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

  

  <section id='contact-page'>
    <div class='container'>
      <div class='center'>
      <br>
        <h2 style='color:green;text-decoration:underline'>INFORMATION ABOUT HOSTEL</h2>
       </div>
       <br>
      <div class='row contact-wrap'>
        <div class='status alert alert-success' style='display: none'></div>
        <div class='col-md-6 col-md-offset-3'>
          <div id='sendmessage'>Your message has been sent. Thank you!</div>
          <div id='errormessage'></div>
          <form action='update_facilities.php' method='POST' role='form' class='contactForm'>
            <div class='form-group'>";
            include("database_info.php");
            $conn=mysqli_connect($server,$user,$pass,$database);
            if($conn)
            {
              $query="select * from warden where email='$_SESSION[email]' limit 1" ;
              $select=mysqli_query($conn,$query);
              if($select)
              {
                  $row=mysqli_fetch_array($select);
              echo "<div class='form-group'>
            <l>TOTAL NUMBER OF ROOM :</l>
              <input type='text' class='form-control' name='total_room' id='subject' value='$row[total_room]' />
              <div class='validation'></div>
            </div>
            
            <div class='form-group'>
            <l>TOTAL BED PER ROOM :</l>
              <input type='text' class='form-control' name='total_bed_per_room' id='subject' value='$row[total_bed_per_room]' />
              <div class='validation'></div>
            </div>  

            <div class='form-group'>
            <l>FEES PER STUDENT OF TERM :</l>
              <input type='text' class='form-control' name='fees_per_student' id='subject' value='$row[fees_per_student]' />
              <div class='validation'></div>
            </div>";
      ?>
 </div> <div class="text-center"><button type="submit" name="update" class="btn btn-primary btn-lg" onclick="return confirm(' NOTE :--->This Changed Will Publish To All The Student Those Who Taken Part In Hostel... Do You Really Want To Publish IT ....?')">Update</button></div>
        <?php  
          echo "</form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->
<br><br><br><br>
  <footer>
    <div class='footer'>
      <div class='container'>
        <div class='social-icon'>
          <div class='col-md-4'>
            <ul class='social-network'>
              <li><a href='#' class='fb tool-tip' title='Facebook'><i class='fa fa-facebook'></i></a></li>
              <li><a href='#' class='twitter tool-tip' title='Twitter'><i class='fa fa-twitter'></i></a></li>
              <li><a href='#' class='gplus tool-tip' title='Google Plus'><i class='fa fa-google-plus'></i></a></li>
              <li><a href='#' class='linkedin tool-tip' title='Linkedin'><i class='fa fa-linkedin'></i></a></li>
              <li><a href='#' class='ytube tool-tip' title='You Tube'><i class='fa fa-youtube-play'></i></a></li>
            </ul>
          </div>
        </div>

        <div class='col-md-4 col-md-offset-4'>
          <div class='copyright'>
            &copy; Company Theme. All Rights Reserved.
            <div class='credits'>
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              Designed by <a href='https://bootstrapmade.com/'>BootstrapMade</a></div>
          </div>
        </div>
      </div>
      <div class='pull-right'>
        <a href='#home' class='scrollup'><i class='fa fa-angle-up fa-3x'></i></a>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

</body>

</html>";
}
}
}
else
{
  echo "Page Not Found.....";
}

?>
  