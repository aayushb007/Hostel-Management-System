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
                <li role='presentation'><a href='profile.php' class='active'>Profile</a></li>
                <li role='presentation'><a href='apply.php'>Apply</a></li>
                <li role='presentation'><a href='merit.php'>Merit</a></li>
                
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
        <li><a href='student_hpage.php'>Home</a></li>
        <li>Profile</li>
      </div>
    </div>
  </div>

  

  <section id='contact-page'>
    <div class='container'>
      <div class='center'>
      <br>
        <h2 style='color:green;text-decoration:underline'>PROFILE</h2>
       </div>
      <div class='row contact-wrap'>
        <div class='status alert alert-success' style='display: none'></div>
        <div class='col-md-6 col-md-offset-3'>
          <div id='sendmessage'>Your message has been sent. Thank you!</div>
          <div id='errormessage'></div>
          <form action='update_profile.php' method='POST' role='form' class='contactForm'>
            <div class='form-group'>";
            include("database_info.php");
            $conn=mysqli_connect($server,$user,$pass,$database);
            if($conn)
            {
              $query="select * from student_registration where number='$_SESSION[number]' limit 1" ;
              $select=mysqli_query($conn,$query);
              if($select)
              {
                  $row=mysqli_fetch_array($select);
              echo "
            <div class='form-group'>
             <l>SURNAME :</l> <input type='text' name='fname' class='form-control' id='fname' value='$row[fname]'  />
              <div class='validation'></div>
            </div>
            

            <div class='form-group'>
              <l>YOUR NAME :</l><input type='text' name='mname' class='form-control' id='mname' value='$row[mname]' />
              <div class='validation'></div>
            </div>
            

            <div class='form-group'>
              <l>FATHER NAME :</l><input type='text' name='lname' class='form-control' id='name' value='$row[lname]'  />
              <div class='validation'></div>
            </div>
            

            <div class='form-group'>
            <l>COUNTRY :</l>
            <select name='country' style='color: #4E4E4E; width: 100%;   border-color:#f2f2f2;'>
              <option value='$row[country]'>$row[country]</option>
              
              <option value='Afghanistan'>Afghanistan</option>
              <option value='Albania'>Albania</option>
              <option value='Algeria'>Algeria</option>
              <option value='Andorra'>Andorra</option>
              <option value='Angola'>Angola</option>
              <option value='Antigua and Barbuda'>Antigua and Barbuda</option>
              <option value='Argentina'>Argentina</option>
              <option value='Armenia'>Armenia</option>
              <option value='Australia'>Australia</option>
              <option value='Austria'>Austria</option>
              <option value='Austrian Empire'>Austrian Empire</option>
              <option value='Azerbaijan'>Azerbaijan</option>


<option value='Baden'>Baden</option>
<option value='Bahrain'>Bahrain</option>
<option value='Bangladesh'>Bangladesh</option>
<option value='Barbados'>Barbados</option>
<option value='Bavaria'>Bavaria</option>
<option value='Belarus'>Belarus</option>
<option value='Belgium'>Belgium</option>
<option value='Belize'>Belize</option>
<option value='Benin'>Benin</option> (Dahomey)
<option value='Bolivia'>Bolivia</option>
<option value='Bosnia'>Bosnia</option> and Herzegovina
<option value='Botswana'>Botswana</option>
<option value='Brazil'>Brazil</option>
<option value='Brunei'>Brunei</option>
<option value='Brunswick'>Brunswick</option> and Lüneburg
<option value='Bulgaria'>Bulgaria</option>
<option value='Burkina'>Burkina</option> Faso (Upper Volta)
<option value='Burma'>Burma</option>
<option value='Burundi'>Burundi</option>


<option value='Cabo Verde'>Cabo Verde</option>
<option value='Cambodia'>Cambodia</option>
<option value='Cameroon'>Cameroon</option>
<option value='Canada'>Canada</option>
<option value='Central African Republic'>Central African Republic</option>
<option value='Central American Federation'>Central American Federation</option>
<option value='Chad'>Chad</option>
<option value='Chile'>Chile</option>
<option value='China'>China</option>
<option value='Colombia'>Colombia</option>
<option value='Comoros'>Comoros</option>
<option value='Costa Rica'>Costa Rica</option>
<option value='Cote d’Ivoire (Ivory Coast)'>Cote d’Ivoire (Ivory Coast)</option>
<option value='Croatia'>Croatia</option>
<option value='Cuba'>Cuba</option>
<option value='Cyprus'>Cyprus</option>
<option value='Czechia'>Czechia</option>
<option value='Czechoslovakia'>Czechoslovakia</option>


<option value='Democratic Republic of the Congo'>Democratic Republic of the Congo</option> 
<option value='Denmark'>Denmark</option>
<option value='Djibouti'>Djibouti</option>
<option value='Dominica'>Dominica</option>
<option value='Dominican Republic'>Dominican Republic</option>


<opion value='East Germany (German Democratic Republic)'>East Germany (German Democratic Republic)</opion> 
<opion value='Ecuador'>Ecuador</opion>
<opion value='Egypt'>Egypt</opion>
<opion value='El Salvador'>El Salvador</opion> 
<opion value='Equatorial Guinea'>Equatorial Guinea</opion> 
<opion value='Eritrea'>Eritrea</opion>
<opion value='Estonia'>Estonia</opion>
<opion value='Eswatini'>Eswatini</opion>
<opion value='Ethiopia'>Ethiopia</opion>

<option value='Iceland'>Iceland</option>
<option value='India'>India</option>
<option value='Indonesia'>Indonesia</option>
<option value='Iran'>Iran</option>
<option value='Iraq'>Iraq</option>
<option value='Ireland'>Ireland</option>
<option value='Israel'>Israel</option>
<option value='Italy'>Italy</option>

          </select>
            </div>
          


            <div class='form-group'>
            <l>STATE :</l>
            <select name='state' style='color: #4E4E4E;border-color:#f2f2f2;width: 100%'>
              <option value='$row[state]'>$row[state]</option>
<option value='Andra Pradesh'>Andra Pradesh</option>              
<option value='Hyderabad'>Hyderabad</option>
<option value='Arunachal Pradesh'>Arunachal Pradesh</option>
<option value='Assam'>Assam</option>
<option value='Bihar'>Bihar</option>
<option value='Chhattisgarh'>Chhattisgarh</option>
<option value='Gujarat'>Gujarat</option>
<option value='Haryana'>Haryana</option>
<option value='Himachal'>Himachal Pradesh</option> 
<option value='Jammu and Kashmir'>Jammu and Kashmir</option>
<option value='Jharkhand'>Jharkhand</option>
<option value='Karnataka'>Karnataka</option>
<option value='Kerala'>Kerala</option>
<option value='Madya Pradesh'>Madya Pradesh</option>
<option value='Maharashtra'>Maharashtra</option>
<option value='Manipur'>Manipur</option>
<option value='Meghalaya'>Meghalaya</option>
<option value='Mizoram'>Mizoram</option>
<option value='Nagaland'>Nagaland</option>
<option value='Orissa'>Orissa</option>
<option value='Punjab'>Punjab</option>
<option value='Rajasthan'>Rajasthan</option>
<option value='Sikkim'>Sikkim</option>
<option value='Tamil'>Tamil Nadu</option> 
<option value='Telagana'>Telagana</option>
<option value='Tripura'>Tripura</option>
<option value='Uttaranchal'>Uttaranchal</option>
<option value='Uttar'>Uttar Pradesh</option>
<option value='West'>West Bengal</option>
</select> </div>
            
            <div class='form-group'>
            <l>CITY :</l>
            <select name='city' style='color: #4E4E4E; border-color:#f2f2f2; width: 100%'>
              <option value='$row[city]'>$row[city]</option>

              <option value='ahmedabad  '>Ahmedabad</option> 
<option value='Amreli'>Amreli</option>  
<option value='Anand'>Anand</option> 
<option value='Banas Kantha'>Banas Kantha</option> 
<option value='Bharuch'>Bharuch</option> 
<option value='Bhavnagar'>Bhavnagar</option> 
<option value='Dohad'>Dohad</option> 
<option value='Gandhinagar'>Gandhinagar</option>
<option value='Jamnagar'>Jamnagar</option> 
<option value='Junagadh'>Junagadh</option> 
<option value='Kachchh'>Kachchh</option>
<option value='Kheda'>Kheda</option>
<option value='Mahesana'>Mahesana</option> 
<option value='Narmada'>Narmada</option> 
<option value='Navsari'>Navsari</option> 
<option value='Panch Mahals'>Panch Mahals</option>  
<option value='Patan'>Patan</option> 
<option value='Porbandar'>Porbandar</option>
<option value='Rajkot'>Rajkot</option> 
<option value='Sabar Kantha'>Sabar Kantha</option>  
<option value='Surat'>Surat</option> 
<option value='Surendranagar'>Surendranagar</option>
<option value='Tapi'>Tapi</option> 
<option value='The Dangs'>The Dangs</option>
<option value='Vadodara'>Vadodara</option> 
<option value='Valsad'>Valsad</option>

            </select>
          </div>

           <div class='form-group'>
              <l>ADDRESS :</l>
              <textarea class='form-control' name='address' rows='2' value='$row[Address]'>$row[Address]</textarea>
              <div class='validation'></div>
            </div>

            <div class='form-group'>
            <l>CONTACT_NUMBER :</l>
              <input type='number' class='form-control' name='phone' id='subject' value='$row[contact]' />
              <div class='validation'></div>
            </div>
          
            <div class='form-group'>
            <l>PASSWORD :</l>
              <input type='text' class='form-control' name='password' id='subject' value='$row[password]' />
              <div class='validation'></div>
            </div>
            
              

 
 </div>

            
            <div class='text-center'><button type='submit' name='update' class='btn btn-primary btn-lg' >Update</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

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
