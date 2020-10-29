
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="main.php"><span>Aplicativo </span>Admin</a>
        <!--cambiar nombre del aplicativo-->
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <em class="fa fa-envelope"></em><span class="label label-danger">0
                        <!--codificar las cantidad de notificaciones-->
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <!--codificar para los mensajes-->
                    <li class="divider"></li>
                    <li>
                        <div class="all-button"><a href="#">
                                <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                            </a></div>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <em class="fa fa-bell"></em><span class="label label-info">0
                        <!--codificar para la cantidad de notificaciones-->
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <!--coficar las notificaciones-->
                </ul>
            </li>
        </ul>
    </div>
</div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $_SESSION['usuario']; ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>