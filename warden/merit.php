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
