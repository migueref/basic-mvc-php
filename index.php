<?php
	include_once("controllers/ProductsController.php");
	$products = new ProductController();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			$products->index();
		?>
	</body>
</html>
