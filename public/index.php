<?php
session_start();
require_once "../controladores/validarPromo.php";
if(isset($_SESSION['sesion'])&& $_SESSION['sesion']!=''){
    header("location:triboo.php");
}
else{
?>
<!doctype html>
<!--                                                         
                                             TRIB
                                            TRIBTR
           TRIBOOTRIBOOTRIBOOT             TRI TRI
       TRIBOOTRIBOOTRIBOOTRIBOOT          TRI  TRI
      TRIBOO     TRI                      TRI  TRI
      TRIBO     TRI                TRIB  TRI  TRI         TRIB         TRIB
      TRIB      TRI               TRIBO  TRI TRIB        TRIBO        TRIBO
               TRIB                TRI  TRI  TRI          TRI          TRI
               TRI                      TRI TRI
              TRIB   TRI  BOO     TRI   TRIBO TRIB      TRIBOOT      TRIBOOT
             TTRIB   TRI BOO    TRIB  TRIBOOTRIBOO    TRIBOOTRIBO TRIBOOTRIBOO 
             TRIB   TRIBOOTR    TRIB  TRIBO   TRIB   TRI     TRI TRIBOO   TRI TRI
            TRIBO   TRIBO TRI    TRI  TRIB      TRI  TRI    TRI   TRI     TRI   TR
            TRIB    TRIBO TRIBOOTRIB  TRIB      TRI  TRI    TRI   TRI     TRI    T
           TRIBO    TRIB   TRIBTRIB   TRIB     TRI.TRIBO    TRI   TRI     TRI 
           TRIB     TRIB        TRI   TRIB    TRIBOOTRIBO  TRI    TRI   TRI
           TRIB     TRI         TRIBOOTRIBOOTRIBOOT   TRIBOOT     TRIBOOTR    
           TRI      TR           TRIB    TRIBOO        TRIBO        TRIB            
                                                       
-->
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Reg&iacute;strate en nuestra comunidad. Vive tu ciudad, mueve las ideas">
<meta name="keywords" content="comunidad, mercadeo relacional, triboo, Pasto, momentos, influencers, local, conoce, recompensas,triboo, etriboo, e-triboo, e triboo, pasto, ciudad, influencers, comunidad, parquesoftpasto, empredimiento, colombia, pasto">
<meta name="author" content="Equipo Triboo: www.e-triboo.com">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- SITE TITLE -->
<title>Triboo - Vive tu ciudad, mueve tus ideas</title>

<!-- =========================
      FAV AND TOUCH ICONS  
============================== -->
<link rel="icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- =========================
     STYLESHEETS   
============================== -->
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- FONT ICONS -->
<!-- IonIcons -->
<link rel="stylesheet" href="assets/ionicons/css/ionicons.css">

<!-- Font Awesome 
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
-->

<!-- Elegant Icons -->
<link rel="stylesheet" href="assets/elegant-icons/style.css">
<!--[if lte IE 7]><script src="assets/elegant-icons/lte-ie7.js"></script><![endif]-->



<!-- CAROUSEL AND LIGHTBOX -->
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">

<!-- COLORS -->
<link rel="stylesheet" href="css/colors/blue.css"> <!-- DEFAULT COLOR/ CURRENTLY USING -->
<!-- <link rel="stylesheet" href="css/colors/red.css"> -->
<!-- <link rel="stylesheet" href="css/colors/green.css"> -->
<!-- <link rel="stylesheet" href="css/colors/purple.css"> -->
<!-- <link rel="stylesheet" href="css/colors/orange.css"> -->
<!-- <link rel="stylesheet" href="css/colors/blue-munsell.css"> -->
<!-- <link rel="stylesheet" href="css/colors/slate.css"> -->
<!-- <link rel="stylesheet" href="css/colors/yellow.css"> -->

<!-- CUSTOM STYLESHEETS -->
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/estilostriboo.css">
<!-- RESPONSIVE FIXES -->
<link rel="stylesheet" href="css/responsive.css">

<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
<![endif]-->

<!-- ****************
      After neccessary customization/modification, Please minify HTML/CSS according to http://browserdiet.com/en/ for better performance
     **************** -->  
     <script type="javascript">
     	$(document).ready(function() {
    		$( "#foo" ).slideUp( 300 ).delay( 10000 ).fadeIn( 400 );
		});
     </script>
      <link href="css/video.css" type="text/css" rel="stylesheet" />
      <script src="js/jquery.min.js"></script>

</head>

<body>
<!--Los dos scripts siguientes son para conectar con Facebook-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '899793666743142',
      xfbml      : true,
      version    : 'v2.4'
    });
  }; 
</script>
<!--<div id="fb-root"></div>-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5&appId=899793666743142";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--script para Twitter-->
<script>!function(d,s,id){
	var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
	if(!d.getElementById(id)){
		js=d.createElement(s);
		js.id=id;
		js.src=p+"://platform.twitter.com/widgets.js";
		fjs.parentNode.insertBefore(js,fjs);
	}
}(document,"script","twitter-wjs");
</script>

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>

<!-- =========================
     HEADER   
============================== -->
<header id="home">

<!-- COLOR OVER IMAGE -->
<div class="color-overlay">
	
	<div class="navigation-header">					
		<!-- ONLY LOGO ON HEADER -->
		<div class="navbar non-sticky">
			
			<div class="container">
				
				<div class="navbar-header">
					<img src="images/logo@2x.png" alt="">
				</div>				
				<ul class="nav navbar-nav navbar-right social-navigation">
                			<li><i style="color:#ffffff">Encu&eacute;ntranos:&nbsp;&nbsp;</i></li>
                			<li><a href="https://www.facebook.com/e.triboo" target="_blank"><span class="social_facebook_square"></span></a></li>
							<li><a  href="https://twitter.com/ideatriboo" target="_blank"><span class="social_twitter_square"></span></a></li>
				</ul>
				
			</div>
			<!-- /END CONTAINER -->
			
		</div>
		<!-- /END ONLY LOGO ON HEADER -->
		
	</div>
			<!-- HEADING, FEATURES AND REGISTRATION FORM CONTAINER -->
	<div class="container">
		
		<div class="row">			
			<!-- LEFT - HEADING AND TEXTS -->
			<div class="col-md-10 col-md-offset-1 intro-section">
				
				<h1 class="intro">
				Valor real a tus <span class="strong colored-text">experiencias</span> y <strong>momentos</strong>
				</h1>
				
				<p class="sub-heading">
				    Conectamos a las personas con las marcas a trav&eacute;s de recompensas por vivir situaciones que realmente les interesa.<br>
                  
				</p>

			</div>
			
			
			
		</div>
		
		<!-- Ingreso FORM -->
		<div class="row">
		    <div class="col-md-6 col-md-offset-3">		        
		        <div class="sf-container">								
					<form id="ingreso" class="subscription-form form-inline" role="form">
						<!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
						<h6 class="subscription-success"></h6>
						<h6 class="subscription-error"></h6>	
						<!-- NUEVO CODIGO -->
						<!-- Ingreso a registro de usuarios -->
						<input type="email" name="id-email" id="id-email"  placeholder="Tu e-mail" class="form-control input-box">
						<input type="password" name="id-password" id="id-password" placeholder="Tu contraseña" class="form-control input-box">
						<button type="submit" class="btn standard-button" id="rf-submit" name="submit">INGRESAR</button><br>
                                                <i style="color:#ffffff">No te han invitado aún, <a id="linkRegistro" data-toggle="modal" data-target="#modal-registrarse">reg&iacute;strate!</a></i>
						
					</form></br>
					<div class="fb-like" data-href="https://www.facebook.com/ideastriboo" data-layout="box_count" data-action="like" data-show-faces="false" data-share="true"></div>
					<!--</br><a href="https://twitter.com/ideastriboo" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @ideastriboo</a>-->
 
			</div>		     

		    </div>
		</div>   
		<!--
		<div class="fb-page" data-href="https://www.facebook.com/ideastriboo" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ideastriboo"><a href="https://www.facebook.com/ideastriboo">Ideastriboo</a></blockquote></div></div>
		</br></br>
		
		<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/ideastriboo" data-widget-id="659370731638255616" data-lang="es">Tweets por el @ideastriboo.</a>
		-->
	</div>
	
	<!-- HEADING, FEATURES AND REGISTRATION FORM CONTAINER >			
	<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p-->  
    <!-- class="copyright">
		 ©2015 <a href="http://www.e-triboo.com">e-Triboo</a>
	</div-->

</div>
</header>

<div class="modal fade" id="modal-registrarse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel"><span class="strong colored-text">Registrarse en Triboo </span> </h3>
      </div>
      <div class="modal-body">
          <form  id="formRegistro" method="post" class="validator-form" action="guardarInteraccion.php">
            <div class="form-group">
                <span class="glyphicon glyphicon-envelope"></span>                
                <label class="control-label">Correo </label>
                <input type="email" class="form-control input-box" name="correoReg" id="correoReg"/>               
            </div>
            <div class="form-group">
                <span class="glyphicon glyphicon-lock"></span>
                <label class="control-label">Contraseña </label>
                <input type="password" class="form-control input-box" name="claveReg" id="claveReg"/>               
            </div>
            <div class="form-group">
                <div id="respuestaReg"></div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn standard-button btn-sm" id="btnRegistrar">
                   Registrarse
                </button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
<!-- =========================
     SCRIPTS   
============================== -->


<script>
/* =================================
   LOADER                     
=================================== */
// makes sure the whole site is loaded
jQuery(window).load(function() {
	"use strict";
        // will first fade out the loading animation
	jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(1000).fadeOut("slow");
})

</script>
<script src="js/registrarUsuario.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.localScroll.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/simple-expand.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/custom.js"></script>

<!-- ****************
      After neccessary customization/modification, Please minify JavaScript/jQuery according to http://browserdiet.com/en/ for better performance
     **************** -->
</body>
</html>
<?php } ?>