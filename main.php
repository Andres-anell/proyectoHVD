<?php 
/*
session_start();

if (isset($_POST['cerrarsesion'])) {
	unset($_SESSION['usuario']);
	header('location:logout.php');
} 
*/
?>
<?php 
session_start();
if (isset($_SESSION['usuario'])) {
	
?>
<!DOCTYPE html>
<html>

<head>
    <?php include ('partials/head.php'); ?>
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
        <li class="active"><a href="main.php"><em class="fa fa-home">&nbsp;</em> Pagina Principal</a></li>
        <li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
        <li><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
        <li><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em> Elements</a></li>
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
        <li><a href="setting.php"><em class="fa fa-gear">&nbsp;</em> Configuración</a></li>
        <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Cerrar Sesión</a></li>
    </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="index.html">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Main Page</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Main Page</h1>
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