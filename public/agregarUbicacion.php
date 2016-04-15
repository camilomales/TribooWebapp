<?php session_start();
require_once '../controladores/agregarUbicacionControlador.php';

if($_POST){
    $fechaCreacion=date('Y-m-d');
    $idMensaje = $_SESSION['idAnuncio'];
    $val = array("cx", "cy", "direccion");
    foreach ($val as $key){
        if(isset($_POST[$key]) && !empty($_POST[$key])){
            $exito = 1;
        }else{
            $exito = 0;
        }
    }
    if($exito == 1){
        extract($_POST, EXTR_PREFIX_SAME, "wddx");
       
        $agregar = agregarUbicacion($direccion, $cx, $cy, $fechaCreacion, $idMensaje);
        if($agregar == 1){
            if(isset($_POST['tipo'])){?>
                <script>alert("Ubicación agregada, si lo desea puede agregar otra ubicación");
                
                </script>
                <?php
            }else{
         ?>
            <script>alert("Ubicación agregada");
            location = "misMomentos.php";
            </script> 
            <?php
            }
        }else{
            echo "Ocurrio un error";
        }
        //unset($_SESSION['idAnuncio']);
        //$preestablecidosModelo->actualizarAlarma($temperatura, $humedad, $humedadMin);        
    }else{ ?>
        <script>alert("Alguno de los datos no se enviaron");
            
        </script> <?php
    }
}else{
    echo "Error en envio de datos";
}
   

