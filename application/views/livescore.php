<html>
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>css/tabel.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		#wrapper{padding: 30px 0 40 250px;
		padding-right:270px;}
		#text{font-weight:bold; color:#FFFFFF; font-family:"Maiandra GD";font-size:60px;}
	</style>
	<head>
	</head>
	<body>
		<div class="body">
			<div id="wrapper">
				<div id="text">Live Score</div>
				<p style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color:#FFFFFF;">Piala Dunia 2014</p>
				<hr>
				<table>
				<tr>
				<th width='400px'>Date</th>
				<th width='400px'>Country</th>
				<th width='100px'>Score</th>
				<th width='20px'>Vs</th>
				<th width='100px'>Score</th>
				<th width='400px'>Country</th>				
				</tr>
				<?php $i=0; foreach($score as $row){ $i++; ?>
				<tr>
				<td><?php echo $row->tanggal; ?></td>
				<td><?php echo $row->negara1; ?></td>
				<td><?php echo $row->gol1; ?></td>
				<td> - </td>
				<td><?php echo $row->gol2; ?></td>
				<td><?php echo $row->negara2; ?></td>
				<?php
				if($_SESSION['userakses']=='Admin'){
				?>
				<td><a href="<?php echo site_url('controller/updatescore?s_id='.$row->s_id)?>">Edit</a> || 
					<a href="<?php echo site_url('controller/deletescore?s_id='.$row->s_id)?>">Delete</a></td>				
				<?php } ?>
				</tr>
				<?php } ?>
				</table>
				<?php
				if($_SESSION['userakses']=='Admin'){
				?>
				<a href="<?php echo site_url("controller/addscore"); ?>"><input type="submit" value="Update" name="add" ></a>
				<?php } ?>
			</div>
		</div>
	</body>
</html>