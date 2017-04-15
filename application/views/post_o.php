<html>
<head>
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>css/forum.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
	<div class="body"><br>
		<div id="baru"><a href="<?php echo base_url(); ?>index.php/controller/newpost"><center>Klik di sini untuk membuat thread baru</center></a></div>
		<div id="content">
            <?php
				if (is_array($post)){
					foreach ($post as $data):
			?>
            		<div class="posting" style="background:#FFFFFF">
            			<div id="postitle"><a href=""<?php echo base_url(); ?>index.php/controller/post_o"><?php echo $data->title; ?></a></div>
						<?php echo $data->content; ?>
                        <div id="postinfo">Posted by <strong><?php echo $data->username; ?></strong><br><?php echo $data->tanggal; ?></div>
                    </div>
            <?php
					endforeach;			
			}
			?>            
		</div>
		</div>
	</body>
</html>