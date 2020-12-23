<!--/ Pads de escritorio Star /-->
<?php 
function portada($oferta_id, $oferta){

$salida = "";
$salida = $salida . '<div class="col-md-3 ofertas-contenido">';
$salida = $salida . '<a href="oferta.php?id='. $oferta_id .' ">';
$salida = $salida . '<img style="width:100%;" src="'. $oferta["imagen"] . '" alt=" ' . $oferta["nombre"] .' " class="work-img">';
$salida = $salida . '<div class="ofertas-descripcion">';
/* $salida = $salida . '<h6 class="ofertas-antes"> '. $oferta["antes"] .'</h6>'; */
$salida = $salida . '<div class="ofertas-despues">' . '<h2>' . $oferta["precio"] . '</h2>' . '<span> <p>' . $oferta["antes"] . '</p></span></div>';
/*$salida = $salida . '<div class="ofertas-nombre" ' .'<p>' . $oferta["nombre"] .'</p></div></div></div></a>';*/
$salida = $salida . '</div></div></a>';
return $salida;
};
/*
<div class="col-md-4">
    <div class="work-box">
    <a class="work-box2" href="<?php echo $Pads["imagen"];?>" data-lightbox="gallery-mf">
        <div class="work-img">
        <img src="<?php echo $Pads["imagen"];?>" alt="<?php echo $Pads["nombre"];?>" class="img-fluid">
        </div>
        </a>
        <div class="work-content">
        <div class="row">
            <div class="col-sm-8">
            <h2 class="w-title"> <?php echo $Pads["precio"];?> </h2>
            <div class="w-more">
                <span class="w-ctegory"><?php echo $Pads["nombre"];?></span> / <span class="w-date"><?php echo $Pads["medidas"];?></span>
            </div>
            </div>
            
            <div class="btnCompra col-sm-4">
            <a href="">Comprar</a>
            </div>
        </div>
        </div>
    </div>
</div> 

*/

$ofertas = array();
/* PADS */
$ofertas[1] = array(
"imagen" => "img/boxer_hombre/boxer-1.jpg",  
"imagen2" => "img/boxer_hombre/boxer-1-2.jpg",  
"imagen3" => "img/boxer_hombre/boxer-1-3.jpg",  
"imagen4" => "img/boxer_hombre/boxer-video-1.mp4",  
"imagen5" => "img/boxer_hombre/boxer-1-4.jpg",  
"antes" => "$22.200ºº",
"precio" => "$10.000",
"nombre" => "Boxer nego de calidad en algodon talla M",  
);
$ofertas[2] = array(
"imagen" => "img/boxer_hombre/boxer-2.jpg",
"imagen2" => "img/boxer_hombre/boxer-2-2.jpg",  
"imagen3" => "img/boxer_hombre/boxer-2-3.jpg",  
"imagen4" => "img/boxer_hombre/boxer-video-2.mp4",  
"imagen5" => "img/boxer_hombre/boxer-2-4.jpg", 
"antes" => "$22.200ºº",
"precio" => "$10.000",
"nombre" => "Boxer azul de calidad en algodon talla M",
);
$ofertas[3] = array(
"imagen" => "img/boxer_hombre/boxer-1.jpg",  
"imagen2" => "img/boxer_hombre/boxer-1-2.jpg",  
"imagen3" => "img/boxer_hombre/boxer-1-3.jpg",  
"imagen4" => "img/boxer_hombre/boxer-video-1.mp4",  
"imagen5" => "img/boxer_hombre/boxer-1-4.jpg",  
"antes" => "$22.200ºº",
"precio" => "$10.000",
"nombre" => "Boxer nego de calidad en algodon talla M", 
);
$ofertas[4] = array(
"imagen" => "img/boxer_hombre/boxer-2.jpg",
"imagen2" => "img/boxer_hombre/boxer-2-2.jpg",  
"imagen3" => "img/boxer_hombre/boxer-2-3.jpg",  
"imagen4" => "img/boxer_hombre/boxer-video-2.mp4",  
"imagen5" => "img/boxer_hombre/boxer-2-4.jpg", 
"antes" => "$22.200ºº",
"precio" => "$10.000",
"nombre" => "Boxer azul de calidad en algodon talla M",
);

$ofertas[5] = array(
"imagen" => "img/boxer_hombre/boxer-1.jpg",  
"imagen2" => "img/boxer_hombre/boxer-1-2.jpg",  
"imagen3" => "img/boxer_hombre/boxer-1-3.jpg",  
"imagen4" => "img/boxer_hombre/boxer-video-1.mp4",  
"imagen5" => "img/boxer_hombre/boxer-1-4.jpg",  
"antes" => "$22.200ºº",
"precio" => "$10.000",
"nombre" => "Boxer nego de calidad en algodon talla M", 
);
$ofertas[6] = array(
"imagen" => "img/boxer_hombre/boxer-2.jpg",
"imagen2" => "img/boxer_hombre/boxer-2-2.jpg",  
"imagen3" => "img/boxer_hombre/boxer-2-3.jpg",  
"imagen4" => "img/boxer_hombre/boxer-video-2.mp4",  
"imagen5" => "img/boxer_hombre/boxer-2-4.jpg", 
"antes" => "$22.200ºº",
"precio" => "$10.000",
"nombre" => "Boxer azul de calidad en algodon talla M",
);
$ofertas[7] = array(
"imagen" => "img/boxer_hombre/boxer-1.jpg",  
"imagen2" => "img/boxer_hombre/boxer-1-2.jpg",  
"imagen3" => "img/boxer_hombre/boxer-1-3.jpg",  
"imagen4" => "img/boxer_hombre/boxer-video-1.mp4",  
"imagen5" => "img/boxer_hombre/boxer-1-4.jpg",  
"antes" => "$22.200ºº",
"precio" => "$10.000",
"nombre" => "Boxer nego de calidad en algodon talla M", 
);
$ofertas[8] = array (
"imagen" => "img/boxer_hombre/boxer-2.jpg",
"imagen2" => "img/boxer_hombre/boxer-2-2.jpg",  
"imagen3" => "img/boxer_hombre/boxer-2-3.jpg",  
"imagen4" => "img/boxer_hombre/boxer-video-2.mp4",  
"imagen5" => "img/boxer_hombre/boxer-2-4.jpg", 
"antes" => "$22.200ºº",
"precio" => "$10.000",
"nombre" => "Boxer azul de calidad en algodon talla M",
);
$ofertas[9] = array (
"imagen" => "img/camisetas_mujer/camiseta_mujer_9.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[10] = array (
"imagen" => "img/camisetas_mujer/camiseta_mujer_10.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[11] = array (
"imagen" => "img/camisetas_mujer/camiseta_mujer_11.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[12] = array (
"imagen" => "img/camisetas_mujer/camiseta_mujer_12.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
/* COJINES */
$ofertas[13] = array (
  "imagen" => "img/camisetas_hombre/camiseta-1.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[14] = array (
  "imagen" => "img/camisetas_hombre/camiseta-2.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[15] = array (
  "imagen" => "img/camisetas_hombre/camiseta-3.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[16] = array (
  "imagen" => "img/camisetas_hombre/camiseta-4.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[17] = array (
  "imagen" => "img/camisetas_hombre/camiseta-5.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[18] = array (
  "imagen" => "img/camisetas_hombre/camiseta-6.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[19] = array (
  "imagen" => "img/camisetas_hombre/camiseta-7.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[20] = array (
  "imagen" => "img/camisetas_hombre/camiseta-8.jpg",
 
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[21] = array (
  "imagen" => "img/camisetas_hombre/camiseta-9.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[22] = array (
  "imagen" => "img/camisetas_hombre/camiseta-10.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[23] = array (
  "imagen" => "img/camisetas_hombre/camiseta-11.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[24] = array (
  "imagen" => "img/camisetas_hombre/camiseta-12.jpg",

  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
/* POCILLOS */
$ofertas[25] = array (
  "imagen" => "img/pocillos_001-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[26] = array (
  "imagen" => "img/pocillos_002-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[27] = array (
  "imagen" => "img/pocillos_003-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[28] = array (
  "imagen" => "img/pocillos_004-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[29] = array (
  "imagen" => "img/pocillos_005-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[30] = array (
  "imagen" => "img/pocillos_006-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[31] = array (
  "imagen" => "img/pocillos_007-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[32] = array (
  "imagen" => "img/pocillos_008-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[33] = array (
  "imagen" => "img/pocillos_009-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[34] = array (
  "imagen" => "img/pocillos_0010-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[35] = array (
  "imagen" => "img/pocillos_0011-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[36] = array (
  "imagen" => "img/pocillos_0012-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
/* OFERTAS */
$ofertas[37] = array (
  "imagen" => "img/pocillos_0012-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[38] = array (
  "imagen" => "img/pocillos_0012-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[39] = array (
  "imagen" => "img/pocillos_0012-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
$ofertas[40] = array (
  "imagen" => "img/pocillos_0012-1.jpg",
  "imagen2" => "img/pads_001-2.jpg",
  "imagen3" => "img/pads_001-3.jpg",
  "imagen4" => "img/pads_001-4.jpg",
  "imagen5" => "img/pads_001-5.jpg",
  "antes" => "$42.200",
  "precio" => "$28.200",
  "descuento" => "40% OFF",
  "nombre" => "Pad en neopreno para escritorio asher de league of leguends", 
);
?>
 <!--/ Pads de escritorio end/--> 
 

