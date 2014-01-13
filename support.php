<!--authored by Hem sharma Acharya[hemtros@gmail.com] -->

<?php

session_start();

if(!$_SESSION['username']){
	header("location:login_page.php");
}

?>

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
     <link rel="stylesheet" type="text/css" href="styles/loggedinuser_page.css" />
     <link rel="stylesheet" type="text/css" href="styles/support.css" />
     <link rel="stylesheet" type="text/css" href="styles/jquery-ui.css" />
     <script type="text/javascript" src="scripts/typeface-0.15.js"></script>
     <script type="text/javascript" src="scripts/aleo_bold.typeface.js"></script>
     <script type="text/javascript" src="scripts/optimer_bold_italic.typeface.js"></script>
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
                <h1 id="websiteheading" class="typeface-js" style="font-family:Aleo">Product Monitoring Service</h1>
                <h2 id="tagline" class="typeface-js" style="font-family:Optimer;">(Mining Social media to monitor your product)</h2>
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
                 <div class="row sidenav"><!--logoutnav -->
                    <a href="logout.php">
                       <div class="col-xs-12">
                          logout
                       </div>
                    </a>
                </div><!-- End logoutnav -->
               
            </div>
          
            <div class="background bg1"></div>
            <div class="col-xs-10 block content">
              
               <div class="row">
                   <div class="col-xs-12">
                        <p class="supportinfo">
                        This web application has been developed as a Major Project for the                             completion of Bachelors of Engineering in Software Engineering from                           Pokhara University.
                        </p>
                        
                        <p class="supportinfo">
                          If you have any problem or queries regarding this web application,                            feel free to contact anyone of us or at the official email of the                                 project: support@opinionmining.webuda.com or fill the
                          form below and submit.
                         </p>
                   </div>
               </div>
               
               <div class="row">
                   <div class="col-xs-12">
                       <form class="requestsupport" method="post" action="send_form_email.php">
               
                <label for="yourname">Name:</label>
                <input type="text" alt="user name" id="yourname" placeholder="Your name"                         required="" name="yourname" />
                <label for="email">Email: </label>
                 <input type="email" alt="user email" id="youremail" placeholder="Your Email"                         required="" name="youremail" />
                 <textarea id="comment" placeholder="Comment" name="comment" rows="4" cols="41" maxlength="1000"></textarea>
                <button type="submit" alt="request support" id="submitbtn">Submit</button>	
			    
			        </form><!-- .register -->
                   </div>
               </div>
               <!--content -->
                
                
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



