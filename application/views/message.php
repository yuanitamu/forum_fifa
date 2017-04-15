<html>
	<head>
		<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/forum.css" />
	</head>
	<body>
		<div class="body"><br>
		<div class="message1">
			<table>
			<tr>
			<td><img src="<?php echo base_url(); ?>img/message.png" alt="" title="Message" width="90px" height="70px"/></td>
			<td><div class="msg">Message</div></td>
			</tr>
			</table>
			<br>
		<a href="<?php echo base_url(); ?>index.php/controller/inbox">&nbsp;<img src="<?php echo base_url();?>img/inbox.png" alt="" title="Inbox" width="70px" height="50px"/></a></td>
		<a href="<?php echo base_url(); ?>index.php/controller/outbox">&nbsp;&nbsp;<img src="<?php echo base_url();?>img/outbox.png" alt="" title="Outbox" width="70px" height="50px"/></a></td>
		</div>
		<br>
		<div id="content">
			<form method="POST" action="<?php echo "".base_url()."index.php/controller/proses_message"?>">
				<div id="postjudul"><center><input type="text" id="email1" name="email1" required placeholder="To"></center></div>
				<div id="postjudul"><center><input type="text" id="subject" name="subject" required placeholder="Subject"></center></div>
				<div id="posttextar"><center>Message:<br><br><textarea id="message" name="message"></textarea></center>
				<br><center><input type="submit" id="submit" value="Send"></center></div>
			</form>	
		</div>
	</body>
</html>