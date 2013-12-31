<?php


$host="localhost";
$mysqlusername="root";
$mysqlpassword="";
$db_name="user_account";
$tbl_name="account";

//connect to server and select database

$con=mysql_connect("$host","$mysqlusername","$mysqlpassword") or die("cannot connect");
mysql_select_db("$db_name",$con) or die("cannot select DB");

//username and password sent from form

$username=$_POST['username'];
$password=$_POST['password'];

//To protect MySQL injection
$username=stripslashes($username);
$password=stripslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$enpassword=md5($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and
password='$enpassword'";

$result=mysql_query($sql);

//mysql_num_rows is fun for counting table row
$count=mysql_num_rows($result);

//if result matched, table row must be 1
if($count==1){
	//Register $myusername and $mypassword and redirect to file
	//login_success.php
	session_start();
	$_SESSION['username']=$username;
	$_SESSION['enpassword']=$enpassword;
	header("location:loggedinuser_page.php");
	mysql_close($con);
}

else{
	//echo "Wrong Username or Password";
	mysql_close($con);
	header("location:loginfailed_page.php");
}


?>