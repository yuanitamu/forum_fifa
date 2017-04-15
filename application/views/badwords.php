<html>
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>css/tabel.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		#wrapper{padding: 30px 0 40 250px;
		padding-right:270px;}
		#text{font-weight:bold; color:#FFFFFF; font-family:"Maiandra GD";font-size:50px;}
	</style>
	<head>
	</head>
	<body>
		<div class="body">
			<div id="wrapper">
				<div id="text">Badwords</div>
				<hr>
				<table>
				<tr>
				<th width='600px'>Word</th>
				<th width='600px'>Sensor</th>
				<th width='600px'>Actions</th>				
				</tr>
				<?php $i=0; foreach($word as $row){ $i++; ?>
				<tr>
				<td><?php echo $row->bad; ?></td>
				<td><?php echo $row->sensor; ?></td>
				<td><a href="<?php echo site_url('controller/updateword?wordid='.$row->wordid)?>">Edit</a> || 
					<a href="<?php echo site_url('controller/deleteword?wordid='.$row->wordid)?>">Delete</a></td>				
				</tr>
				<?php } ?>
				</table>
				<a href="<?php echo site_url("controller/addword"); ?>"><input type="submit" value="Update" name="add" ></a>
			</div>
		</div>
	</body>
</html>