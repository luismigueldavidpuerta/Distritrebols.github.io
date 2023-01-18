<?php
	
	include("conexion.php");
	$conn=conectarse();
	$cedula=$_POST['cedula'];
		$sql= "SELECT * FROM registro where cedula='$cedula'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) >0)
		{
            $row=mysqli_fetch_assoc($result);
		
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/tienda.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../distritrebol/css/nostros.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/formato.css"/>
  <title>Distritrebol</title>
      <nav class="navbar sticky-top navbar-expand-lg " style="background-color:#7A542D  ;opacity: 90%;padding: 6px 0 ;">
        <div class="container-fluid " >

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
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
              <li class="../nav-item">
                <a href="../vista/login.php" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>login</li></a>
              </li>
              <li class="../nav-item">
                <a href="../vista/producto.php" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>producto</li></a>
              </li>
              <!-- <li class="../nav-item">
                <a href="../vista/galeria.php" style="color:white;margin-right: 30px;margin-left: 30px;" class="link nav-link active "  aria-current="page"><li>galeria</li></a>
              </li>  -->
            </ul>
          </div>
        </div>
      </nav>


    </head>
<body style="background-color: #23242a;">
    <center>
        <br><br><p style="color: white;">cedula</p>
    <form action="" method="" >
    <input type="text" name="cedula" value="<?php echo $row['cedula']?>" id="iden">
    <br><br><p style="color: white;">nombre</p>
    <input type="text" name="nombre" value="<?php echo $row['nombre']?>" id="iden">
    <br><br><p style="color: white;">dirección</p>
    <input type="text" name="direccion" value="<?php echo $row['direccion']?>" id="iden">
    <br><br><p style="color: white;">telefono</p>
    <input type="text" name="telefono" value="<?php echo $row['telefono']?>" id="iden">
    <br><br><p style="color: white;">correo</p>
    <input type="text" name="correo" value="<?php echo $row['correo']?>" id="iden">
    <br><br><p style="color: white;">contraseña</p>
    <input type="text" name="contrasena" value="<?php echo $row['contrasena']?>" id="iden">
    </form>
    <?php
        }
    ?>
   </center> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>