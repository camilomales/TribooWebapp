<?php
require_once"../controladores/verUsuarioControlador.php";
$usuario = traerInfo($_SESSION['sesion']);
?>

<a href="triboo.php" class="logo"><img src="images/logo-triboo.png"></a>
<!--logo end-->
<div class="top-nav notification-row">                
    <!-- notificatoin dropdown start-->
    <ul class="nav pull-right top-menu">

        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                    <img alt="" src="images/user.png">
                </span>
                <span class="username"><?=$usuario['nombres']." ".$usuario['apellidos'];?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <div class="log-arrow-up"></div>
                <li class="eborder-top">
                    <a class="item-menu" data-toggle="modal" data-target="#modal-editar-perfil" id="editarPerfil"><i class="icon_profile"></i> Editar perfil</a>
                </li>
                <li>
                    <a class="item-menu" data-toggle="modal" data-target="#modal-intereses" id="verIntereses"><i class="icon_mail_alt"></i> Tus intereses</a>
                </li>
                 <li>
                    <a class="item-menu" id="btn-anuncio" data-toggle="modal" data-target="#modal-crear-anun"><i class="icon_mail_alt"></i> Crear Anuncio</a>
                </li>
                <li>
                    <a href="salir.php"><i class="icon_key_alt"></i> Cerrar sesión</a>
                </li>
                <li>
                    <a href="#"><i class="icon_clock_alt"></i>Ayuda</a>
                </li>
                <li>
                    <a href="#"><i class="icon_chat_alt"></i> Inf. un problema</a>
                </li>

            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!-- notificatoin dropdown end-->
</div>
