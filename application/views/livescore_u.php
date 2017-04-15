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
				<form name="editscore" method="post" action="<?php echo site_url('controller/proses_updatescore') ?>" enctype="application/x-www-form-urlencoded">
					<fieldset>
					<legend>Edit Data</legend>
					<input type="hidden" name="s_id" value="<?php echo $score->s_id ?>" />
					Tanggal :<br>
					<input type="text" name="tanggal" value="<?php echo $score->tanggal ?>" maxlength="10" /><hr/>
					Negara 1 :<br>
					<input type="text" name="negara1" value="<?php echo $score->negara1 ?>" maxlength="100" /><hr/>
					Score Negara 1 : <br>
					<input type="text" name="gol1" value="<?php echo $score->gol1 ?>" maxlength="12" /><hr/>
					Negara 2 :<br>
					<input type="text" name="negara2" value="<?php echo $score->negara2 ?>" maxlength="100" /><hr>
					Score Negara 2 : <br>
					<input type="text" name="gol2" value="<?php echo $score->gol2 ?>" maxlength="12" /><hr/>
					<input type="submit" value="Save" />
					<input type="button" name="Batal" onClick="javascript:document.location.href='<?php echo site_url(); ?>'" value="Cancel" />
					</fieldset>
					</form>
			</div>
		</div>
	</body>
</html>