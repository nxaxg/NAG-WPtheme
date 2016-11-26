<?php
$page = "Contacto";
include('header-inner.php'); ?>
   
   <section class="inner-main">
      <div class="container-fluid">
          <div class="row text-center">
              <!--title page-->
              <h1 class="inner-title col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">Contacto</h1>
          </div>
      </div>
   </section>
   
   <section class="contacto">
      <div class="container">
          <div class="mensaje col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="title-description col-lg-12">
                  <h3>Hablemos</h3>
              </div>
              <div class="inner-par">
                  <p>Quizás soy un poco tímido, pero siempre estoy abierto a comentarios, consultas o saludos. Ponte en contacto conmigo y trataré de comunicarme contigo lo más pronto posible.</p>
              </div>
              <div class="rrss text-center col-lg-12">
                    <ul class="list-inline rs-list">
                        <li>
                            <a href="https://cl.linkedin.com/in/nxaxg" class="fa fa-linkedin" title="Link a Linkedin" target="_blank"></a>
                        </li>
                        <li>
                            <a href="https://github.com/nxaxg" class="fa fa-github" title="Link a Github" target="_blank"></a>
                        </li>
                        <li>
                            <a href="https://www.behance.net/nxaxg" class="fa fa-behance" title="Link a Behance" target="_blank"></a>
                        </li>
                    </ul>
                </div>
          </div>
          <!--web form-->
          <div class="formulario col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <form method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" id="cNombre" name="nombre" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="cMail" name="mail" placeholder="Mail">
                  </div>
                  <div class="form-group">
                      <textarea class="form-control" rows="3" id="cMensaje" name="mensaje" placeholder="Mensaje"></textarea>
                  </div>
                  <!--captcha-->
                  <div class="form-group">
                      <div class="cap text-center col-lg-8 col-lg-offset-2">
                          <div class="g-recaptcha" data-sitekey="6Lfj8AwUAAAAALZcLhHmr-6F6-eTUA-T0MJVmbFL"></div>
                      </div>
                  </div>
                  <div class="form-group">
                      <button type="submit" name="enviar" class="inner-btn col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">Enviar</button>
                  </div>
              </form>
          </div>
      </div>
   </section>
    
<?php include('footer-hidden.php'); ?>