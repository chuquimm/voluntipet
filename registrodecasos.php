<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
	require_once("funciones/funciones.php");
  
  	if(isset($_POST['name'])) {	
		$foto = null;


		if (isset($_FILES['foto'])) {
			$nombre = $_FILES['foto']['name'];
			$temp = $_FILES['foto']['tmp_name'];
			$extesion = explode('.', $nombre);
			$extesion = strtolower(end($extesion));
			$destino = uniqid('', false).'.'.$extesion;

			if (move_uploaded_file($temp,$destino)) {
				$foto = "../".$destino;
			} else {
				$foto = "./assets/img/perros/1.jpg";
			}
		}
		
		$conexion = abrirConexion();
		$consulta = "INSERT INTO casos (nombre, email, telefono, direccion, dia_encontrado, foto, detalles) ";
	  	$consulta.= "VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['telefono']."', '".$_POST['direccion']."', '".$_POST['dia_encontrado']."', '".$foto."', '".$_POST['detalles']."')";
		$caso = transaction($conexion, $consulta);
		cerrarConexion($conexion);
	}

?>
<html>
<head>
<title>Volunti PET | Registro de Casos</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Referral Program form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="css/style-registrodecasos.css" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
</head>
<body>
	<h1>VOLUNTI <span data-blast="color" style="color: rgb(255, 50, 46);">PET</span>
	</h1>
<div class="w3ls-main">
<h2>REGISTRO DE CASOS</h2>
<p>Ayudar nunca fue tan fácil.</p>
<div class="w3ls-form">
<form action="registrodecasos.php" method="POST" enctype="multipart/form-data">
<ul class="fields">
<div class="Refer_w3l">
	<h3>DATOS DEL CASO</h3>
	<li>	
		<label class="w3ls-opt">Nombre<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="text" name="name"  placeholder="Para nuestro amigo por ayudar" required=" "/>
		</div>
	</li>
	<li>
		<div class="mail">
			<label class="w3ls-opt">E-Mail de contacto<span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="email" name="email" placeholder="" required=""/>
			</span>
		</div>
	</li>
	<li>
		<label class="w3ls-opt">Número de Teléfono<span class="w3ls-star"> * </span></label>	
			<span class="w3ls-text w3ls-name">
				<input type="text" name="telefono" placeholder="" required=""/>
			</span>
	</li>
	<li>
		<label class="w3ls-opt">Lugar<span class="w3ls-star"> * </span></label>	
			<span class="w3ls-text w3ls-name">
				<input type="text" name="direccion" placeholder="" required=""/>
			</span>
	</li>
	<li>
		<label class="w3ls-opt">Día encontrado<span class="w3ls-star"> * </span></label>	
			<span class="w3ls-text w3ls-name">
				<input type="date" name="dia_encontrado" placeholder="" required=""/>
			</span>
	</li>
	<li>
		<label class="w3ls-opt">Inserte Foto<span class="w3ls-star"> * </span></label>	
			<span class="w3ls-text w3ls-name">
				<input type="file" name="foto" accept="image/*"/>
			</span>
	</li>
	</div>
	<div class="input">
		<label class="w3ls-opt1">Detalles del Caso</label>
		<span class="w3ls-input"><textarea placeholder="" name="detalles"></textarea></span>
	</div>
</ul>
<div class="clear"></div>
	<div class="w3ls-btn">
		<input style="background-color: rgb(255, 50, 46)" type="submit" value="ENVIAR">
	</div>
</form>
</div>
</div>
<footer>© 2019 VoluntiPET . Todos los derechos reservados.</footer>
</body>
</html>