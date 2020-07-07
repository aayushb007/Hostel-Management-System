<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hostel Manangment System</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://<bootstrapmade class="com"></bootstrapmade>
  ======================================================= -->

</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.html"><h1><span>Hoste</span>lers</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.html">Home</a></li>
                <li role="presentation"><a href="about.php">About Us</a></li>
                <li role="presentation"><a href="services.html">Services</a></li>
                <!--<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
                <li role="presentation"><a href="blog.html">Blog</a></li>
                -->
                <li role="presentation"><a href="contact.php" >Contact</a></li>
                <li role="presentation"><a href="login.php" class="active">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Registration</li>
      </div>
    </div>
  </div>

  

  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Student Registration</h2>
       </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6 col-md-offset-3">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="registration_store.php" method="POST" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="number" class="form-control" id="name" placeholder="Enter Either Enrollment or seat or d2d_enrollment Number"  data-msg="Please enter a correct Number" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" name="fname" class="form-control" id="fname" placeholder="Surname Name"  />
              <div class="validation"></div>
            </div>
            

            <div class="form-group">
              <input type="text" name="mname" class="form-control" id="mname" placeholder="Your Name" />
              <div class="validation"></div>
            </div>
            

            <div class="form-group">
              <input type="text" name="lname" class="form-control" id="name" placeholder="Father Name"  />
              <div class="validation"></div>
            </div>
            

            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder=" Email " data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>



            <div class="form-group">
            <select name="country" style="color: #4E4E4E; width: 100%;   border-color:#f2f2f2;">
              <option>Select Country</option>
              
              <option value="Afghanistan">Afghanistan</option>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
              <option value="Argentina">Argentina</option>
              <option value="Armenia">Armenia</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Austrian Empire">Austrian Empire</option>
              <option value="Azerbaijan">Azerbaijan</option>


<option value="Baden">Baden</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Bavaria">Bavaria</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option> (Dahomey)
<option value="Bolivia">Bolivia</option>
<option value="Bosnia">Bosnia</option> and Herzegovina
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Brunswick">Brunswick</option> and Lüneburg
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina">Burkina</option> Faso (Upper Volta)
<option value="Burma">Burma</option>
<option value="Burundi">Burundi</option>


<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Central American Federation">Central American Federation</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote d’Ivoire (Ivory Coast)">Cote d’Ivoire (Ivory Coast)</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czechia">Czechia</option>
<option value="Czechoslovakia">Czechoslovakia</option>


<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option> 
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>


<opion value="East Germany (German Democratic Republic)">East Germany (German Democratic Republic)</opion> 
<opion value="Ecuador">Ecuador</opion>
<opion value="Egypt">Egypt</opion>
<opion value="El Salvador">El Salvador</opion> 
<opion value="Equatorial Guinea">Equatorial Guinea</opion> 
<opion value="Eritrea">Eritrea</opion>
<opion value="Estonia">Estonia</opion>
<opion value="Eswatini">Eswatini</opion>
<opion value="Ethiopia">Ethiopia</opion>

<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>

          </select>
            </div>
          


            <div class="form-group">
            <select name="state" style="color: #4E4E4E;border-color:#f2f2f2;width: 100%">
              <option>Select State</option>
<option value="Andra Pradesh">Andra Pradesh</option>              
<option value="Hyderabad">Hyderabad</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal">Himachal Pradesh</option> 
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madya Pradesh">Madya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil">Tamil Nadu</option> 
<option value="Telagana">Telagana</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar">Uttar Pradesh</option>
<option value="West">West Bengal</option>
</select> </div>
            
            <div class="form-group">
            <select name="city" style="color: #4E4E4E; border-color:#f2f2f2; width: 100%">
              <option>Select city</option>

              <option value="">Ahmedabad</option> 
<option value="Amreli">Amreli</option>  
<option value="Anand">Anand</option> 
<option value="Banas Kantha">Banas Kantha</option> 
<option value="Bharuch">Bharuch</option> 
<option value="Bhavnagar">Bhavnagar</option> 
<option value="Dohad">Dohad</option> 
<option value="Gandhinagar">Gandhinagar</option>
<option value="Jamnagar">Jamnagar</option> 
<option value="Junagadh">Junagadh</option> 
<option value="Kachchh">Kachchh</option>
<option value="Kheda">Kheda</option>
<option value="Mahesana">Mahesana</option> 
<option value="Narmada">Narmada</option> 
<option value="Navsari">Navsari</option> 
<option value="Panch Mahals">Panch Mahals</option>  
<option value="Patan">Patan</option> 
<option value="Porbandar">Porbandar</option>
<option value="Rajkot">Rajkot</option> 
<option value="Sabar Kantha">Sabar Kantha</option>  
<option value="Surat">Surat</option> 
<option value="Surendranagar">Surendranagar</option>
<option value="Tapi">Tapi</option> 
<option value="The Dangs">The Dangs</option>
<option value="Vadodara">Vadodara</option> 
<option value="Valsad">Valsad</option>

            </select>
          </div>

           <div class="form-group">
              <textarea class="form-control" name="address" rows="5" data-rule="required" data-msg="Please write the address" placeholder="Address"></textarea>
              <div class="validation"></div>
            </div>

            <div class="form-group">
              <input type="number" class="form-control" name="phone" id="subject" placeholder="Contact Number" />
              <div class="validation"></div>
            </div>
          
            <div class="form-group">
              <input type="password" class="form-control" name="password" id="subject" placeholder="password" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="cpassword" id="subject" placeholder="Confirm password" />
              <div class="validation"></div>
            </div>
              

 <div class="form-group">
 <h4> Gender   &nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="gender" value="male" style="color: #4E4E4E;">Male&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" style="color: #4E4E4E;">Female&nbsp;&nbsp;&nbsp;
  </h4> <div class="validation"></div>
 </div>

            
            <div class="text-center"><button type="submit" name="register" class="btn btn-primary btn-lg" >Register</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

  <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            &copy; Company Theme. All Rights Reserved.
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div>
          </div>
        </div>
      </div>
      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

</body>

</html>
