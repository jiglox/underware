<?php include('arraysdatos.php'); ?>

<?php 

if (isset($_GET["id"])){
$oferta_id =  $_GET["id"];

if (isset($ofertas[$oferta_id])){
$oferta = $ofertas[$oferta_id];    
}
}else{
    header("location: index.php");
    exit();
};

$tituloPagina = "comprar";
$activarPagina = "comprar";
include('header.php'); ?>




<br>
<br>
<br>
<br>
<br>
    

  </div>

<div class="container fondo-compra">
<div class="row">
 
<div class="col-md-8 caja1">
  <div class="">
      <div class="sliderComprar">


    <!--Carousel Wrapper-->
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              
              <div class="image-gallery">
                  <input id="tab1" type="radio" name="tabs" checked>
                  <label for="tab1"><img width="100" height="100" src="<?php echo $oferta["imagen"];?>"></label>  
                    
                  <input id="tab2" type="radio" name="tabs">
                  <label for="tab2"><img width="100" height="100" src="<?php echo $oferta["imagen2"];?>"></label>  
                    
                  <input id="tab3" type="radio" name="tabs">
                  <label for="tab3"><img width="100" height="100" src="<?php echo $oferta["imagen3"];?>"></label>
                  
                  <input id="tab4" type="radio" name="tabs">
                  <label for="tab4"><img width="100" height="100" src="<?php echo $oferta["imagen5"];?>"></label>

                  <section id="content1">
                    <img src="<?php echo $oferta["imagen"];?>">
                  </section>  
                    
                  <section id="content2">
                    <img src="<?php echo $oferta["imagen2"];?>">
                  </section>
                    
                    <section id="content3">
                  <img src="<?php echo $oferta["imagen3"];?>">
                  </section>
                    
                  <section style="margin: auto;" id="content4">
                   <video style="width: 100%;" src="<?php echo $oferta["imagen4"];?>" controls ></video>
                  </section>
			  </div>
		</div>
    </div>
</section>
    <!--/.Carousel Wrapper--> 
  </div>
<br>
<br>
      </div> <!-- fin slider -->

      <div class="compra-descripcion">
       <h3>Características</h3>
        <div class="compra-caracteristicas">            
            <div class="izquierdo">
                <h6>Talla del producto:</h6>
                <p>M</p>
                
                <h6>Cadera:</h6>
                <p>95 - 100</p>
            </div>
            
            <div class="derecho">
                <h6>Cintura:</h6>
                <p>84 - 88</p>
                
                <h6>Espesor:</h6>
                <p>1 cm</p>
            </div>
            
        </div>
        <h3>Descripción</h3>
        
        Su composición de algodón, el cual es de procedencia natural, permite que el aire fluya libremente absorbiendo el sudor y permitiendo a la piel respirar. Esto es muy importante ya que evita la aparición de hongos.
<br>
<br>
Talles S: 66/84cm - M: 70/88cm - L: 74/92cm - XL: 79/94cm - XXL: 83/98 Las medidas son de cintura, sin estirar y estirada respectivamente.
<br>
<br>


Realizamos envíos en el día.
<br>
<br>
Por cuestiones de higiene, los boxers no tienen cambio.
La imagen de la publicación es ilustrativa.
<br>
<br>
<!-- COMPOSICIÓN: 81% ALGODÓN- 18% POLIAMIDA- 1%ELASTANO -->

EQUIVALENCIA DE TALLES:
Tale S: 32 A 34 DE PANTALÓN
Tale M: 36 A 38 DE PANTALÓN
Tale L: 40 A 42 DE PANTALÓN
Tale XL: 44 A 46 DE PANTALÓN
Tale XXL: 48 A 52 DE PANTALÓN
      
      </div>
</div> <!-- fin de slider -->
  
  
  <div class="col-md-4 border-compra">
      <h2><?php echo $oferta["nombre"];?></h2>
      <h4>Stock Disponible<i class="fas fa-check"></i></h4>
      <h3><?php echo $oferta["precio"];?></h3>
    <!--  
      <div class="medio-pago">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
      </div> -->
      
      <div class="btn-compra">
          <a href="">COMPRAR</a>
      </div>
      
      <div class="envio-gratis">
          <i class="fas fa-shipping-fast"></i>
          <div class="envio-texto">
              <h6> Envio Gratis</h6>
              <p>Todos los envios de nuestra tienda son totalmente gratiutos</p>
          </div>
      </div>
      <div class="envio-gratis">
          <i class="fas fa-shield-alt"></i>
          <div class="envio-texto">
              <p>Compra Protegida, recibe el producto que esperabas o te devolvemos tu dinero.</p>
          </div>
      </div>
     
  </div>
</div><!-- fin de arrow -->
</div>
</div> 

<br>
<br>




<style>
    
    /*
    .carousel-control-next-icon {
    background-image: url(../tienda/img/flecha_derecha.png);
}
    .carousel-control-prev-icon {
    background-image: url(../tienda/img/flecha_izquierda.png);
}
    .carousel-control-next-icon{
            width: 14px;
    height: 20px;
    }
    .carousel-control-prev-icon {
        width: 14px;
    height: 20px;
    }
    */
    .carousel-indicators li{
    width: 200px!important;
       
    }
    .carousel-inner img{
        border-radius:10px 10px 0 0;
    }
    .carousel-indicators img{
        width: 100%;
        border-radius: 5px;
    }
    .navbar-b{
       background: #000; 
    }
    .nav-item a{
     color: white;
    }
</style>


<?php include('footer.php'); ?> 