<?php
	include_once("controller/ProductController.php");
	$products = new ProductController();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Productos</title>
	</head>
	<body>
	<?php
		$products->index();
	?>
</body>
</html>
