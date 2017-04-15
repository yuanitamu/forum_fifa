<html>
<head>
<title>Green Field World Cup 2014 Forum</title>
<link href="<?php echo base_url(); ?>css/halhome.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>css/ftheme.css" rel="stylesheet" type="text/css" />
	<style type="text/css" media="screen">
		.text{
			text-align:center;
			font-family: Comic Strip;
			font-size:50px;
		}
		.login{
			width:inherit;
			height: 844px;
			background: url('<?php echo base_url();?>login.jpg') center;
		}
	</style>
</head>
<body>
	<div class="login">
	<div id="container">
	<br>
		<?php
			if($_SESSION['userakses']=='Member'){
				
			}
			else
		?>
		<p align="right" style="color:#FFFFFF">Welcome, <b><?php echo $_SESSION['username']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp; 
		</b></p>
	</div>
	<b>
	<div class="text">Green Field World Cup 2014 Forum <img src="<?php echo base_url();?>img/logo.png" class="imgmenu"/>
	</div>
	<div id="nav">
		<ul>
 			<li><a href="<?php echo base_url(); ?>index.php/controller/home"><img src="<?php echo base_url();?>img/HOME.gif" height="22px" width="80px"/></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/controller/forum"><img src="<?php echo base_url();?>img/POST.gif" height="22px" width="80px"/></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/controller/klasemen"><img src="<?php echo base_url();?>img/KLASEMEN.gif" height="22px" width="80px"/></a>
            <li><a href="<?php echo base_url(); ?>index.php/controller/score"><img src="<?php echo base_url();?>img/LIVE.gif" height="22px" width="80px"/></a>
			<li><a href="<?php echo base_url(); ?>index.php/controller/message"><img src="<?php echo base_url();?>img/MESSAGE.gif" height="22px" width="80px"/></a>
 				<ul>
 					<li><a href="<?php echo base_url(); ?>index.php/controller/message">Create Message</a></li>
 	       			<li><a href="<?php echo base_url(); ?>index.php/controller/inbox">Inbox</a></li>
 	       			<li><a href="<?php echo base_url(); ?>index.php/controller/outbox">Outbox</a></li>
 				</ul>
			</li>
			 <?php
				if($_SESSION['userakses']=='Admin'){
			?>
			<li><a href="#"><img src="<?php echo base_url();?>img/SETTING.gif" height="22px" width="80px"/></a>
 		   		<ul>
 					<li><a href="<?php echo base_url(); ?>index.php/controller/member">Member</a></li>
 					<li><a href="<?php echo base_url(); ?>index.php/controller/badword">Badwords</a></li>
 				</ul>
			</li>
            <?php
				}
			?>
			<li><a href="<?php echo base_url(); ?>index.php/controller/profil"><img src="<?php echo base_url();?>img/PROFIL.gif" height="22px" width="80px"/></a></li>
			<li><a href="<?php echo base_url(); ?>index.php/controller/logout"><img src="<?php echo base_url();?>img/logout.gif" height="22.5px" width="80px"/></a></li>		  			
 		</ul>
	</div>
	</b>
	
	
</body>
</html>