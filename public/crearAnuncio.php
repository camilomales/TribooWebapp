<?php session_start();
require_once '../controladores/crearAnuncioControlador.php';
if(isset($_GET['id'])){
    echo $_GET['id'];
    unset($_SESSION['idAnuncio']);
    echo $_SESSION['idAnuncio'];
}else{

$idUsuario = 1; //despues cambiar por el de sesion(cuando ya se arregle ese problema)
$idAnunciante = 3; //preguntar sobre la tabla idAnunciante o vericar su analisis relacional
if($_GET){
    if(
        isset($_GET['descripcion']) && !empty($_GET['descripcion']) &&
        isset($_GET['daterange']) && !empty($_GET['daterange']) &&
        isset($_GET['palabrasClave']) && !empty($_GET['palabrasClave'])&&
        isset($_GET['valor']) && !empty($_GET['valor']) &&
        isset($_GET['idTipoMensaje']) && !empty($_GET['idTipoMensaje']) &&
        isset($_GET['idLista']) && !empty($_GET['idLista']) &&
        isset($_FILES['rutaImg']['name']) && !empty($_FILES['rutaImg']['name']) 
            
    ){
        $fechaCreacion=date('Y-m-d H:i:s');
        $rango = $_GET['daterange'];
        $posHasta = strpos($rango, ' Hasta ');
        $izquierda = substr($rango, 0, ($posHasta-1));
        $posSepIzq = strpos($izquierda, '|');
        $derecha = substr($rango, ($posHasta+7));
        $posSepDer = strpos($derecha, '|');
        
        $hrPubInicio = str_replace("|", "", $izquierda);
        $hrPubFin = str_replace("|", "", $derecha);
        $fechaInicio = substr($izquierda, 0, ($posSepIzq-1));
        $fechaFin = substr($derecha, 0, ($posSepDer-1));
        $descripcion = $_GET['descripcion'];
        $palabrasClave = $_GET['palabrasClave'];
        $valor = $_GET['valor'];
        $idTipoMensaje = $_GET['idTipoMensaje'];
        $idLista = $_GET['idLista'];
        
        if(
            (isset($_GET['sexo'])) ||
            (isset($_GET['edad'])) ||
            (isset($_GET['cumpleanos'])&& !empty($_GET['cumpleanos'])) ||
            (isset($_GET['linkMasInfo'])) 
        ){
            $sexo = $_GET['sexo'];
            $edad = $_GET['edad'];
            $cumpleanos = $_GET['cumpleanos'];
            $linkMasInfo = $_GET['linkMasInfo'];
            if($sexo=='')$sexo=null;
            if($edad=='')$edad=null;
            //if($cumpleanos==0)$cumpleanos=null;
            if($linkMasInfo=='')$linkMasInfo=null;
            
            $formatoImg = array('.jpg', '.png', '.jpeg','.gif');
            $archivoNom =  $_FILES['rutaImg']['name'];
            $archivoTemp = $_FILES['rutaImg']['tmp_name'];
            $ruta = "./images/screenshots/";
            $extension = substr($archivoNom, strrpos($archivoNom, '.'));
            if(in_array($extension, $formatoImg)){
                $dateUnica=date('Y-m-dHis');
                $archivoNom = $dateUnica.$archivoNom;
                if(move_uploaded_file($archivoTemp, $ruta.$archivoNom)){
                    $rutaImg = "/images/screenshots/".$fechaCreacion.$archivoNom;
                    $anuncio = crearAnuncio($fechaCreacion, $descripcion, $palabrasClave, $valor, $fechaInicio, $fechaFin, $hrPubInicio, $hrPubFin, $linkMasInfo, $sexo, $edad, $cumpleanos, $idTipoMensaje, $idUsuario, $rutaImg, $idLista, $idAnunciante);
                    if($anuncio[0]==1){
                        $_SESSION['idAnuncio']=$anuncio[1];
                        
                        ?>
                        <span id="anuncioSuccess">Anuncio creado exitosamente</span> <br>     
                        <img class="imgSubida" src="<?=$ruta.$archivoNom;?>"/>
                        <a href="crearAnuncio.php?id=<?= $_SESSION['idAnuncio'];?>">id</a>
                        <?php
                    }
                
                }else{
                    echo "Error al subir el archivo";
                }
            }else{
                echo "Formato de archivo no permitido";
            }
        }else{
            
            echo "Problemas al enviar informacion extra";
            
        }
    }else{
        echo "Revise los datos";
    }
}  else {
    echo "Error en envio de datos";
}
}
?>