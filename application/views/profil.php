<html>
<head>
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		#wrapper{padding: 30px 0 40 250px;
		padding-right:270px;}
		#text{font-weight:bold; color:#FFFFFF; font-family:"Maiandra GD";font-size:60px; border-bottom-style:groove;}
		table {
	font-family:Arial, Helvetica, sans-serif;
	color:#FFFFFF;
	font-size:16px;

	margin:20px;
	

}
#foto{
	margin-top			:22px;
	width				:80px;
	height				:90px;
	margin-left			:80px;
	border				:1px solid #000000;
}

#form_foto{
	width				:170px;
	height				:70px;
	float				:left;
	text-align			:center;
}
	</style>
</head>
<body>
		<div class="body">
			<div id="wrapper">
				<div id="text">Profil</div>
				<div id="form_foto" align="center">
				<div id="foto" align="center">

				<?php
				 if (is_array(@$profil)){
					foreach ($profil as $p):
				?>
				<br>
				<?php if(is_array(@$image)) :
						foreach($image as $row) : 
						?>
					<img src="<?php echo base_url().'./upload/'.$row['name']; ?>" width="100px" height="100px" />
					<?php 
						endforeach; 
						endif; 
					?>
					</div>
					</div>
                	<table align='center' cellpadding='1px'>
					<tr>
					<td> Username</td>
					<td>:</td>
					<td><?php echo $p->username; ?></td>
					</tr>
					<tr>
					<td> Email</td>
					<td>:</td>
					<td><?php echo $p->email; ?></td>
					</tr>
					<td> Status</td>
					<td>:</td>
					<td><?php echo $p->userakses; ?></td>
					</tr>
                    </table>
					<br>
					<div style="margin-left:80px">
				<?php echo form_open_multipart('controller/do_upload'); ?>
					<input type="file" name="file_upload" /><br>
					<input type="submit" name="upload" value="upload" />
					<?php echo form_close(); ?></td>
					<form method="post" action="">
					<a href="<?php echo site_url('controller/updateprofil?id='.$p->id)?>">Edit Profil</a>
				
				
					<?php
					endforeach;
				}
				?>
				
				</form>
			</div>
			
		</div>
	</body>
</html>