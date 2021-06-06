<!DOCTYPE html>
<html>
	<head>
		<title>Nuevos Productos</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<div class="form">
			<form action="submit.php" method="post">
				<p>Name</p>
				<br>
				<input type="text" name="nombre" placeholder="Product Name" required>
				<p>Quantity</p>            
                <br>
				<input type="text" name="cantidad" placeholder="Product Quantity" required>
				<p>ECO</p>
				<br>
				<input type="text" name="eco" placeholder="Eco?" required>
				<br>
				<br>
				<input type="submit" value="Enviar">
			</form>
		</div>
	</body>
</html>
