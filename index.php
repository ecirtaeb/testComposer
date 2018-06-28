<?php include 'vendor/autoload.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Composer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
	<script 	src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<header>
		<h1>Test API</h1>
	</header>
	<main>
	<?php 
		$datCarbon = new Carbon\Carbon('Europe/London');
		var_dump($datCarbon);
		$datCarbon2 = new Carbon\Carbon();
		var_dump($datCarbon2);
	?>
	</main>
</body>