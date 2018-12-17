<html lang="en">
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

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title> SI-HAP  </title>
<!-- Favicon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
<!-- AdminPanel -->

								<!-- Bootstrap CSS-->
								<link rel="stylesheet" href="Assets/bootstrap-3.3.7/css/bootstrap.min.css">
								<link rel="stylesheet" href="Assets/bootstrap-3.3.7/css/bootstrap-theme.min.css">
</head>
<body>

	<!-- Bootstrap JS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="Assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>


	<?php require_once('routes.php') ?>
</body>
</html>
