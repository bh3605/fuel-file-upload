<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello, <?php echo 'Atitle'; ?></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/ui-lightness/jquery-ui.css" type="text/css" media="all" />
	<script src="/assets/js/datatables.js"></script>
	<link href="/assets/css/datatables.css" rel="stylesheet">
	<style>
		body { margin: 40px; }
	</style>
	<script>
		$(document).ready(function(){
			$('.dropdown-toggle').dropdown();
			$('.alert').alert();
		});
	</script>
	<?php if(isset($refresh_interval)): ?>
		<meta http-equiv="refresh" content="<?php echo $refresh_interval; ?>;/index/files/create" />
	<?php endif; ?>
</head>
<body>
	<div class="container">
		<?php if(isset($alerts)): ?>
			<div id='flash-messages'>
				<?php foreach($alerts as $alert): ?>
					<div class='alert alert-<?php echo $alert[0]; ?>'>
						<a class='close' href='#' data-dismiss='alert'>&times;</a>
						<?php echo $alert[1]; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<?php if(isset($file))
		{
			echo $file['name'].":".$file['size'];
		}?>
		<h2>Upload a File</h2>
		<form method='post' class='form form-horizontal' enctype='multipart/form-data'>
			<div class='form-inputs'>
				<input type='file' name='content' />
			</div>
			<div class='form-actions'>
				<button type='submit' class='btn btn-danger'>Upload File</button>
			</div>
		</form>
	</div>
</body>
</html>
