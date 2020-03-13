<?php
session_start();
ob_start();

/*if(isset($_SESSION['ad_id']))
{
	header("location:main_news.php");
}*/
?> 
<!doctype html>
<html lang="en-US">
<head>
   <meta charset="utf-8">
    <title> Login : </title>
   

<style>

@import url(http://fonts.googleapis.com/css?family=Bree+Serif);

/*******************
SELECTION STYLING
*******************/

::selection {
 color: #fff;
 background: #f676b2; /* Safari */
}
::-moz-selection {
 color: #fff;
 background: #f676b2; /* Firefox */
}

/*******************
BODY STYLING
*******************/
body {
 background:url(images/bg3.jpg);
 font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
 font-weight:300;
 text-align: left;
 text-decoration: none;
 height: 500px;
}
* {
 margin: 0;
 padding: 0;
 border: none;
 outline: none;
}


#wrapper {
 /* Center wrapper perfectly */
 width: 300px;
 height: 400px;
 margin: 70px auto;
}


.gradient {
 /* Center Positioning */
 width: 600px;
 height: 600px;
 position: fixed;
 left: 50%;
 top: 50%;
 margin-left: -300px;
 margin-top: -300px;
 z-index: -2;
 
 /* Fallback */ 
/* background-image: url(images/gradient copy.png);*/ 
 background-repeat: no-repeat; 
 
 /* CSS3 Gradient */
 /*background-image: -webkit-gradient(radial, 0% 0%, 0% 100%, from(rgba(213,246,255,1)), to(rgba(213,246,255,0)));
 background-image: -webkit-radial-gradient(50% 50%, 40% 40%, rgba(213,246,255,1), rgba(213,246,255,0));
 background-image: -moz-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));
 background-image: -ms-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));
 background-image: -o-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));*/
}

/*******************
LOGIN FORM
*******************/

.login-form {
 width: 300px;
 margin: 0 auto;
 position: relative;
 
 background: #f3f3f3;
 border: 1px solid #fff;
 border-radius: 5px;
 
 box-shadow: 0 1px 3px rgba(0,0,0,0.5);
 -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
 -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
}

/*******************
HEADER
*******************/

.login-form .header {
 padding: 40px 30px 30px 30px;
}

.login-form .header h1 {
 font-family: 'Bree Serif', serif;
 font-weight: 300;
 font-size: 28px;
 line-height:34px;
 color: #414848;
 text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
 margin-bottom: 10px;
}

.login-form .header span {
 font-size: 11px;
 line-height: 16px;
 color: #678889;
 text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
}

/*******************
CONTENT
*******************/

.login-form .content {
 padding: 0 30px 25px 30px;
}

/* Input field */
.login-form .content .input {
 width: 188px;
 padding: 15px 25px;
 
 font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
 font-weight: 400;
 font-size: 14px;
 color: #9d9e9e;
 text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
 
 background: #fff;
 border: 1px solid #fff;
 border-radius: 5px;
 
 box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
 -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
 -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
}

/* Second input field */
.login-form .content .password, .login-form .content .pass-icon {
 margin-top: 25px;
}

.login-form .content .input:hover {
 background: #dfe9ec;
 color: #414848;
}

.login-form .content .input:focus {
 background: #dfe9ec;
 color: #414848;
 
 box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
 -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
 -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
}

.user-icon, .pass-icon {
 width: 46px;
 height: 47px;
 display: block;
 position: absolute;
 left: 0px;
 padding-right: 2px;
 z-index: -1;
 
 -moz-border-radius-topleft: 5px;
 -moz-border-radius-bottomleft: 5px;
 -webkit-border-top-left-radius: 5px;
 -webkit-border-bottom-left-radius: 5px;
}

.user-icon {
 top:153px; /* Positioning fix for slide-in, got lazy to think up of simpler method. */
 background: rgba(65,72,72,0.75) url(images/user-icon.png) no-repeat center; 
}

.pass-icon {
 top:201px;
 background: rgba(65,72,72,0.75) url(images/pass-icon.png) no-repeat center;
}

.content input:focus + div{
 left: -46px;
}

/* Animation */
.input, .user-icon, .pass-icon, .button, .register {
 transition: all 0.5s ease;
 -moz-transition: all 0.5s ease;
 -webkit-transition: all 0.5s ease;
 -o-transition: all 0.5s ease;
 -ms-transition: all 0.5s ease;
}

/*******************
FOOTER
*******************/

.login-form .footer {
 padding: 25px 30px 40px 30px;
 overflow: auto;
 
 background:#CCC;
 border-top: 1px solid #fff;
 
 box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
 -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
 -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
}

/* Login button */
.login-form .footer .button {
 float:right;
 padding: 11px 25px;
 
 font-family: 'Bree Serif', serif;
 font-weight: 300;
 font-size: 18px;
 color: #fff;
 text-shadow: 0px 1px 0 rgba(0,0,0,0.25);
 
 background: #56c2e1;
 border: 1px solid #46b3d3;
 border-radius: 5px;
 cursor: pointer;
 
 box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
 -moz-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
 -webkit-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
}

.login-form .footer .button:hover {
 background: #3f9db8;
 border: 1px solid rgba(256,256,256,0.75);
 
 box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
 -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
 -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
}

.login-form .footer .button:focus {
 position: relative;
 bottom: -1px;
 
 background: #56c2e1;
 
 box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
 -moz-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
 -webkit-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
}

</style>
</head>

<?php
include("include/configure.php");
				
if(isset($_REQUEST['btn_login']))
{
	$username1=mysql_real_escape_string($_REQUEST['username1']);
	$password1=mysql_real_escape_string($_REQUEST['password1']);
	
	 $qry="select * from admin where a_user='".$username1."' and a_pass='".$password1."'";
		 $result=mysql_query($qry)  or die(mysql_error());
		 if($num = mysql_num_rows($result))
		 {
			while($row=mysql_fetch_array($result))
			{
				
				$_SESSION['ad_id']=$row[0];
				echo "<script> self.location ='view_customer.php' </script>"; 
			}
		 }
		 
		  else
		 {
			 echo"<script type='text/javascript'>alert('wrong password');</script>";
		 }
}
?>
<body>


<div id="wrapper">

 <form  class="login-form" action="" method="post">
 
 <div class="box-content row">
	
		  <h1>Login Form</h1>
		  <span>Fill out the form below to login to my super awesome imaginary control panel.</span>
	
  <div class="content">
  <input name="username1" type="text" class="input username" placeholder="Username" />
  <div class="user-icon"></div>
  <input name="password1" type="password" class="input password" placeholder="Password" />
  <div class="pass-icon"></div>  
  </div>

  <div class="footer">
  <input type="submit" name="btn_login" value="Login" class="button" />
  
  </div>
 
 </form>

</div>
<div class="gradient"></div>

</body>

</html>