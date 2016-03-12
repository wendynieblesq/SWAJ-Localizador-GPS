
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SWAJ - Localizador GPS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>
	


<!---->
<!-- <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiej_4UQcx04uFtHiCUEwvayOa8ERBTs0&callback=initMap"
    async defer></script>
  <script type="text/javascript" src="js/gmaps.js"></script>
  <link rel="stylesheet" type="text/css" href="css/examples.css" />
</head>
<body>
<div id="wrapper">
        <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
               <h1> <a class="navbar-brand" href="maps.php">SWAJ</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	Localizador GPS
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Diego Gómez<i class="caret"></i></span><img src="http://guayacan.uninorte.edu.co/Fotos_Docentes/72242162.jpg" width="60px"; height="60px"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="#"><i class="fa fa-sign-out"></i>Cerrar Sesión</a></li>
		                <li><a href="#"><i class="fa fa-envelope"></i>Contáctanos</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                                             
                <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Localización</a></li>
	
                <li><a href="forms.html" class=" hvr-bounce-to-right"><i class="fa fa-history nav_icon">
                </i>Historial</a></li>
                   
                  
                </ul>
            </div>
			</div>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		  <div class="banner">
		    	<h2>
				<a href="#">Inicio</a>
				<i class="fa fa-angle-right"></i>
				<span>Mapa</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="map-grid">
 	<div class="map-system">
        <div class="span11">
      <div id="map1"></div>
  
	</div>
    <div id="result"><?php include("mapi.php"); ?></div> 
	</div>
    <div class="clearfix"></div>
	</div>
          
	</div>
    
 	<!--//grid-->
		<!---->
        <div class="copy">
            <p> &copy; 2016 SWAJ Team. <i class="fa fa-heart"></i>  </p>	    </div>
		</div>
		<div class="clearfix"> </div>

     
<!---->
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
            
    <script>
        setInterval(function(){
            $('#result').load('mapi.php'); 

        },10000);    
    </script>
<!--API Gmaps-->   
<script src="js/apigmaps.js"> </script>
    
    
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
<!--//scrolling js-->
</body>
</html>

