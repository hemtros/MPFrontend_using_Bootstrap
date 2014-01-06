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
     <script type="text/javascript" src="scripts/finduniqes.js"></script>
     <script type="text/javascript" src="scripts/addkeyword.js"></script>
     <script type="text/javascript" src="scripts/startmonitoring.js"></script>

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
                      <li><a href="loggedinuser_page.php">Home</a></li>
                      <li class="myactive"><a href="#">Monitor</a></li>
                      <li><a href="#">Support</a></li>
                       <li><a href="#">About Us</a></li>
                </ul>
                
            </div>
        
        <div class="row contentbody wrapper">
           <div class="col-xs-2 block sidebar"><!--sidebar -->
                  <div class="row breaks">
                    <br /><br /><br />
                </div>
                <div class="row sidenav">
                    <a href="logout.php">
                       <div class="col-xs-12">
                          logout
                       </div>
                    </a>
                </div>
                <div class="row breaks">
                    <br /><br /><br />
                </div>
                <div class="row sidenav">
                    <a href="linegraph.php">
                        <div class="col-xs-12">
                            Sentiments Graph
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
                       
                <div class="addkeyworddiv">
                       &nbsp;&nbsp; separate more than one keyword with comma(,)
                       <br /> <br />
                       <form class="addkeywordform">
                      <div class="input-group addkeyword" >
                      <input type="text" name="new_keyword" id="new_keyword" class="form-control" placeholder="Enter keywords to monitor" required="" />
                      <input type="hidden" id="username" name="username" value="<?php echo $_SESSION['username'] ?>" /> 
                      <input type="hidden"id="enpassword" name="enpassword" value="<?php echo $_SESSION['enpassword'] ?>" />
                     <span class="input-group-btn">
                    <button class="btn btn-default addkeywordbtn" type="submit">Submit</button>
                     </span>
                     </div><!-- /input-group -->
                       </form>
                       <br /><br />
                  <p id="showinfo"></p>
                  
                </div>  <!--end of addkeyworddiv -->
                
                <div id="startmonitoring">
                   <p>Click this button to start monitoring the keywords you added</p>
                   <button type="button" id="startmonitoringbtn" class="btn btn-default" >Start/Update Monitoring</button>
                   <br /><br />
                   <p id="showinfo1"></p>
                </div>
                                  
                
            </div><!--end of main content area -->
              <div class="background bg2"></div>
        </div><!--end of contentbody -->
        
        <div class="row footer">
            <div class="col-xs-12">
                &copy;&nbsp;Copyright <span class="year"></span>
            </div>
        </div>
        
    </div>
     <form id="addkeyword_hiddenform">
    <input type="hidden" id="liupusername" name="username"
     value="<?php echo $_SESSION['username']; ?>" />
     
    <input type="hidden" id="liuppassword" name="enpassword" 
    value="<?php echo $_SESSION['enpassword']; ?>" />
    </form>
</body>
</html>