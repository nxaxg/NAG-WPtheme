<?php
$page = "Proyecto";
include("header-inner.php"); ?>
   
   <section class="main-project">
       <div class="wrap-project">
          <!--thumbnail-->
           <style>
                .wrap-project{
                    position: absolute;
                    content: "";
                    height: 100%;
                    width: 100%;
                    background: url('img/project-iceland.jpg');
                    background-size: cover;
                    background-attachment: fixed;
                    background-position: center;
                    z-index: -1;
                    transition: 5s ease;
                    overflow: hidden;
                }
            </style>
       </div>
       <div class="project text-center col-lg-12">
           <!--title-->
            <div class="row">
                <h1 class="project-title col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">Titulo proyecto</h1>
            </div>
            <div class="row">
                <div class="project-link text-center col-lg-12">
                   <!--link a proyecto-->
                    <a href="#" title="Link a proyecto"><span class="fa fa-link"></span></a>
                </div>
            </div>
            <div class="row">
               <!--tags-->
                <ul class="project-tags list-inline col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <li><a href="#">Html5</a></li>
                    <li><a href="#">Css3</a></li>
                    <li><a href="#">JS</a></li>
                    <li><a href="#">Php</a></li>
                </ul>
            </div>
            <div class="row">
               <!--fecha-->
                <p class="project-date"><span class="fa fa-calendar-o"></span> Diciembre, 2000</p>
            </div>
       </div>
   </section>
   
   <section class="project-description">
       <div class="container-fluid col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
           <div class="title-description text-right col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <h3>Descripción:</h3>
           </div>
           <div class="inner-par content-description col-lg-9 col-md-9 col-sm-12 col-xs-12">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate harum, atque similique est consectetur tempore eum quaerat. Tenetur esse, provident laboriosam. Vel aut, neque odit deserunt! Qui vero eaque blanditiis.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis earum temporibus, error laboriosam iusto dolore! Impedit harum, provident deleniti! Hic consequatur, delectus dolor earum. Necessitatibus officia, sequi veniam! Quo, quidem!</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt iste explicabo dolorem earum, aliquam eaque minus quisquam cumque quis. Iusto similique eligendi quis tempore, quasi provident odit quos cum ipsum.</p>
           </div>
       </div>
   </section>
   
   <section class="project-slider">
       <div id="slider" class="col-lg-12">
           <ul>
               <li><img src="img/project-iceland.jpg" alt="" class="img-responsive"></li>
               <li><img src="img/project-iceland.jpg" alt="" class="img-responsive"></li>
               <li><img src="img/project-iceland.jpg" alt="" class="img-responsive"></li>
               <li><img src="img/project-iceland.jpg" alt="" class="img-responsive"></li>
           </ul>
       </div>
   </section>
   
   <section class="project-info">
       <div class="wrap-pinfo"></div>
       <div class="project-data">
          <div class="row text-center">
              <h2 class="inner-subtitle col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">Variables estimadas</h2>
          </div>
           <div class="container text-center">
               <div class="pdata col-lg-3 col-md-3 col-sm-3 col-xs-12">
                   <h4>10 días</h4>
               </div>
               <div class="pdata col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h4>100hrs.</h4>
               </div>
               <div class="pdata col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h4>$100.000</h4>
               </div>
               <div class="pdata col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <h4>$500USD</h4>
               </div>
           </div>
       </div>
   </section>
   
<?php include('footer-inner.php'); ?>