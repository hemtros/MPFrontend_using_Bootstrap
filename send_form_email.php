<?php

session_start();

if(!$_SESSION['username']){
	header("location:login_page.php");
}
?>
 

 <?php
 
if(isset($_POST['youremail'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "hemtros@gmail.com";
 
    $email_subject = "Support request from user";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['yourname']) ||
 
        !isset($_POST['youremail']) ||
 
        !isset($_POST['comment'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $yourname = $_POST['yourname']; // required
 
    $email_from = $_POST['youremail']; // required
 
    $comment = $_POST['comment']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";

 
  if(!preg_match($string_exp,$yourname)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comment) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
 
    $email_message .= "Requester's Name: ".clean_string($yourname)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Comment: ".clean_string($comment)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 <!--authored by Hem sharma Acharya[hemtros@gmail.com] -->


<?php session_start(); ?>
<!Doctype html>


<html>
<head>
     <title>Product Monitoring Service</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
     <link rel="stylesheet" type="text/css" href="styles/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="styles/forms.css" />
     <link rel="stylesheet" type="text/css" href="styles/main.css" />
     <link rel="stylesheet" type="text/css" href="styles/support.css" />
     <link rel="stylesheet" type="text/css" href="styles/jquery-ui.css" />
     <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="scripts/jquery-ui.js"></script>
     <script type="text/javascript" src="scripts/bootstrap.js"></script>
     <script type="text/javascript" src="scripts/myscript.js"></script>
     <script type="text/javascript" src="scripts/retrievekeywordinfo.js"></script>

</head>

<body>
    <div class="container">
        
        <div class="row banner">
            <div class="col-md-2">
<!--
                <img src="images/logo.png" />
-->
                <img src="images/Monitoring-icon128x128.png" />
            </div>
            <div class="col-md-10">
                <h1 id="websiteheading">Product Monitoring Service</h1>
                <h2 id="tagline">(Mining Social media to monitor your product)</h2>
            </div>
        </div>
        
       
            <div class="row navibar">
                 <ul class="nav nav-pills" id="navigbar">
                      <li><a href="loggedinuser_page.php">Home</a></li>
                      <li><a href="loggedinuser_monitor_page.php">Monitor</a></li>
                      <li class="myactive"><a href="support.php">Support</a></li>
                       <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </div>
        
        <div class="row contentbody wrapper">
          <div class="col-xs-2 block sidebar">
                <div class="row breaks">
                    <br /><br /><br />
                </div>
                <div class="row registernav">
                    <a href="registration_page.php">
                       <div class="col-xs-12">
                          Register
                       </div>
                    </a>
                </div>
                <div class="row loginnav">
                   <a href="login_page.php">
                       <div class="col-xs-12">
                          Login
                       </div>
                   </a>
                </div>
            </div>
          
            <div class="background bg1"></div>
            <div class="col-xs-10 block content">
              
             
               
               <!--content -->
                Thank you for contacting us. We will be in touch with you very soon.

                
            </div>
            <div class="background bg2"></div>
        </div>
        
        
        <div class="row footer">
            <div class="col-xs-12">
                &copy;&nbsp;Copyright <span class="year"></span>
            </div>
        </div>
        
    </div>
</body>
</html>




 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>