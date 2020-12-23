<?php include('arraysdatos.php'); ?>
<?php 
$tituloPagina = "Inicio";
$activarPagina = "Inicio";
include('header.php'); ?>

<!--  <div style="margin-top: 81px;" class="espacio"></div> -->
  <!--/ Intro Skew Star /-->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/boxer_hombre/banner-1.jpg" class="d-block w-100" alt="...">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!--/ Intro Skew End /-->
 <!--/ categorias Star /-->

<script>
$('.carousel').carousel({
  interval: 1000
});
    $(function() {
  $('#carousel-publicidad').carousel({ pause: 'hover' });
});
</script>
 
  <!--
 <div class="container"> 
   <div class="row categorias-fondo">
        <div class="categorias1">
          <div class="categoria-nombre">
            <a href="">
           <p>CATEGORIA</p>
            <h4>PADS</h4>
            <P>DE ESCRITORIO</P>
           </a>
          </div>
        </div>
        <div class="categorias2">
          <div class="categoria-nombre">
           <a href="">
           <p>CATEGORIA</p>
            <h4>POCILLOS</h4>
            <P>PERSONALIZADOS</P>
           </a>
          </div>
        </div>
        <div class="categorias3">
          <div class="categoria-nombre">
            <a href="">
           <p>CATEGORIA</p>
            <h4>COJINES</h4>
            <P>EN SUBLIMACIÓN</P>
           </a>
          </div>
        </div>

   </div> <!--/ row /-->
<!-- </div> --> <!--/ container /-->




 <!--
  <div class="container">
      <div class="categories row">
          <div style="display: flex; flex-direction: column;" class="col-md-4">
          <a class="js-scroll" href="#pads"><img src="img/Categoria_1.png" alt=""></a>
          <div class="botonC">
          <a class="js-scroll" href="#pads">VER PRODUCTO</a>
          </div>
          </div>
          <div style="display: flex; flex-direction: column;" class="col-md-4">
          <a class="js-scroll" href="#tazas"><img src="img/Categoria_2.png" alt=""></a>
          <div class="botonC">
          <a class="js-scroll" href="#tazas">VER PRODUCTO</a>
          </div>
          </div>
          <div style="display: flex; flex-direction: column;" class="col-md-4">
          <a class="js-scroll" href="#cojines"><img src="img/Categoria_3.png" alt=""></a>
          <div class="botonC">
          <a class="js-scroll" href="#cojines">VER PRODUCTO</a>
          </div>
          </div>
      </div>
  </div>
-->
  <br>
  <br>
  <!--
  <div class="categorias-camisetas container">
     <a class="js-scroll" href="#camisetas-hombre">
         <div class="camisetas-hombre">
         <img src="img/categoria-camisetas-hombre.jpg" alt="hombre comprando">
      </div>
     </a>
      <a class="js-scroll" href="#camisetas-mujer">
          <div class="camisetas-mujer">
          <img src="img/categoria-camisetas-mujer.jpg" alt="mujer comprando">
      </div>
      </a>
  </div>
  
 
  
   <!--/ categoria End /-->
   
 <!--/ seccion de ofertas Star /-->
  <section id="camisetas-mujer" class="portfolio-mf sect-pt4 route">
    <div class="container">

      <h2 style="font-size: 25px; font-weight: 300; color: #666666;">Boxer para hombre 55% de descuento</h2> 
      <div class="row">
      <?php 
        $x=1;
        $ofertas;
        while($x <= 4 AND list($oferta_id, $oferta) = each($ofertas)){
            echo portada($oferta_id , $oferta);
            $x++;
      }; ?>     
  </div>
 <!--/ seccion de ofertas end /-->
 
  <!--/ seccion de pads star /-->
  </section>
<section id="pads" class="portfolio-mf sect-pt4 route">
    <div class="container">

      <h2 style="font-size: 25px; font-weight: 300; color: #666666;"></h2> 
      <div class="row">
      <?php 
        $x=1;
        $ofertas;
        while($x <= 4 AND list($oferta_id, $oferta) = each($ofertas)){
            echo portada($oferta_id , $oferta);
            $x++;
      }; ?>
  </div>
</section>
 <br>
 <br>
 <br>
  <!-- <div class="centrar-section">
      <a href="">
   <p>Ver Más</p>
   <i class="fas fa-chevron-down"></i>
   </a>
  </div> -->
    <!--/ seccion de pads end /-->
    
    
      <!--/ seccion de cojines star /-->



<?php include('footer.php'); ?> 
