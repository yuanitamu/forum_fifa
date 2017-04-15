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
			<td><img src="<?php echo base_url(); ?>img/outbox.png" alt="" title="Outbox" width="90px" height="70px"/></td>
			<td><div class="msg">Outbox</div></td>
			</tr>
			</table>
			<br>
		<a href="<?php echo base_url(); ?>index.php/controller/message">&nbsp;<img src="<?php echo base_url();?>img/message.png" alt="" title="Message" width="70px" height="50px"/></a></td>
		<a href="<?php echo base_url(); ?>index.php/controller/inbox">&nbsp;&nbsp;<img src="<?php echo base_url();?>img/inbox.png" alt="" title="Inbox" width="70px" height="50px"/></a></td>
		</div>
		<br>
        <div id="content">
        <?php
			if (is_array($message)){
				foreach ($message as $m):
		?>
		<div class="posting" style="background:#FFFFFF">
			<div id="postitle"><?php echo $m->subject; ?><br><span>Message: <?php echo $m->message; ?></span></div>
            <div id="postinfo">Send to <strong><?php echo $m->email1; ?></strong><br><?php echo $m->tanggal; ?></div>
        </div>   
		<?php
				endforeach;
			}
		?>
        </div>
	</body>
</html>