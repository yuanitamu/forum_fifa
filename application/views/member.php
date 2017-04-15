<html>
<head>
	<link href="<?php echo base_url(); ?>css/forum.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		#wrapper{padding: 30px 0 40 250px;
		padding-right:270px;}
		#text{font-weight:bold; color:#FFFFFF; font-family:"Maiandra GD";font-size:30px; border-bottom-style:groove;}
	</style>
</head>
<body>
	<div class="body">
        <div id="wrapper">
			<div id="text">List Member</div>
		</div>
        <div id="baru"><a href="<?php echo base_url();?>index.php/controller/signup"><center>Klik di sini untuk membuat member baru</center></a></div>
        	<?php
				if (is_array($member)){
					foreach ($member as $m):
			?>
        <div class="posting1" style="background:#FFFFFF"><strong><?php echo $m->username; ?> </strong>( <?php echo $m->email; ?> )
            <div id="postinfo"><?php echo'<a href='.base_url().'index.php/controller/deletemember/'.$m->id.'>Delete Member</a>'?>
			</div>
		</div>
        <?php
			endforeach;
		}
		?>
		<br><br>
    </div>
</body>
</html>