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
     <link rel="stylesheet" type="text/css" href="styles/sentimentsgraph.css" />
     <script type="text/javascript" src="scripts/typeface-0.15.js"></script>
    <script type="text/javascript" src="scripts/aleo_bold.typeface.js"></script>
     <script type="text/javascript" src="scripts/optimer_bold_italic.typeface.js"></script>
     <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="scripts/bootstrap.js"></script>
     <script type="text/javascript" src="scripts/myscript.js"></script>
     <script type="text/javascript" src="scripts/retrievekeywordinfo.js"></script>
     <script type="application/javascript" src="scripts/Chart.min.js"></script>
     <script type="text/javascript" src="scripts/legend.js"></script>
     <script type="text/javascript" src="scripts/bargraph.js"></script>

</head>

<body>
    <div class="container">
        
        <div class="row banner">
            <div class="col-md-2">
<!--
                <img src="images/logo.png" />
-->
                <a href="loggedinuser_page.php"><img src="images/Monitoring-icon128x128.png" /></a>
            </div>
            <div class="col-md-10">
                <h1 id="websiteheading" class="typeface-js" style="font-family:Aleo">Product Monitoring Service</h1>
                <h2 id="tagline" class="typeface-js" style="font-family:Optimer;">(Mining Social media to monitor your product)</h2>
            </div>
        </div>
        
       
            <div class="row navibar">
              
                 <ul class="nav nav-pills" id="navigbar">
                      <li><a href="loggedinuser_page.php">Home</a></li>
                      <li class="myactive"><a href="loggedinuser_monitor_page.php">Monitor</a></li>
                      <li><a href="support.php">Support</a></li>
                       <li><a href="aboutus.php">About Us</a></li>
                </ul>
                
            </div>
        
        <div class="row contentbody wrapper">
           <div class="col-xs-2 sidebar block">
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
                <div class="row breaks">
                    <br /><br /><br />
                </div>
                  
                <div class="row sidenav">
                    <a href="linegraph.php">
                    <div class="col-xs-12">
                        Line graph
                    </div>
                    </a>
                </div>
                <div class="row sidenav activesidenav">
                    <a href="bargraph.php">
                        <div class="col-xs-12">
                        Bar graph
                        </div>
                    </a>
                </div>
            </div>
            <div class="background bg1"></div>
            <div class="col-xs-10 content block">
               
                <div class="greeting" class="typeface-js" style="font-family:Optimer;font-style:italic;">
                    <?php 
                      echo $_SESSION['username'];
                    ?>
                </div>
                
                 <div class="col-md-6 col-xs-12 showmonwords">
                 <p><strong>Keywords currently set to monitor.</strong><br />(Click on keywords to generate its Bar Graph)</p>
                    <ul class="monwordstable" id="bargraph_monwordstable">
                    </ul>                 
                 
             </div>
                     <p class="graph_showerror"></p>
               
            </div>
            
            <div class="background bg2"></div>
        </div>
        
         <div class="row" id="bargraphmainDiv">
                <div class="col-xs-12" id="barlegendandimageDiv"></div>
                <div class="col-xs-12" id="bargraphDiv"></div>
          </div>
        
        <div class="row footer">
            <div class="col-xs-12">
                &copy;&nbsp;Copyright <span class="year"></span>
            </div>
        </div>
        
    </div>
    <form id="bargraph_hiddenform">
    <input type="hidden"  name="username"
     value="<?php echo $_SESSION['username']; ?>" />
     
    <input type="hidden" name="enpassword" 
    value="<?php echo $_SESSION['enpassword']; ?>" />
    </form>
</body>
</html>