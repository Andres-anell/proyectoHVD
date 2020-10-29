<?php
//error_reporting(0);
session_start();
include_once('../config/crud.php');
$thime=time();
date_default_timezone_set('america/bogota');
		$fecha=date("Y-m-d-H:i:s",$thime);	

$feca_action = $fecha;
$usuario_action = $_SESSION['usuario'];
$texto_action ="Inicio de session";

//aqui se esta almacenando el registro de la accion de inicio de sesion del Usuario  

$sqlTabla2 = "INSERT into reporte (usuario, descripcion, fecha) VALUES ('$usuario_action','$texto_action','$feca_action')";

$ejecutado = mysqli_query($con, $sqlTabla2);

if(!$ejecutado){
	echo"Hubo Algun Error";
   }else{
	    echo "<script>location.href='../main.php'</script>";
   }

/*
$sql= "INSERT INTO reporte VALUES('$registro')";
$ejecutar=mysqli_query($con,$sql);
if(!$ejecutar){
	echo"Hubo Algun Error";
   }else{
      
   }
*/
  ?>
