<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include ('partials/head.php');
    ?>
</head>
<body>
    
<div class="divider">
        </div>
        <div class="row">
            <div class="col-lg-12">

                <!--/.aqui empieza el registro de usuarios -->

                <form class="formulario" action="validar/re_formulario.php" method="post">

                    <h1>Registrar usuario</h1>
                    <div class="contenedor">
                        <input type="password" placeholder="id" name="id" readonly="readonly" hidden>
                        <div class="input-contenedor">
                            <input type="text" placeholder="Usuario" name="usuario" value="">
                        </div>
                        <div class="input-contenedor">
                            <input type="password" placeholder="password" name="password" value="">
                        </div>
                        <div class="input-contenedor">
                            <input type="text" placeholder="Nombre de usuario" name="Nombre_usuario" value="">
                        </div>

                        <center>
                            <h2>Tipo de cargo</h2>
                        </center>
                        <select name="select_cargo" class="select-css">
                            <option value="Digitadores">Digitadores</option>
                            <option value="Certificador" selected>Certificador</option>
                        </select>

                        <center>
                            <h2>Estado</h2>
                            <?php
		include_once ("checkbox/botton.php");
		 //se llama el archivo que registrara la accion
	  require ('includ_action/registro.php');
	  ?>
                        </center>
                        <br>
                        <br>
                        <input type="submit" value="Registrar" class="button">
                        <br><br>
                        <p>Al registrar, este usuario tendra acceso al sistema</p>

                    </div>
                </form>
                <!--/.aqui termina el registro de usuarios-->
</body>
</html>