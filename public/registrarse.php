<?php
require_once "../controladores/guardarUsuarioControlador.php";

if($_POST){
    if(
        isset($_POST['correo']) && !empty($_POST['correo']) &&
        isset($_POST['clave']) && !empty($_POST['clave'])){
        
        $mail = $_POST['correo'];
	$pws = $_POST['clave'];
        
        $comprobar = comprobarEmail($mail);
        
        if($comprobar['contar']==0){
            
            $registrar = guardarUsuario($mail, md5($pws));
            if($registrar==1){
                echo "Usuario registrado exitosamente. Ingrese a su cuenta ";?>
<script>
    $(document).ready(function(){
        $("#correoReg").val("");
        $("#claveReg").val("");
        $("#password_confirm").val("");
        
    });
</script>
<a href="index.php">aqui!</a>
<?php
            }
            
        }else{
            echo "El correo que ingreso ya existe";
        }
        
        
        
    }else{
        echo "Verifica los campos. Ocurrio un error en envío de datos";
    }
    
}  else {
    echo "Error en envio";
}
