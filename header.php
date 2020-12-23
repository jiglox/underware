<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $tituloPagina; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/boxer_hombre/logo.svg" rel="icon">


  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
 <!-- FontAwesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">
  
  <!-- slider tienda -->
    <link rel="stylesheet" type="text/css" href="css/" />
    <link rel="stylesheet" type="text/css" href="css/style-slider.css" />
 

  <!-- =======================================================
   
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img src="img/boxer_hombre/logo.svg" alt="logo"></a>
      <button style="color: white; font-size: 20px" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i>
      </button>
     
      <div class="search-place">
          <input   type="text" id="idbusqueda" placeholder="Buscar...">    
          
      </div> 
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll <?php if ($activarPagina == "Inicio") {echo "active";}?>" href="index.php">Inicio</a>
          </li>
       <!-- <li class="nav-item">
            <a class="nav-link js-scroll activar-categorias <?php if ($activarPagina == "nosotros") {echo "active";}?>" href="#">Categorias <i class="fas fa-chevron-down"></i></a>
            <ul class="lista-categoria">
                <li><a class="nada <?php if ($activarPagina == "pads") {echo "active";}?>" href="pads.php">Pads</a></li>
                <li><a class="nada<?php if ($activarPagina == "pocillos") {echo "active";}?>" href="pocillos.php">Pocillos</a></li>
                <li><a class="nada <?php if ($activarPagina == "cojines") {echo "active";}?>" href="cojines.php">Cojines</a></li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll <?php if ($activarPagina == "ofertas") {echo "active";}?>" href="ofertas.php">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll <?php if ($activarPagina == "contacto") {echo "active";}?>" href="contacto.php">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->
  

