<?php
	include_once("controllers/ProductsController.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pizza</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- my css file -->
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
    <!-- header -->
    <header>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
		<div class="col-xs-12">
			<h2 class ="white-text">Registrar nuevo pedido</h2>
			<?php
				$temporal = "";
			?>

				<?php
					foreach ($productos as $producto) {
				?>
					<div class="col-md-3">
						<img src="https://super.walmart.com.mx/images/product-images/img_small/00003700008886s.jpg" class="col-xs-12">
						<form id="<?php echo $producto['id']; ?>" action="index.html" method="post">
							<span><?php echo $producto['descripcion']; ?></span>
							<input type="text" class="col-xs-12" name="" value="<?php echo $producto['id']; ?>">
							<input type="number" id="cantidad" onchange="document.getElementById('cantidad').value=this.value" class="input col-xs-12">
							<button onclick="addToCart(
																					<?php echo $producto['id']?>
																				)" type="button" id="AddCart" class="col-xs-12 btn btn-alert">Agregar al carrito</button>
						</form>

					</div>
				<?php

					}
				?>


			<br>

			<button type="button" class="form-control" id="guardar">Hacer pedido</button>
		</div>




    <!-- container -->
    <script src="./assets/js/script.js" charset="utf-8"></script>
    <script type="text/javascript">
		let addCart = document.querySelector("#addCart");
      let guardar = document.querySelector("#guardar");
			let carrito = new Array()
			function addToCart(value) {
				let idProducto = value;
				let cantidad = document.querySelector("#cantidad");

				if(cantidad.value) {
					console.log("idProducto" +idProducto+ " cantidad: "+cantidad.value)
					carrito.push(idProducto)
				}else{
					console.log("no se hac")
				}


				$(".input").val("");
			}
			if(guardar) {
				guardar.addEventListener('click',function(){
					console.log(carrito)
	      });
			}


    </script>
  </body>
</html>
