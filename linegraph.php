<!Doctype html>


<html>
<head>
     <title>Product Monitoring Service</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="styles/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="styles/sticky.css" />
     <link rel="stylesheet" type="text/css" href="styles/forms.css" />
     <link rel="stylesheet" type="text/css" href="styles/main.css" />
     <link rel="stylesheet" type="text/css" href="styles/loggedinuser_page.css" />
     <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
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
                      <li class="myactive"><a href="#">Home</a></li>
                      <li><a href="login_page.php">Monitor</a></li>
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
                <div class="row loginnav">
                   <a href="login_page.php">
                       <div class="col-xs-12">
                          Login
                       </div>
                   </a>
                </div>
            </div>
            <div class="col-xs-10 content">
                <div class="input-group search" >
                  <input type="text" class="form-control" id="indexinput" placeholder="Enter a word to know its sentiment"/> 
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="indexgo">Go!</button>
                  </span>
                </div><!-- /input-group -->
                <p id="indexpage_showinfo">
                </p>
                
            </div>
        </div>
        
        
        <div class="row footer">
            <div class="col-xs-12">
                &copy;&nbsp;Copyright <span class="year"></span>
            </div>
        </div>
        
    </div>
</body>
</html>