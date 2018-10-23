<!DOCTYPE html>
<html>
<head>

	<?php
	if (isset($_GET['success'])) : ?>
	<div class="alert alert-success" role="alert" style="color: green;opacity: 0.9">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong>SUCCESS!</strong> <?=($_GET['success']);?>
	</div>
<?php endif;?>
<?php
if (isset($_GET['error'])) : ?>
<div class="alert alert-danger" role="alert" style="color: red;opacity: 0.9">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>WARNING!</strong> <?=($_GET['error']);?>
</div>
<?php endif;?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

<title> SI-HAP  </title>
<!-- Favicon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
<!-- AdminPanel -->


</head>
<body>

	<?php require_once('routes.php') ?>
</body>
</html>
