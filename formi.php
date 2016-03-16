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
                                             
                <li><a href="maps.php" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Localización</a></li>
	
                <li><a href="forms.php" class=" hvr-bounce-to-right"><i class="fa fa-history nav_icon">
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
            
   
<!--API Gmaps-->   
    <script> 
        window.onload = function(){
        var myCenter=new google.maps.LatLng(parseFloat(lat),parseFloat(lon));
        var marker;
        var map;
        var apiKey = 'AIzaSyDiej_4UQcx04uFtHiCUEwvayOa8ERBTs0';
            
            
        var hisrute = [
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "0";
        $dbname = "historial";
        $con = mysql_connect($servername,$username,$password) or die ("Problemas al conectar");
        mysql_select_db($dbname,$con) or die ("Problema al conectar con la DB");
        $start = date($_POST["datestart"]); 
        $end = date($_POST["dateend"]); 
        $query = "SELECT * FROM gps WHERE fecha BETWEEN '$start' AND '$end' ";
        $historico=mysql_query($query)or die(mysql_error());

        while($row = mysql_fetch_assoc($historico)){
                $lat = $row['latitud'];
                $lon = $row['longitud'];
                echo 'new google.maps.LatLng('.$lat.', '.$lon.'),';
            }
        ?>
        ];
            
            
        var polilinea = new google.maps.Polyline({ path: hisrute,   strokeColor: '#c0392b',  strokeOpacity: 1.0,	 strokeWeight: 5	});
        var image = {
            url: 'http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat/32/taxi-icon.png',
            scaledSize: new google.maps.Size(32, 32),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(16, 16)
             }

        var drawingManager;
        var placeIdArray = [];
        var polylines = [10];
        var snappedCoordinates = [];


        function initialize() {
        var mapProp = {
          center:myCenter,
          zoom:17,
          styles: [{"featureType":"water","elementType":"all","stylers":[{"hue":"#7fc8ed"},{"saturation":55},{"lightness":-6},{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"hue":"#7fc8ed"},{"saturation":55},{"lightness":-6},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"hue":"#83cead"},{"saturation":1},{"lightness":-15},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"hue":"#f3f4f4"},{"saturation":-84},{"lightness":59},{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbbbbb"},{"saturation":-100},{"lightness":26},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#ffcc00"},{"saturation":100},{"lightness":-35},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#ffcc00"},{"saturation":100},{"lightness":-22},{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"hue":"#d7e4e4"},{"saturation":-60},{"lightness":23},{"visibility":"on"}]}]
          };
            map=new google.maps.Map(document.getElementById("map1"),mapProp);
            polilinea.setMap(map);
            SetMarker();

        };

        function SetMarker(){

        var myCentr=new google.maps.LatLng(parseFloat(lat),parseFloat(lon));
        marker=new google.maps.Marker({
            position:myCentr,
            icon:image
          });

            marker.setMap(map);
            var contentString = "Latitud: "  + lat +"</br>"+ "Longitud: " +  lon +"</br>"+ "Fecha: " + fecha;

            var infowindow = new google.maps.InfoWindow({
            content: contentString
            });

            marker.addListener('click', function() {
            infowindow.open(map, marker);
            });
            polilinea.setPath(hisrute);
            polilinea.setMap(map);
            map.panTo(myCentr);
            
        }


                initialize();
                }
    </script>
    
    
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
<!--//scrolling js-->
</body>
</html>


