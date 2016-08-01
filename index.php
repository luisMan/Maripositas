<?php
session_start();  // as section start do this function
include_once("definitions.php");
include_once('contact.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Payasita Mariposa</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="pCss/style.css" rel="stylesheet">
    <link href="pCss/parallax.css" rel="stylesheet">
    <link href="pCss/carousel.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="facebook_userId" style="display:none;"></div>
    <div id="facebook_userName" style="display:none;"></div>
    <div class="wrapper">
      <ul class="nav nav-tabs">
        <li><a style="margin-top:-10px;" href="#"><img src="img/logo.jpg" width="50px" height="50px"></img></a></li>
        <li role="presentation" class=""><a class="link" href="index.php">Home</a></li>
        <li role="presentation" class=""><a  class="link" href="#contactMe">Contacto</a></li>
        <!--<li role="presentation" class="" style="float:right;"><a  class="link1"  href="#" style="color:white;">sign up</a></li>-->
        <li id="user" role="presentation" class="" style="float:right;"><a  class="link2" href="index.php" style="color:white;">
        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button></a></li>
        <li id="logoutlist" role="presentation"  style="float:right;"><a id="logout" href="index.php" style="color:white;"><fb:login-button autologoutlink="true"></fb:login-button></a></li>
      </ul>
      <div class="content">
        <!--===================================SLIDE SHOW ========================================-->
        <div class="slideShow">
          <div id="leftSlide"><span id="SlideIcon1" class="glyphicon glyphicon-chevron-left"></span></div>
          <div id="imgSlide">
            <?php $object->getPhotos(); ?>
          </div>
          <div id ="rightSlide"> <span id="SlideIcon2" class="glyphicon glyphicon-chevron-right"></span></div>
        </div>
        <!--==========================END OF SLIDE SHOW==============================================-->
        <div class="parallax_content">
          
          <!-- Section #1 -->
          <section data-type="background" id="Events" value="30">
            <article>
              <div class="VideosBlog">
                <center><h1 style=" "><mark>"Videos de eventos y actividades con los ninos"</mark></h1></center>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
                      </div>
                      <div class="carousel-caption">
                      </div>
                    </div>
                    <div class="item">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Y1puGG6iPfA"></iframe>
                      </div>
                      <div class="carousel-caption">
                        ...
                      </div>
                      <div class="carousel-caption">
                        ....
                      </div>
                    </div>
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </article>
          </section>
          <section data-type="background" id="Advice" value="20">
            <article>
              <div class="adviceB">
                <center><h1><mark>"Consejos de Mariposita para los ninos"</mark></h1></center>
                
                <div class="images-box">
                  <center><h1><mark>"Imagenes de eventos"</mark></h1></center>
                  <?php $object->getPhotosWithSize(50,50); ?>
                </div>
              </div>
            </article>
          </section>
          <!--============section 3======-->
          <section data-type="background" id="feedBack" value="20">
            <article>
              <!-- events blog implementation -->
              <div class="EventsBlog">
                <form>
                  <fieldset class="form-group">
                    <center><h1 style=" "><mark>"Que tan sastifecho fueron mis servicios"</mark></h1></center>
                    
                    <textarea class="form-control" rows="5" id="comment" placeholder="Comentario de mis servicios pueden ser puesto aqui!"></textarea>
                  </fieldset>
                  <div><h5>coloca la cantidad de extrellas por mi servicio!</h5></div>
                  <label class="checkbox-inline"><input type="checkbox" value="5">5 <span class="glyphicon glyphicon-star"></span></label>
                  <label class="checkbox-inline"><input type="checkbox" value="4">4 <span class="glyphicon glyphicon-star"></span></label>
                  <label class="checkbox-inline"><input type="checkbox" value="3">3 <span class="glyphicon glyphicon-star"></span></label>
                  <label class="checkbox-inline"><input type="checkbox" value="2">2 <span class="glyphicon glyphicon-star"></span></label>
                  <label class="checkbox-inline"><input type="checkbox" value="1">1 <span class="glyphicon glyphicon-star"></span></label>
                  <input style="float:right;" type="submit" name="comentar" id="comentar" value="Submit" class="btn btn-info pull-right">
                </form>
              </div>
            </article>
          </section>
          <!--====section 4===-->
          <section data-type="background" id="ContactMe" value="30">
            <article>
              <div class="ContactForm" id="contactMe">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Mensage enviado . (Si la information del formato estuvo correcto!)</strong></div>
                      <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> <?php echo $result; ?></strong></div>
                    </div>
                    <form role="form" action="contact.php" method="post" >
                      <div class="col-lg-6">
                        <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Se requiere esta informacion </strong></div>
                        <div class="form-group">
                          <label for="InputName">Tu  Nombre</label>
                          <div class="input-group">
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Entrar Nombre" required>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                          </div>
                          <div class="form-group">
                            <label for="InputEmail">Tu Email</label>
                            <div class="input-group">
                              <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Entrar Email" required  >
                              <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                            </div>
                            <div class="form-group">
                              <label for="InputMessage">Mensage</label>
                              <div class="input-group"
                                >
                                <textarea name="InputMessage" id="InputMessage" class="form-control" placeholder="Mensage" rows="5" required></textarea>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                              </div>
                              <div class="form-group">
                                <label for="InputReal">Cuanto es 4+3? (Chekeo de spam)</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Cuanto es 4+3? (Chekeo de spam)" name="InputReal" id="InputReal" required>
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                                </div>
                                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                              </div>
                            </form>
                            <hr class="featurette-divider hidden-lg">
                            <div class="col-lg-5 col-md-push-1">
                              <address>
                                <h3>Office Location</h3>
                                <p class="lead" style="color:white; text-decoration:none;"><a style="color:white;" href="https://www.google.com/maps/place/Santiago+De+Los+Caballeros,+Dominican+Republic/@19.4399935,-70.7430644,12z/data=!3m1!4b1!4m2!3m1!1s0x8eb1c5c838e5899f:0x75d4b059b8768429">Republica Dominicana, Santiago<br>
                                Republica Dominicana, Santiago</a><br>
                                Phone: 8292150651<br>
                              </p>
                            </address>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </section>
              </div>
              <div class="footer">
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p style="color:white;">&copy; 2015 Maripositas, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
              </div>
              <div class="display-img">
                <span style="float:right; color:white;">
                  <span class="glyphicon glyphicon-remove"></span>
                  <div class="row">
                    <div class="col-sm-4" id="img-showcase" style="background-color:lavender;"></div>
                    <div class="col-sm-4" id="img-commnets" style="background-color:white;">
                      
                      
                    </div>
                  </div
                </span>
              </div>
            </div>
            </div><!--end of wrapper -->
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <script src = "js/slideshow.js"></script>
            <script src="js/parallax.js"></script>
            
          </body>
          <div class="topForm">
            <script src="js/facebook.js"></script>
            <script src = "js/button.js"></script>
            <script src = "js/animation.js"></script>
            <script src = "js/recursive.js"></script>
            <<script src="js/vimeo.js" type="text/javascript" charset="utf-8" async defer></script>
          </html>