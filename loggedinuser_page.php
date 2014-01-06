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
     <link rel="stylesheet" type="text/css" href="styles/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="styles/forms.css" />
     <link rel="stylesheet" type="text/css" href="styles/main.css" />
     <link rel="stylesheet" type="text/css" href="styles/loggedinuser_page.css" />
     <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="scripts/bootstrap.js"></script>
     <script type="text/javascript" src="scripts/myscript.js"></script>
     <script type="text/javascript" src="scripts/getmonitoredkeywords.js"></script>
     <script type="text/javascript" src="scripts/retrievekeywordinfo.js"></script>
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
        
       
            <div class="row navibar">
              
                 <ul class="nav nav-pills" id="navigbar">
                      <li class="myactive"><a href="#">Home</a></li>
                      <li><a href="loggedinuser_monitor_page.php">Monitor</a></li>
                      <li><a href="#">Support</a></li>
                      <li><a href="#">About Us</a></li>
                </ul>
                
            </div>
        
        <div class="row contentbody wrapper">
           <div class="col-xs-2 sidebar block"><!--sidebar -->
                  <div class="row breaks">
                    <br /><br />
                </div>
                <div class="row sidenav">
                    <a href="logout.php">
                       <div class="col-xs-12">
                          logout
                       </div>
                    </a>
                </div>
            </div>
            <div class="background bg1"></div>
            <div class="col-xs-10 content block">  <!--main content area -->
                <div id="greeting">Hello
                <?php 
                  echo $_SESSION['username'];
                ?>
                </div>
                       
             <!--code to welcome informations for user -->
             <div class="col-md-6 col-xs-12 showmonwords_home">
                 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keywords currently set to monitor</p>
                    <ul class="monwordstable" id="monwordstablenoclick">
                    </ul>                 
             </div>
              
              <div class="input-group liusearch" >
                  <input type="text" class="form-control" id="liuinput" placeholder="Enter a word to know its sentiment" /> 
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="liugo">Go!</button>
                  </span>
                </div><!-- /input-group -->
                <p id="liupage_showinfo">
                </p>
            
            </div><!--end of main content area -->
             <div class="background bg2"></div> 
        </div><!--end of contentbody -->
        
        <div class="row footer">
            <div class="col-xs-12">
                &copy;&nbsp;Copyright <span class="year"></span>
            </div>
        </div>
        
    </div>
    
    <form id="loggedinuser_hiddenform">
     <input type="hidden" id="liupusername" name="username" value="<?php echo $_SESSION['username']; ?>" />
     <input type="hidden" id="liuppassword" name="enpassword" value="<?php echo $_SESSION['enpassword']; ?>" />
    </form>
    
</body>
</html>