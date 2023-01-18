<?php
	if (isset ($_POST['guardar'])){

		include("conexion.php");
		$conn=conectarse();
		$nombre=$_POST['nombre'];
		$contrasena=$_POST['contrasena'];
		$sql1= "SELECT nombre FROM logeo where nombre='$nombre'";
		$sql2= "SELECT contrasena FROM logeo where contrasena='$contrasena'";
		$result = mysqli_query($conn, $sql1, $sql2);
		if(mysqli_num_rows($result)==0)
		{
		$query2 = "INSERT INTO logeo(nombre,contrasena)VALUES('$nombre','$contrasena')";
		$result2 = mysqli_query($conn, $query2);
		echo "<script type=>
			alert('cliente registrado')
		</script>";
		echo "<script type=>
		alert('logeado correctamente')
	</script>";
	echo"<script type=>window.location ='../' </script>";
}else{
	echo "<script type=>
				alert('no es correcto algun dato')
				</script>";

}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Distritrebol</title>
	<link rel="stylesheet" href="../css/login.css">
	 <link rel="stylesheet" href="../css/nostros.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	     <link href="../css/style.css" rel="stylesheet" type="text/css">

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
					 <li class="nav-item">
						<a href="../vista/formulario.html" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>formulario</li></a>
					</li> 
				</ul>
			</div>
		</div>
	</nav>
		<div class="container">

    </head>
<body style="background-color: #23242a;">
	<div class="box">
		<form autocomplete="off">
			<h2>Iniciar sesión</h2>
			<div class="inputBox">
				<input type="text" name="nombre" required="required">
				<span>Nombre</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="contrasena" required="required">
				<span>Contraseña</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Olvidaste la contraseña ?</a>
				<a href="../vista/Registro.php">Registrarme</a>
			</div>
			<input style="padding: 11px 6px;" type="submit" name="guardar" value="Acceder">
		</form>
	</div>
	


	

</div>

  <footer style="background-color: black;">

    <div class="contact-info">

      <div class="contact">
        <ul>
          <li><a href="../vista/nosotros.html">Contáctanos</a></li>
          <li><a href="../vista/politicas.html">Politica de privacidad</a></li>
          <li><a href="../vista/reembolso.html">Politica de reembolso</a></li>
          <li><a href="../vista/terminos.html">Términos del servicio</a></li>
        </ul>
      </div>

      <div class="social-media">
        <p>Siguenos</p>
        <ul>
          <li><a href="https://www.facebook.com/profile.php?id=100087281747074" target="_blank"
            ><img src="../img/facebook.png" title="facebook"
          /></a></li>
          <li><a href="https://www.twitter.com" target="_blank"
            ><img src="../img/twitter.svg" title="twitter"
          /></a></li>
        </ul>
      </div>

      <div class="social-media">
        <p>©2022, Distritrebol</p>
        <ul>
          <li><a href="#" target="_blank"
            ><img src="../img/logo propio.png" title="twitter"
          /></a></li>
          <li><a href="#">Luis Miguel</a></li>
        </ul>
      </div>

    </div>
  </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>