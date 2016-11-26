<?php
$page = 'About';
include('header-inner.php');?>
   
   <section class="inner-main">
      <div class="container-fluid">
          <div class="row text-center">
              <!--title page-->
              <h1 class="inner-title col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">Acerca de mi</h1>
          </div>
      </div>
   </section>
   
   <section class="about">
       <h2 hidden="hidden">fuckoff</h2>
       <div class="col-lg-10 col-lg-offset-1 col-md-12 col-xs-12">
           <figure class="about-img text-center col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
               <!--insert img and include img-responsive img-circle classes-->
               <img src="img/selfie.png" alt="Selfie" class="img-responsive img-circle">
           </figure>
           <div class="inner-par about-par col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
              <!--insert content-->
               <p>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis omnis iure maiores reiciendis quibusdam natus iste quasi quam maxime accusantium, dolor ipsum modi distinctio impedit sint obcaecati nobis aut laboriosam!
               </p>
               <p>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nisi laboriosam ducimus quam, commodi ab ad non, cumque deserunt numquam corporis excepturi <a href="#" class="bio-link">reiciendis</a> iure, similique repellendus maiores aperiam, quod unde.
               </p>
               <p>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit in mollitia rerum saepe, nisi, consectetur rem necessitatibus odio reiciendis aut unde autem architecto quaerat ab maxime eum asperiores dolores eos.
               </p>
           </div>
       </div>
   </section>
    
    <section class="back-proceso">
        <div class="wrap-about"></div>
        <div class="container-fluid proceso">
            <div class="row">
               <!--insert subtitle-->
                <h2 class="inner-subtitle text-center col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">Proceso creativo</h2>
            </div>
            <div class="row proceso-container col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
               <!--figure proceso-->
                <figure class="inner-par col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                   <!--insert img and include img-responsive img-circle classes-->
                    <img src="img/icon-analisis.png" alt="" class="img-responsive hidden-sm hidden-xs">
                    <figcaption class="text-center">
                        <!--insert process title-->
                        <h3 class="proceso-title">Análisis</h3>
                        <!--insert process content-->
                        <p class="proceso-par">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia beatae voluptatem eos? Porro quia doloribus esse minima quaerat consequatur.</p>
                    </figcaption>
                </figure>
                <!--figure proceso-->
                <figure class="inner-par col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                   <!--insert img and include img-responsive img-circle classes-->
                    <img src="img/icon-diseno.png" alt="" class="img-responsive hidden-sm hidden-xs">
                    <figcaption class="text-center">
                       <!--insert process title-->
                        <h3 class="proceso-title">Diseño</h3>
                        <p class="proceso-par">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia beatae voluptatem eos? Porro quia doloribus esse minima quaerat consequatur.</p>
                    </figcaption>
                </figure>
                <!--figure proceso-->
                <figure class="inner-par col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                    <img src="img/icon-code.png" alt="" class="img-responsive hidden-sm hidden-xs">
                    <figcaption class="text-center">
                       <!--insert process title-->
                        <h3 class="proceso-title">Código</h3>
                        <!--insert process content-->
                        <p class="proceso-par">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia beatae voluptatem eos? Porro quia doloribus esse minima quaerat consequatur.</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    
    <section class="conocimientos">
        <div class="container-fluid col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">
            <div class="conoc lenguajes text-center col-lg-4 col-sm-4 col-xs-12">
               <!--insert conocimiento content-->
                <h3 class="conocimiento-title">Lenguajes</h3>
                <!--insert conocimiento-->
                <img src="img/about-proceso.jpeg" alt="" class="img-responsive">
            </div>
            <div class="conoc frameworks text-center col-lg-4 col-sm-4 col-xs-12">
              <!--insert conocimiento content-->
               <h3 class="conocimiento-title">Frameworks</h3>
               <!--insert conocimiento-->
                <img src="img/about-proceso.jpeg" alt="" class="img-responsive">
            </div>
            <div class="conoc programas text-center col-lg-4 col-sm-4 col-xs-12">
              <!--insert conocimiento content-->
               <h3 class="conocimiento-title">Programas</h3>
               <!--insert conocimiento-->
                <img src="img/about-proceso.jpeg" alt="" class="img-responsive">
            </div>
        </div>
    </section>
    
<?php include("footer-inner.php"); ?>