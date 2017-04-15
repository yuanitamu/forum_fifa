<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Green Field World Cup 2014 Forum : Sign Up Form</title>

<!--STYLESHEETS-->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/hallogin.css" media="screen" />
<style type="text/css">
			.signup{
				width:inherit;
		height : 744px;
		background: url('<?php echo base_url();?>login.jpg') no-repeat center ;position:relative;
			}
			
		</style>
	</head>
	
<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
	$(".email").focus(function() {
		$(".email-icon").css("left","-48px");
	});
	$(".email").blur(function() {
		$(".email-icon").css("left","0px");
	});
});
</script>
</head>
<body>
<div class="signup">

<!--WRAPPER-->
<div id="wrapper">

<!--LOGIN FORM-->
<form class="login-form" action="<?php echo "".base_url()."index.php/controller/proses_signup"?>" method="post">

<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>Sign Up</h1><!--END TITLE-->
	<!--DESCRIPTION--><span>Fill out the form below to sign up to the forum, login and make the post on your own.</span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="username" type="text" class="input username" required autofocus placeholder="Username"/><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" required autofocus placeholder="Password" style="margin-bottom:25px;"/><!--END PASSWORD-->
	<!--EMAIL--><input name="email" type="email" class="input email" required autofocus placeholder="Email"/><!--END EMAIL-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Sign Up" class="button" /><!--END LOGIN BUTTON-->
    <!--REGISTER BUTTON--></form>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>Sudahkah anda menjadi Member?</p>
	<form action="<?php echo base_url();?>index.php/controller/index" method="post">
	<input type="submit" name="submit" value="Login Here" class="button"/>
	<!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->
	
<!--END LOGIN FORM-->
</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>