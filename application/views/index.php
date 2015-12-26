<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Codeigniter+DropzoneJs</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/dropzone/dropzone.min.css">
</head>
<body>
	<div id="content">
		<?php echo form_open("images/upload", array("class" => "dropzone")) ?>

		<?php echo form_close(); ?>
	</div>

	<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>vendor/dropzone/dropzone.min.js"></script>
</body>
</html>