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
                <li role='presentation'><a href='student_hpage.php' class='active'>Home</a></li>
                <li role='presentation'><a href='profile.php'>Profile</a></li>
                <li role='presentation'><a href='apply.php'>Apply</a></li>
                <li role='presentation'><a href='merit.php'>Merit</a></li>
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

  <section id='main-slider' class='no-margin'>
    <div class='carousel slide'>
      <div class='carousel-inner'>
        <div class='item active' style='background-image: url(images/slider/bg1.jpg)'>
          <div class='container'>
            <div class='row slide-margin'>
              <div class='col-sm-6'>
                <div class='carousel-content'>
                  <h2 class='animation animated-item-1'>Welcome To <span>Hostel Management System</span></h2>
                  <!--<a class='btn-slide animation animated-item-3' href='#'>Read More</a>-->
                </div>
              </div>

              <div class='col-sm-6 hidden-xs animation animated-item-4'>
                <div class='slider-img'>
                  <img src='images/slider/img3.png' class='img-responsive'>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  </section>
  <!--/#main-slider-->

  <div class='feature'>
    <div class='container'>
      <div class='text-center'>
        <div class='col-md-3'>
          <div class='hi-icon-wrap hi-icon-effect wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='300ms'>
            <i class='fa fa-book'></i>
            <h2>Full Responsive</h2>
            <p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
          </div>
        </div>
        <div class='col-md-3'>
          <div class='hi-icon-wrap hi-icon-effect wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='600ms'>
            <i class='fa fa-laptop'></i>
            <h2>Retina Ready</h2>
            <p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
          </div>
        </div>
        <div class='col-md-3'>
          <div class='hi-icon-wrap hi-icon-effect wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='900ms'>
            <i class='fa fa-heart-o'></i>
            <h2>Full Responsive</h2>
            <p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
          </div>
        </div>
        <div class='col-md-3'>
          <div class='hi-icon-wrap hi-icon-effect wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='1200ms'>
            <i class='fa fa-cloud'></i>
            <h2>Friendly Code</h2>
            <p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class='about'>
    <div class='container'>
      <div class='col-md-6 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='300ms'>
        <h2>about us</h2>
        <img src='images/6.jpg' class='img-responsive' />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div>

      <div class='col-md-6 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='600ms'>
        <h2>Template built with Twitter Bootstrap</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
          </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
            libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque </p>
      </div>
    </div>
  </div>

  <div class='lates'>
    <div class='container'>
      <div class='text-center'>
        <h2>Lates News</h2>
      </div>
      <div class='col-md-4 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='300ms'>
        <img src='images/4.jpg' class='img-responsive' />
        <h3>Template built with Twitter Bootstrap</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div>

      <div class='col-md-4 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='600ms'>
        <img src='images/4.jpg' class='img-responsive' />
        <h3>Template built with Twitter Bootstrap</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div>

      <div class='col-md-4 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='900ms'>
        <img src='images/4.jpg' class='img-responsive' />
        <h3>Template built with Twitter Bootstrap</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
          pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
        </p>
      </div>
    </div>
  </div>

  <section id='partner'>
    <div class='container'>
      <div class='center wow fadeInDown'>
        <h2>Our Partners</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>

      <div class='partners'>
        <ul>
          <li> <a href='#'><img class='img-responsive wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='300ms' src='images/partners/partner1.png'></a></li>
          <li> <a href='#'><img class='img-responsive wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='600ms' src='images/partners/partner2.png'></a></li>
          <li> <a href='#'><img class='img-responsive wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='900ms' src='images/partners/partner3.png'></a></li>
          <li> <a href='#'><img class='img-responsive wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='1200ms' src='images/partners/partner4.png'></a></li>
          <li> <a href='#'><img class='img-responsive wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='1500ms' src='images/partners/partner5.png'></a></li>
        </ul>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#partner-->

  <section id='conatcat-info'>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-8'>
          <div class='media contact-info wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='600ms'>
            <div class='pull-left'>
              <i class='fa fa-phone'></i>
            </div>
            <div class='media-body'>
              <h2>Have a question or need a custom quote?</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->

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
  <script src='js/jquery.min.js'></script>
  <script src='js/jquery-migrate.min.js'></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src='js/bootstrap.min.js'></script>
  <script src='js/jquery.prettyPhoto.js'></script>
  <script src='js/jquery.isotope.min.js'></script>
  <script src='js/wow.min.js'></script>
  <script src='js/functions.js'></script>

</body>

</html>";
}
else
{
    echo "Page Not Found.........";
}
?>