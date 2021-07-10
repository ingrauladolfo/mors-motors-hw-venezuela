<?php
require_once('./frontend/clientes/index.php');
require_once('./frontend/servicio/index.php');
require_once('./backend/clientes/index.php');
require_once('./backend/servicio/index.php');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Mors Motors - Sistema oficial</title>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
		/>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<div class="row">
				<div class="col">
					<a href="./backend/clientes/index.php" target="_blank"
						><button type="button" class="btn btn-dark">Clientes</button></a
					>
				</div>
				<div class="col">
					<a href="./backend/servicio/index.php" target="_blank"
						><button type="button" class="btn btn-dark">Servicio</button></a
					>
				</div>
			</div>
		</div>

		<script
			src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
			crossorigin="anonymous"
		></script>
	</body>
</html>
