<?php 

session_start();
if(isset($_SESSION['usuario'])){
	

	header('Location: main.php');

}

include 'config/Conexion.php';
include 'models/UserModel.php';
include 'controllers/UserController.php';

?>

	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link rel="stylesheet" href="css/r.scss">
</head>
<body>
		<div class="wrapper fadeInDown">
  				<div id="formContent">
	  						 <!-- Icon -->
	  					 <div class="fadeIn first">
							</div>
					<!-- Tabs Titles -->
							<h2 class="active"> Sign In </h2>
							<h2 class="inactive underlineHover">Sign Up </h2>
							<div><img src="" alt="" srcset=""></div>
   					 <!-- Login Form -->
   					 <form method="POST" action=""> 
      						<input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="usuario">
	  						<input type="text" id="contraseña" class="fadeIn third" name="contraseña" placeholder="contraseña">
	  					<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Remember Me">recordarme
							</label>
						</div>
     							 <input type="submit" name="submit" class="fadeIn fourth" value="INICIAR SESION">

   							 <!-- Remind Passowrd -->
 								 </div>
							</div>
					</form>
<?php 

include "partials/footer.php";

?>

