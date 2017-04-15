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
				<form name="editprofil" method="post" action="<?php echo site_url('controller/proses_updateprofil') ?>" enctype="application/x-www-form-urlencoded">
					<fieldset>
					<legend>Edit Profil</legend>
					<input type="hidden" name="id" value="<?php echo $profil->id ?>" />
					Username :<br>
					<input type="text" name="username" value="<?php echo $profil->username ?>" maxlength="50" /><hr/>
					Email :<br>
					<input type="text" name="email" value="<?php echo $profil->email ?>" maxlength="50" /><hr/>
					<input type="submit" value="Save" />
					<input type="button" name="Batal" onClick="javascript:document.location.href='<?php echo site_url('controller/profil'); ?>'" value="Cancel" />
					</fieldset>
					</form>
			</div>
		</div>
	</body>
</html>