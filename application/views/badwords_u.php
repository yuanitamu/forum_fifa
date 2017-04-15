<html>
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>css/tabel.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		#wrapper{padding: 30px 0 40 250px;
		padding-right:270px;}
		#text{font-weight:bold; color:#FFFFFF; font-family:"Maiandra GD";font-size:18px;}
	</style>
	<head>
	</head>
	<body>
		<div class="body">
			<div id="wrapper">
				<div id="text">
				<form name="editword" method="post" action="<?php echo site_url('controller/proses_updateword') ?>" enctype="application/x-www-form-urlencoded">
					<fieldset>
					<legend>Edit Word</legend>
					<input type="hidden" name="wordid" value="<?php echo $word->wordid ?>" />
					Word :<br>
					<input type="text" name="word" value="<?php echo $word->bad ?>" maxlength="100" /><hr/>
					Sensor :<br>
					<input type="text" name="sensor" value="<?php echo $word->sensor ?>" maxlength="100" /><hr/>
					<input type="submit" value="Save" />
					<input type="button" name="Batal" onClick="javascript:document.location.href='<?php echo base_url(); ?>index.php/controller/badword'" value="Cancel" />
					</fieldset>
					</form>
			</div>
		</div>
	</body>
</html>