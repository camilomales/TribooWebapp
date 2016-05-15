<?php
session_start();
require_once"../controladores/verUsuarioControlador.php";
//require_once '../controladores/editarPerfilControlador.php';
$usuario = traerInfo($_SESSION['sesion']);

?>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />

<script src="js/editarPerfil.js"></script>


<form id="formEditarPerfil" method="POST" class="validator-form" >
    <input type="hidden" name="idUsuario" id="idUsuario" value="<?=$usuario['idUsuario'];?>"/>
    <div class="form-group">                    
        <label class="control-label">Nombres: </label>
        <input type="text" class="form-control input-box" required name="nombres" id="nombres" value="<?=$usuario['nombres'];?>"/>               
    </div>
    <div class="form-group">                    
        <label class="control-label">Apellidos: </label>
        <input type="text" class="form-control input-box" required name="apellidos" id="apellidos" value="<?=$usuario['apellidos'];?>"/>               
    </div>
    <div class="form-group">                    
        <label class="control-label">Fecha de Nacimiento: </label>
        <input class="form-control input-box" required name="feNacimiento" id="Date" value="<?=$usuario['feNacimiento'];?>" />                       
    </div>
    <div class="form-group">                    
        <label class="control-label">Genero: </label><br>
        <input type="radio" name="sexo" required value="1" <?php if($usuario['sexo']==1) echo "checked"?>><string class="strGenero">Masculino</string><br>
        <input type="radio" name="sexo" required value="2" <?php if($usuario['sexo']==2) echo "checked"?>><string class="strGenero">Femenino</string><br>
       
    </div>
    <div class="form-group">                    
        <label class="control-label">Usuario </label>
        <input type="text" class="form-control input-box" required name="user" id="user" value="<?=$usuario['user'];?>"/>               
    </div>
    <div class="form-group">                    
        <label class="control-label">Página Web </label>
        <input type="text" class="form-control input-box"  name="web" id="web" value="<?=$usuario['web'];?>"/>               
    </div>
    <div class="form-group">                    
        <label class="control-label">Acerca de tí </label>
        <textarea class="form-control input-box" name="acerca"><?=$usuario['acerca'];?></textarea>              
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-lock"></span>
        <label class="control-label">Nueva Contraseña: </label>
        <input type="hidden" name="hpsw" id="hpsw" value="<?=$usuario['pws'];?>"/>
        <input type="password" class="form-control input-box" name="psw" id="psw"/>               
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-lock"></span>
        <label class="control-label">Confirme contraseña :</label>
        <input type="password" class="form-control input-box" name="password_confirm" id="password_confirm"/>   
    </div>
    <div class="form-group">
        <div id="ajaxEditar"></div>   
    </div>
    <div class="btn-group">
        <button type="submit" class="btn btn-success" id="btnRegistrar">
           Actualizar
        </button>
    </div>
</form>
