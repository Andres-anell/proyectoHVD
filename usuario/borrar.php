<?php


extract($_GET);
require("../config/crud.php");

error_reporting();
session_start();
include_once('../config/crud.php');
$thime=time();
date_default_timezone_set('america/bogota');
		$fecha=date("Y-m-d-H:i:s",$thime);	

$feca_action = $fecha;
$usuario_action = $_SESSION['usuario'];
$texto_action ="Borro usuario";



$sql="SELECT * FROM usuarios WHERE id=$id";
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$ressql=mysqli_query($con,$sql);
while ($row=mysqli_fetch_row($ressql)){
        $borrar = $row[6];
        $id = $row[0];
}
	/*$verificar_usuarios = mysqli_query($con , "SELECT * FROM usuarios WHERE usuario= '$usuario' ");
if(mysqli_num_rows($verificar_usuarios) > 0 ){
    echo '<script>alert("Este usuario ya se encuentra registrado , intenta con otro")</script> ';
    echo "<script>location.href='../usuarios.php'</script>";
}else{ */
if($borrar == 0){

$borrar = 1;

}

    $sentencia="UPDATE usuarios SET borrar='$borrar' WHERE id='$id'";
    $resent=mysqli_query($con,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
        header("location: setting.php");
        
    }else {
        
        $sqlTabla2 = "INSERT INTO reporte ( usuario, descripcion, fecha) VALUES ('$usuario_action','$texto_action','$feca_action')";

$ejecutado = mysqli_query($con, $sqlTabla2);

if(!$ejecutado){
	 echo '<script>alert("Hubo Algun Error")</script> ';
   }

		echo '<script>alert("USUARIO ELIMINADO")</script> ';
		echo "<script>location.href='../setting.php'</script>";
		
}

//aqui se esta almacenando el registro de la accion registrada por el Usuario  




/*
$sql= "INSERT INTO reporte VALUES('$registro')";
$ejecutar=mysqli_query($con,$sql);
if(!$ejecutar){
	echo"Hubo Algun Error";
   }else{
      
   }
*/
  ?>

