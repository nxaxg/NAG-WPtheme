<?php
//the title page
$page = 'Title';
include('header-inner.php');?>
   
   <section class="inner-main">
      <div class="container-fluid">
          <div class="row text-center">
              <!--title page-->
              <h1 class="inner-title col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">Acerca de mi</h1>
          </div>
      </div>
   </section>
   
<?php if(the_title() == "About") { include('about.php'); } ?>
<?php if(the_title() == "Servicios") { include('services.php'); } ?>