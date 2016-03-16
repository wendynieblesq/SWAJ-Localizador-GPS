
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
<link rel="stylesheet" href="css/pikaday.css">
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
		<link rel="stylesheet" href="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/css/material.min.css" />
		<link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
		<script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
		<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-material-datetimepicker.js"></script>
    
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
    <script src="http://maps.googleapis.com/maps/api/js"></script>
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
	
                <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-history nav_icon">
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
				<a href="index.html">Inicio</a>
				<i class="fa fa-angle-right"></i>
				<span>Historial</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 		
<!----->

<!---->

<!---->

<!---->
  <div class="grid-form1">
  	       <h3>Acotar Base de Datos</h3>

  <div class="panel-body">
					<form role="form" class="form-horizontal" action="formi.php" method="post">
                   		<div class="form-group">
							<label for="start" class="col-md-2 control-label">Inicio</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-calendar-o"></i>
									</span>
									<input type="text" class="form-control" placeholder="Fecha de inicio" id="datestart" name="datestart">
								</div>
							</div>
						</div>
                        
                        
                        
						<div class="form-group">
							<label class="col-md-2 control-label">Final</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-flag"></i>
									</span>
									<input type="text" class="form-control" id="dateend" placeholder="Fecha de finalización" name="dateend">
								</div>
							</div>
						</div>
                      
                                               
                        </div>
						
					
	</div>
	<div class="bs-example" data-example-id="form-validation-states-with-icons">

     
      
        <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
      </div>
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<input type="submit" id="cargar" class="btn-primary btn" name="cargar" value ="Cargar">
				<button class="btn-inverset btn">Cancel</button>
			</div>
		</div>
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->
		<!---->
<div class="copy">
            <p> &copy; 2016 SWAJ Team. <i class="fa fa-heart"></i>  </p>	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
    <script src="js/pikaday.js"></script>
    
    <script type="text/javascript">
        function topost(){
            var startDate = document.getElementById("datestart").value;
            var endDate = document.getElementById("dateend").value;
                        
            $.post( "formi.php", { startDate: startDate, endDate: endDate}));
        }
    </script>
    
     <script>
    var startDate,
        endDate,
        
        updateStartDate = function() {
            startPicker.setStartRange(startDate);
            endPicker.setStartRange(startDate);
            endPicker.setMinDate(startDate);
        },
        updateEndDate = function() {
            startPicker.setEndRange(endDate);
            startPicker.setMaxDate(endDate);
            endPicker.setEndRange(endDate);
        },
        startPicker = new Pikaday({
            field: document.getElementById('start'),
            minDate: new Date(2016, 0, 1),
            maxDate: new Date(2020, 12, 31),
            onSelect: function() {
                startDate = this.getDate();
                updateStartDate();
            }
        }),
        endPicker = new Pikaday({
            field: document.getElementById('end'),
            minDate: new Date(2016, 0, 1),
            maxDate: new Date(2020, 12, 31),
            onSelect: function() {
                endDate = this.getDate();
                updateEndDate();
            }
        }),
        _startDate = startPicker.getDate(),
        _endDate = endPicker.getDate();

        if (_startDate) {
            startDate = _startDate;
            updateStartDate();
        }

        if (_endDate) {
            endDate = _endDate;
            updateEndDate();
        }
    </script>  
    
    <script type="text/javascript">
		$(document).ready(function()
		{
           
            
			$('#dateend').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'YYYY-MM-DD HH:mm:00', shortTime : true
			});
            
			$('#datestart').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'YYYY-MM-DD HH:mm:00', shortTime : true
			}).on('change', function(e, date)
			{
				$('#dateend').bootstrapMaterialDatePicker('setMinDate', date);
			});
            
			$('#min-date').bootstrapMaterialDatePicker({ format : 'YYYY-MM-DD HH:mm:00', minDate : new Date() });
			$.material.init()
		});
		</script>   
    

    
</body>
</html>

