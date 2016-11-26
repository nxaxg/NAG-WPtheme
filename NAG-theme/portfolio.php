<?php
$page = "Portafolio";
include("header-inner.php"); ?>   
  
   <section class="inner-main">
      <div class="container-fluid">
          <div class="row text-center">
              <!--title page-->
              <h1 class="inner-title col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">Portfolio</h1>
          </div>
      </div>
   </section>
   
   <section class="portfolio-container">
       <div class="portfolio col-lg-12">
          <!--project-->
           <figure class="portfolio-proj col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <img src="img/project-iceland.jpg" alt="" class="img-responsive">
               <figcaption class="text-center">
                   <h3 class="portfolio-title col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">title</h3>
                   <button onclick="location.href='project.php';" class="inner-btn col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">Ver proyecto</button>
               </figcaption>
           </figure>
           <!--project-->
           <figure class="portfolio-proj col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <img src="img/project-energy.jpg" alt="" class="img-responsive">
               <figcaption class="text-center">
                   <h3 class="portfolio-title col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">title</h3>
                   <button onclick="location.href='#linkproject';" class="inner-btn col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">Ver proyecto</button>
               </figcaption>
           </figure>
           <!--project-->
           <figure class="portfolio-proj col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <img src="img/project-ded.jpg" alt="" class="img-responsive">
               <figcaption class="text-center">
                   <h3 class="portfolio-title col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">title</h3>
                   <button onclick="location.href='#linkproject';" class="inner-btn col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">Ver proyecto</button>
               </figcaption>
           </figure>
           <!--project-->
           <figure class="portfolio-proj col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <img src="img/project-cajon.jpeg" alt="" class="img-responsive">
               <figcaption class="text-center">
                   <h3 class="portfolio-title col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">title</h3>
                   <button onclick="location.href='#linkproject';" class="inner-btn col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">Ver proyecto</button>
               </figcaption>
           </figure>
       </div>
       <!--button HIDDEN-->
       <div class="portfolio-btn" hidden="hidden">
           <button class="inner-btn bg-btn col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">Ver más proyectos</button>
       </div>
   </section>
    
<?php include("footer-inner.php"); ?>   