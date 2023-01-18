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

<?php
if (isset($_POST['guardar'])) {

    include("conexion.php");
    $conn=Conectarse();
    $nombre= $_POST["nombre"];
    $total=count($_FILES["file"]["name"]);
    $j=0;    
    $descripcion= $_POST["descripcion"];
    $precio= $_POST["precio"];    

    if($total==1 and $_FILES["file"]["type"][$j]!=='image/jpeg' and $_FILES["file"]["type"][$j]!=='image/png'){
        echo "<script type=>
                alert('El archivo dede de ser en formato jpg o png')
                </script>";
    } else {
        
        $query = "INSERT INTO producto ( nombre, descripcion,precio)VALUES ('$nombre','$descripcion','$precio')";
        $result = mysqli_query($conn, $query);
        $last_id=mysqli_insert_id($conn);
        $total=count($_FILES["file"]["name"]);
        
        for($i=0;$i<$total;$i++){
            $nombre = $_FILES["file"]["name"][$i];
            
            if($_FILES["file"]["type"][$i]=='image/png')
            
                $ruta="../img/productos/".$_FILES["file"]["name"][$i];
                echo $last_id;
                echo "<br>".$ruta;
                $query1 = "INSERT INTO galeria (id,ruta) VALUES ('$last_id','$ruta')";
                $result1 = mysqli_query($conn, $query1);
        }
        echo"<script type=>window.location ='../' </script>";

    }
}

?>

<body style="background-color: #F9AB5C;"><center>
<br><br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <label for="nombre">
            Nombre del producto:
            
            <input type="text" name="nombre" id="nombre">
            <br><br>
        </label>
        <br><br>
        <label for="file[]">
            Imagen del producto:
            
            <input type="file" multiple="true" name="file[]" id="file[]">
            <br><br>
        </label>
        <br><br>
        <label for="descripcion">
            
            Descripción:
            <input type="textarea" name="descripcion" id="descripcion">
            <br><br>
        </label>
        <br><br>
        <label for="precio">
            precio:
            
            <input type="text" name="precio" id="precio">
            <br><br>
        </label>        
        <br><br>
        <input type="submit" name="guardar"  value="Enviar">
        <input type="submit" name="salir" value="Cancelar">
    </form>
   </center>
</body>
</html>