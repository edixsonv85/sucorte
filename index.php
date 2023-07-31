<?php
  include ("cabecera.php");
?>   

    <!-- Page Content -->
    <!-- Banner Starts Here -->
     <div class="banner header-text">
 <!--     <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>-->
<?php
  include ("carousel.php");
?>       
    </div> 
    <!-- Banner Ends Here -->

    <!-- Caroeusel -------------------------------------------------------------------------------->

    <!-- Caroeusel -------------------------------------------------------------------------------->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">ver todos los productos <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$25.75</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$30.25</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (21)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$20.45</h6>
                <p>Sixteen Clothing is free CSS template provided by TemplateMo11.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (36)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$15.25</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (48)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$12.50</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (16)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$22.50</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- <title>Carrusel de imágenes</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style>
.carousel-horizontal {
  display: flex;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  text-align: center;
}

.carousel-item {
  flex: 0 0 auto;
  scroll-snap-align: start;
}

.carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10%;
}
.carousel-item img { width: 250px; height: auto; animation: slide-in 1s ease-in-out; } 
@keyframes slide-in { 
  0% { transform: translateX(100%); opacity: 0; } 
  100% { transform: translateX(0); opacity: 1; } 
} 
</style>

<div id="myCarousel" class="carousel-horizontal carousel" >
  <div class="carousel-inner dragscrollable">
    <div class="carousel-item active">
      <img src="assets/images/mitutoyo.png" alt="Imagen 1">
      <img src="assets/images/dormer.png" alt="Imagen 2">
      <img src="assets/images/bahco.png" alt="Imagen 3">
      <img src="assets/images/garr tool.png" alt="Imagen 4">
      <img src="assets/images/3m.png" alt="Imagen 5">
    </div>
    <div class="carousel-item">
      <img src="assets/images/impero.png" alt="Imagen 6">
      <img src="assets/images/safety.png" alt="Imagen 7">
      <img src="assets/images/proto.png" alt="Imagen 8">
      <img src="assets/images/ridgid.png" alt="Imagen 9" >
      <img src="assets/images/sandvik.png" alt="Imagen 10">
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<script>
  $(document).ready(function(){
    $('.carousel-horizontal').on('mousewheel DOMMouseScroll', function(e) {
      e.preventDefault();
      
      var delta = e.originalEvent.wheelDelta || -e.originalEvent.detail;
      this.scrollLeft += (delta < 0 ? 1 : -1) * 30;
    });
    
    $('.carousel').carousel({
      interval: 3000 // Cambia de imagen cada 5 segundos
    });
    
    $('.carousel-inner').addClass('dragscrollable');
  });
</script> -->

<!--   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Nuestras Marcas</h2>
        </div>
        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <img src="assets/images/mitutoyo.png">
            </div>
            <div class="slide">
              <img src="assets/images/dormer.png">
            </div>
            <div class="slide">
              <img src="assets/images/bahco.png">
            </div>
            <div class="slide">
              <img src="assets/images/garr tool.png">
            </div>
            <div class="slide">
              <img src="assets/images/3m.png">
            </div>
            <div class="slide">
              <img src="assets/images/impero.png">
            </div>
            <div class="slide">
              <img src="assets/images/safety.png">
            </div>
            <div class="slide">
              <img src="assets/images/proto.png">
            </div>            
            <div class="slide">
              <img src="assets/images/ridgid.png">
            </div> 
            <div class="slide">
              <img src="assets/images/sandvik.png">
            </div> 

            <div class="slide">
              <img src="assets/images/mitutoyo.png">
            </div>
            <div class="slide">
              <img src="assets/images/dormer.png">
            </div>
            <div class="slide">
              <img src="assets/images/bahco.png">
            </div>
            <div class="slide">
              <img src="assets/images/garr tool.png">
            </div>
            <div class="slide">
              <img src="assets/images/3m.png">
            </div>
            <div class="slide">
              <img src="assets/images/impero.png">
            </div>
            <div class="slide">
              <img src="assets/images/safety.png">
            </div>
            <div class="slide">
              <img src="assets/images/proto.png">
            </div>            
            <div class="slide">
              <img src="assets/images/ridgid.png">
            </div> 
            <div class="slide">
              <img src="assets/images/sandvik.png">
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <br> -->

  <!--Slider ------------------------------->
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Nuestras marcas aliadas</h2>
        </div>
  <!---------------------------------------->

<?php
  include ("slider.php");
  include ("pie.php");
?>