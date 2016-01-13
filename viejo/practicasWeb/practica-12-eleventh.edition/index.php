<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Elevetn Edition :)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
    <link rel='stylesheet' id='camera-css'  href="stylesheets/camera.css">  <!--para el slider-->
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
<style type="text/css">
	#about {
	color: #4083B5;
	}
 </style>
 
  <script type='text/javascript' src="js/jquery.min.js"></script>
  <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
  <script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
  <script type='text/javascript' src='js/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true,
				time: 1000,
				fx: 'simpleFade'
			});
		});
	</script>
 
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
<div class="container">
<?php include("cabecera.inc.php"); ?>
<article id="home">
<!--el slider-->
	<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/road.jpg" data-src="images/slides/road.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/sea.jpg" data-src="images/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/shelter.jpg" data-src="images/slides/shelter.jpg">
                <div class="camera_caption fadeFromBottom">
                    It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                </div>
            </div>
            <div data-thumb="images/slides/thumbs/tree.jpg" data-src="images/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
            </div>
            
            <!--prueba a meter una foto-->
            <div data-thumb="images/slides/thumbs/candado.jpg" data-src="images/slides/candado.jpg">
                <div class="camera_caption fadeFromBottom">
                    Una foto de prueba. <em> Puerta verde</em>
                </div>
            </div>
        </div><!-- #camera_wrap_1 Fin del slider -->

	<section id="trabajos"> 
		<p class="one-third column"><img src="images/fishbone_thumbnail.png" alt="primera"></p>
    	<p class="one-third column"><img src="images/abica_thumbnail.png" alt="teclado"></p>
      	<p class="one-third column"><img src="images/printme_thumbnail1.png" alt="tercera"></p>
    </section>
        
<section id="estudios" class="sixteen columns">
   	  <h1>A web design studio in Glasgow </h1>
   	  <p>Eleventh Edition is a web design studio based in Glasgow, Scotland. We build hand-coded, responsive 		          websites, with a focus on web standards, open source tools and captivating user experiences. </p>
		</section>
<div class="one-third column alpha">
	<h2>WEBSITE DESIGN</h2>
      <p><img src="images/web_circle.png" alt="circulo tags" width="300" height="200" />We build hand-coded, 	        responsive websites, focusing on usability and captivating user experiences. We use web standard         compliant and cross-browser compatible coding, using web standards and open source tools.</p>
</div>
<div class="one-third column">
	<h2>RESPONSIVE WEB DESIGN</h2>
	<p><img src="images/branding_circle.png" alt="branding circulo" width="300" height="200" />Make it easy for 			     your mobile customers to find information. Responsive web design allows your website to adjust to different 	     layouts for a variety of different devices such as iPhones, iPads and Android devices.</p>
</div>
<div class="one-third column omega">
	<h2>WORDPRESS THEMES</h2>
	<p><img src="images/print_circle.png" alt="print circle" width="300" height="200" />Hand-coded, responsive     and quick-loading themes for a variety of open source Content Management Systems and eCommerce platforms such      as WordPress, Fork, Drupal and Magento.</p>
</div>
</section>
<section id="opinion" class="sixteen columns">
    <h3>WHAT OUR CLIENTS SAY</h3>
  	<p>“Eleventh Edition was great to work with. I’m thrilled with how my website, and the mobile version of it,     turned out. Wonderful to work with – patient, persistent and professional. Although we worked at a distance on     the project, it went off without a hitch.”<br> <span class="autor">Dianne Davis, Fishbone Interactive, Canada<span></p>
</section>
</article>
  
<?php include("pie.inc.php"); ?>
</div>


<!-- End Document
================================================== -->
</body>
</html>