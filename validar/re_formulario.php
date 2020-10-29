<?php
include('../config/crud.php');

// No mostrar los errores de PHP
error_reporting(0);


$id=$_POST['id'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$nombre_usuario=$_POST['Nombre_usuario'];
$Tipo_usuario=$_POST['select_cargo'];
$Estado=$_POST['numero'];

if (isset($Estado) != "Activo"){
    
   $Estado="Inactivo";

}

//aqui se crean las variables de la accion de el usuario 

$id_action=$_POST['id2'];
$usuario_action=$_POST['usuario2'];
$text_action=$_POST['texto'];
$feca_action=$_POST['fecha'];

//se verifica que el usuario no sea repetido

$verificar_usuarios = mysqli_query($con , "SELECT * FROM usuarios WHERE usuario= '$usuario' ");
if(mysqli_num_rows($verificar_usuarios) > 0 ){
    echo '<script>alert("Este usuario ya se encuentra registrado , intenta con otro")</script> ';
    echo "<script>location.href='../setting.php'</script>";
}else{
//se almacenan los datos de registro
$sqlTabla = "INSERT into usuarios (id, usuario, password, nombre_usuario, Tipo_usuario, Estado) 
VALUES ('$id', '$usuario', '$password',  '$nombre_usuario', '$Tipo_usuario', '$Estado')";

$ejecutado = mysqli_query($con, $sqlTabla );


//aqui se esta almacenando el registro de la accion registrada por el Usuario  

   $sqlTabla2 = "INSERT into reporte (id, usuario, descripcion, fecha) VALUES ('$id_action','$usuario_action','$text_action','$feca_action')";

$ejecutado = mysqli_query($con, $sqlTabla2 );

if(!$ejecutado){
	echo"Hubo Algun Error";
   }else{
	  echo '<script>alert("SE HA REGISTRADO CORRECTAMENTE")</script> ';
	  
      echo "<script>location.href='../setting.php'</script>";
   }

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
