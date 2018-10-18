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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> SI-HAP  </title>
<!-- Favicon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Animate CSS -->
<link href="assets/vendors/animate/animate.css" rel="stylesheet">
<!-- Icon CSS-->
<link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
<!-- Camera Slider -->
<link rel="stylesheet" href="assets/vendors/camera-slider/camera.css">
<!-- Owlcarousel CSS-->
<link rel="stylesheet" type="text/css" href="assets/vendors/owl_carousel/owl.carousel.css" media="all">
<!--Template Styles CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

</head>
<body>

	<?php require_once('routes.php') ?>
</body>
</html>
