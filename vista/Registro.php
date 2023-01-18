<?php
if (isset ($_POST['guardar'])){
	include("conexion.php");
	$conn=conectarse();
	$cedula=$_POST['cedula'];
	$identificacion=trim($cedula);
	$sql= "SELECT cedula FROM registro where cedula='$identificacion'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)==0)
	{
		$cedula=$_POST['cedula'];
		$nombre=$_POST['nombre'];
		$direccion=$_POST['direccion'];
		$telefono=$_POST['telefono'];
		$correo=$_POST['correo'];
		$contrasena=$_POST['contrasena'];
		$query = "INSERT INTO registro(cedula,nombre,direccion,telefono,correo,contrasena)VALUES('$cedula',	'$nombre','$direccion','$telefono','$correo','$contrasena')";
		$result = mysqli_query($conn, $query);
		$query2 = "INSERT INTO logeo(nombre,contrasena)VALUES('$nombre','$contrasena')";
		$result2 = mysqli_query($conn, $query2);
		echo "<script type=>
		alert('cliente registrado')
		</script>";
		echo"<script type=>window.location ='../' </script>";
	}else{
		echo "<script type=>
		alert('cliente invalido')

		</script>";

	}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Distritrebol</title>

	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/registro.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<nav class="navbar  navbar-expand-lg " style="background-color:#23242a	;opacity: 90%;padding: 6px 0 ;">
		<div class="container-fluid " >
			
			<button class="navbar-toggler"style="background-color:white; border-radius: 5px;opacity: 20%;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon" ></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a href="../index.html" style="color:white;margin-right: 30px;margin-left: 30px;" class="link navbar-brand"><li>Inicio</li></a>
					</li>
					<li class="nav-item">
						<a href="../vista/tienda.php" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>Tienda</li></a>
					</li>
					<li class="nav-item">
						<a href="../vista/nosotros.html" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>Contacto</li></a>
					</li>
					<li class="nav-item">
						<a href="../vista/login.php" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>login</li></a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
</head>
<body>


	<div class="container" >

		<div class="box" style="max-height: 820px;">
			<form id="" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" autocomplete="off">
				<div>
					<h2>Registrarme</h2>
					<div class="inputBox">
						<input type="text" name="cedula" required="required">
						<span>cedula</span>
						<i></i>
					</div>
					<div class="inputBox">
						<input type="text" name="nombre" required="required">
						<span>Nombre</span>
						<i></i>
					</div>
					<div class="inputBox">
						<input type="" name="direccion"  required="required">
						<span>direccion</span>
						<i></i>
					</div>
					<div class="inputBox">
						<input type="" name="telefono"  required="required">
						<span>telefono</span>
						<i></i>
					</div>
					<div class="inputBox">
						<input type="mail" name="correo"  required="required">
						<span>Correo</span>
						<i></i>
					</div>
					<div class="inputBox">
						<input type="password" name="contrasena"  required="required">
						<span>Contraseña</span>
						<i></i>
					</div>
					<p class="termino">
						<input type="checkbox">  Estoy de acuerdo con <a class="termino2" href="">Terminos y Condiciones</a></p>
							<div class="links"  >
								<a  href="../vista/login.php" >Iniciar sesión</a>
							</div>
						<input style="padding: 11px 6px;" name="guardar" type="submit" value="Acceder">
				</div>
			</form>
		</div>
	</div>
</body>
</html>