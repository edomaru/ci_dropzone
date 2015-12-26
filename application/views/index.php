<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Codeigniter+DropzoneJs</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/dropzone/dropzone.min.css">
</head>
<body>
	<div id="content">
		<div id="my-dropzone" class="dropzone"></div>
	</div>

	<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>vendor/dropzone/dropzone.min.js"></script>
	<script>
		Dropzone.autoDiscover = false;
		var myDropzone = new Dropzone("#my-dropzone", {
			url: "<?php echo site_url("images/upload") ?>",
			acceptedFiles: "image/*"
		});
	</script>
</body>
</html>