<?php

$servername = "localhost";
$username = "root";
$password = "0";
$dbname = "historial";

$con = mysql_connect($servername,$username,$password) or die ("Problemas al conectar");
mysql_select_db($dbname,$con) or die ("Problema al conectar con la DB");

$registro=mysql_query("SELECT * FROM gps ORDER BY dato DESC  LIMIT 1") 
or die("Problemas en consulta: ".mysql_error());

$reg=mysql_fetch_array($registro);

$lati=$reg['latitud'];
$longi=$reg['longitud'];
$fecha=$reg['fecha'];

?>

<script type="text/javascript">

var lat = <?php echo json_encode($lati); ?>;
var lon = <?php echo json_encode($longi); ?>;
var fecha = <?php echo json_encode($fecha); ?>;

</script>