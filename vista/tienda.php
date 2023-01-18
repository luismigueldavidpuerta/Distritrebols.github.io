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


</head>
<body style="background: linear-gradient(#ffaee7, #fadcf1);">
<?php
    include("../vista/conexion.php");
    $conn=Conectarse();
    $consulta="SELECT id, ruta FROM galeria";
    $result1=mysqli_query($conn,$consulta);
    $sql= "SELECT * FROM producto ";
		$result = mysqli_query($conn, $sql);
		
            	
          
            	
    ?>

    <head>
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

    <div class="container-fluid bg-dark position-sticky top-0">
      <ul
      class="nav nav-pills mb-3 py-3 container"
      id="pills-tab"
      role="tablist"
      >
    </li>
    <li class="nav-item" role="presentation">
      <a
      class="nav-link active"
      id="pills-profile-tab"
      data-bs-toggle="pill"
      data-bs-target="#pills-profile"
      type="button"
      role="tab"
      aria-controls="pills-profile"
      aria-selected="false"
      >Productos</a
      >
    </li>
    <li class="nav-item" role="presentation">
      <a
      class="nav-link"
      id="pills-contact-tab"
      data-bs-toggle="pill"
      data-bs-target="#pills-contact"
      type="button"
      role="tab"
      aria-controls="pills-contact"
      aria-selected="false"
      >Carrito</a
      >
    </li>
  </ul>
</div>

<div class="alert container position-sticky top-0 alert-primary hide" role="alert">
  Producto Añadido al carrito!
</div>
<div class="alert container position-sticky top-0 alert-danger remove" role="alert">
  Producto removido!
</div>

<div class="tab-content" id="pills-tabContent">
  <div
  class="tab-pane fade "
  id="pills-home"
  role="tabpanel"
  aria-labelledby="pills-home-tab"
  >
  1
</div>
<div
class="tab-pane fade show active container"
id="pills-profile"
role="tabpanel"
aria-labelledby="pills-profile-tab"
>
<h2 class="h4 m-4 text-light">Productos</h2>




    <div >
        <?php
        
        while ($row1 = mysqli_fetch_array($result1)){
        while ($row2 = mysqli_fetch_array($result)){    
        ?>
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4" >
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-light" ><strong ><?php echo $row2['nombre']?></strong></h5>
              <img src='<?php echo $row1['ruta']; ?>'  alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description" ><?php echo $row2['descripcion']?> </p>
                <h5 class="text-light">Precio: <span class="precio" >$ <?php echo $row2['precio']?> </span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

      </div>
        <?php    
        }
      }
        ?>
  </div>

</div>
<div class="tab-pane fade carrito" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

<table class="table table-dark table-hover">
  <thead>
    <tr class="text-primary">
      <th scope="col">#</th>
      <th scope="col">Productos</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody class="tbody">



  </tbody>
</table>
<br><br>
    <div class="row mx-4">
      <div class="col">
        <h3  class="itemCartTotal text-black">Total: 0</h3>
      </div>
       <div id="paypal-button-container">
      </div>
    </div>

  </div>
</div>

<footer>

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
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=Ae65Nm8coLuS2Z4XqMNRlvDXdNWahtIT2o_Hoii6MdtyShwYOZ06r8ah4nrE2WYmSQznLU-DtOIZnfWu&currency=USD"></script>

    <!-- CSS only -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
    crossorigin="anonymous"
    />
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"
    ></script>
    <!-- JavaScript Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"
    ></script>
    <script src="../jquery/carrito.js"></script>
  </body>
  </html>
