<!Doctype html>


<html>
<head>
     <title>Product Monitoring Service</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="styles/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="styles/forms.css" />
     <link rel="stylesheet" type="text/css" href="styles/main.css" />
     <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="scripts/bootstrap.js"></script>
     <script type="text/javascript" src="scripts/myscript.js"></script>
</head>

<body>
    <div class="container">
        
        <div class="row banner">
            <div class="col-md-2">
                <img src="images/Monitoring-icon128x128.png" />
            </div>
            <div class="col-md-10">
                <h1 id="websiteheading">Product Monitoring Service</h1>
                <h2 id="tagline">(Mining Social media to monitor your product)</h2>
            </div>
        </div>
        
       
            <div class=" row navibar">
                 <ul class="nav nav-pills">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="#">Monitor</a></li>
                      <li><a href="#">Support</a></li>
                       <li><a href="#">About Us</a></li>
                      
                </ul>
            </div>
        
        <div class="row contentbody">
            <div class="col-xs-2 sidebar">
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
            
            <div class="col-xs-10 content">
                <form class="login" action="checklogin.php" method="post">
			    <h1>Login, Please? <img src="images/lock_fill.svg" class="secure" /></h1>
			    <label for="username">Username</label>
				<input type="text" name="username" id="username" placeholder="Username" required="">
			    
			    <label for="password">Password</label>
			    <input type="password" name="password" id="password" placeholder="Password" required="">
			    			
			    <button type="submit" alt="Log In" id="button">Log Me In</button>	
			</form><!-- .login -->
            </div>
        </div>
        
        <div class="row footer">
            <div class="col-xs-12">
                &copy;&nbsp;Copyright 2013
            </div>
        </div>
        
    </div>
</body>
</html>