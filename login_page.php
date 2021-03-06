<!--authored by Hem sharma Acharya[hemtros@gmail.com] -->

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
     <script type="text/javascript" src="scripts/typeface-0.15.js"></script>
     <script type="text/javascript" src="scripts/aleo_bold.typeface.js"></script>
    <script type="text/javascript" src="scripts/optimer_bold_italic.typeface.js"></script>
     <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="scripts/bootstrap.js"></script>
     <script type="text/javascript" src="scripts/myscript.js"></script>
</head>

<body>
    <div class="container">
        
        <div class="row banner">
            <div class="col-md-2">
                <a href="index.php"><img src="images/Monitoring-icon128x128.png" /></a>
            </div> 
            <div class="col-md-10">
                <h1 id="websiteheading" class="typeface-js" style="font-family:Aleo">Product Monitoring Service</h1>
                <h2 id="tagline" class="typeface-js" style="font-family:Optimer;">(Mining Social media to monitor your product)</h2>
            </div>
        </div>
        
       
            <div class=" row navibar">
                 <ul class="nav nav-pills">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="loggedinuser_monitor_page.php">Monitor</a></li>
                      <li><a href="support.php">Support</a></li>
                       <li><a href="aboutus.php">About Us</a></li>
                      
                </ul>
            </div>
        
        <div class="row contentbody wrapper">
            <div class="col-xs-2 sidebar block">
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
                <div class="row loginnav activesidenav">
                   <a href="login_page.php">
                       <div class="col-xs-12">
                          Login
                       </div>
                   </a>
                </div>
		     
		
            </div>
            <div class="background bg1"></div>
            <div class="col-xs-10 content block">
                <form class="login" action="checklogin.php" method="post">
			    <h1>Login, Please? <img src="images/lock_fill.svg" class="secure" /></h1>
			    <label for="username">Username</label>
				<input type="text" name="username" id="username" placeholder="Username" required="">
			    
			    <label for="password">Password</label>
			    <input type="password" name="password" id="password" placeholder="Password" required="">
                  
<!--
                  <ul id="remcheckul">
                      <li id="checkboxli"><input type="checkbox" name="rememberme" id="rememberme" /></li>
                      <li id="remchecklabel"><label for="rememberme" id="remlabel">Remember Me</label></li>
                  </ul>
-->
              
			    <button type="submit" alt="Log In" id="button">Log Me In</button>	
			</form><!-- .login -->
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