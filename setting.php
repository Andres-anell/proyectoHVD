<?php
session_start();
date_default_timezone_set('america/bogota');
		$fecha=date("Y-m-d-H:i:s");	

if (isset($_POST['cerrarsesion'])) {
	unset($_SESSION['usuario']);
	header('location:login.php');
}

 if (isset($_SESSION['usuario'])) {

        
               
?>


<!DOCTYPE html>
<html>

<head>
    <?php include ('partials/head.php');  ?>
</head>

<body>
    <!--encabezado de la pagina-->
    <?php include ('partials/header-nav.php'); ?>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="main.php"><em class="fa fa-home">&nbsp;</em> Pagina Principal</a></li>
        <li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
        <li><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
        <li><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
        <li><a href="panels.php"><em class="fa fa-history">&nbsp;</em> Historial</a></li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1"
                    class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Item 1
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Item 2
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Item 3
                    </a></li>
            </ul>
        </li>
        <li class="active"><a href="setting.php"><em class="fa fa-gear">&nbsp;</em> Configuración</a></li>
        <li><a href=""><em class="fa fa-power-off">&nbsp;</em> Cerrar Sesión</a></li>
    </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="main.php">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">page blank</li>
            </ol>
        </div> <br>
        <!--/.row-->
        <!--
        <div class="divider">
            <a href="setting.php?value=add"><em class="fa fa-person-plus-fill"></em>Agregar Usuario</a>
        </div>
        -->
        <div class="row">                           
            <div class="col-lg-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                    Agregar Usuario
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Registro de Usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="formulario" action="validar/re_formulario.php" method="post">

                                    <div class="contenedor">
                                        <input type="password" placeholder="id" name="id" readonly="readonly" hidden>
                                        <div class="input-contenedor">
                                            <input type="text" placeholder="Usuario" name="usuario" value="">
                                        </div>
                                        <div class="input-contenedor">
                                            <input type="password" placeholder="password" name="password" value="">
                                        </div>
                                        <div class="input-contenedor">
                                            <input type="text" placeholder="Nombre de usuario" name="Nombre_usuario"
                                                value="">
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php /*
                    if (isset($_GET['value'])){
                        if (empty($_GET['add'])){
                            include ('views/registro_usuarios.php');
                        }
                    }
              */ ?>
            </div> <br><br>
            <div>
                <!--aqui empieza el registro de usuarios -->
                <?php
require("config/crud.php");
$sql=("SELECT * FROM usuarios WHERE borrar=0");
$query=mysqli_query($con,$sql);

echo "<table border=0; class='table table-borderless';>";
echo "<tr  bgcolor=>";
				
		echo "<td>#</td>";
        echo "<td>Usuario </td>";
        echo "<td>Estado</td>";
        echo "<td>Eliminar</td>";
						
echo "</tr>";
              
while($arreglo=mysqli_fetch_array($query)){
    echo "<tr bgcolor=>";
        echo "<td>$arreglo[0]</td>";
        echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[5]</td>";
		echo "<td><a href='usuario/borrar.php?id=$arreglo[0]'><img src='img/eliminar.png' class='img-rounded' width='50px'/></a></td>";
    
    echo "</tr>";
    }
            
    echo "</table>";

?>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.main-->


    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <?php }else{
	header('location:index.php');
} ?>
</body>

</html>