<?php
	include_once("controller/ProductController.php");
	$products = new ProductController();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Productos</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
	<?php
		$products->index();
	?>
</body>
</html>
