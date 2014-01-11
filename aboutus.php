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
     <link rel="stylesheet" type="text/css" href="styles/loggedinuser_page.css" />
     <link rel="stylesheet" type="text/css" href="styles/jquery-ui.css" />
     <link rel="stylesheet" type="text/css" href="styles/aboutus.css" />
     <script type="text/javascript" src="scripts/typeface-0.15.js"></script>
     <script type="text/javascript" src="scripts/aleo_bold.typeface.js"></script>
     <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="scripts/jquery-ui.js"></script>
     <script type="text/javascript" src="scripts/bootstrap.js"></script>
     
     

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
                      <li><a href="support.php">Support</a></li>
                       <li class="myactive"><a href="aboutus.php">About Us</a></li>
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
              
                   <div class="row partnerstag">
                   <div class="col-xs-12">
                     Project Partners (Major Project for the completion of Bachelors of Engineering in Software Engineering)
                   </div>
                   </div>
                   <div class="row photos">
                       <div class=" col-md-4 col-xs-12  hemsa">
                           Hem Sharma Acharya
                           <img src="images/hem.jpg" width="230" height="300" />
                           <p>
                               email: hemtros@gmail.com<br />
                               twitter: @hemtros<br />
                               facebook: /hemtros
                           </p>
                       </div>
                       <div class="col-md-4 col-xs-12 bika">
                           Bikram Adhikari
                           <img src="images/bikram.jpg" width="230" height="300"/>
                            <p>
                                email: salik.adhikari@gmail.com<br />
                                twitter: @meadhikari<br />
                                facebook: /meadhikari
                            </p>
                       </div>
                       <div class="col-md-4 col-xs-12 amirb">
                           Amir Bhujel
                           <img src="images/amir.jpg" width="230" height="300"/>
                           <p>
                               email: bhujel.amir@gmail.com
                               
                           </p>
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



