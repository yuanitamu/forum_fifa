<html>
	<head>
		<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>css/forum.css" rel="stylesheet" type="text/css" />
		<title>Green Field World Cup 2014 Forum</title>
	</head>
	<body>
	<div class="body">
		
		<div id="content">
		<div class="msg1">Create Post</div><br>
				<form method="POST" action="<?php echo "".base_url()."index.php/controller/proses_post"?>">
					<div id="postjudul"><center><input type="text" id="judul" name="judul" required="required" placeholder="Judul"></center></div>
					<div id="posttextar"><center>Text Area:<br><br><textarea id="content" name="content"></textarea></center>
					<br><center><input type="submit" id="submit" value="Submit"></center></div>
				</form>	
		</div>
	</div>
	</body>
</html>