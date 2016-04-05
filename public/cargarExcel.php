
<?php

$radio = $_POST["radio"]; 

$conexion = mysql_connect("localhost","root","");
        mysql_select_db("dbtriboo2",$conexion);

$formatos = array('.jpg','.png', '.doc', '.xls', '.xlsx');


    if(isset($_POST['button'])){
        if(isset($_POST['radio'])){
        //subir la imagen del articulo
        $nameEXCEL = $_FILES['archivo']['name'];
        $tmpEXCEL = $_FILES['archivo']['tmp_name'];
        $extEXCEL = pathinfo($nameEXCEL);
        $urlnueva = "xls/".$nameEXCEL;  
        $ext = substr($nameEXCEL, strrpos($nameEXCEL, '.'));


        if(in_array($ext, $formatos)){
        if(is_uploaded_file($tmpEXCEL)){
            //copy($tmpEXCEL,$urlnueva);    
            move_uploaded_file($tmpEXCEL, "xls/$nameEXCEL");
            echo '<div align="center"><strong>Datos Actualizados con Exito</strong></div>';
        }
        
        }else{
            //echo "formato no admitido";
            echo '<script language="javascript">alert("formato no admitido");</script>'; 
            //header("Location: index.php");

        }
    }

    }

    header ("Location: http://localhost/tribooweb/public/cargarFactura.php");

if(isset($_POST['radio'])){
            require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
            echo "es".$nameEXCEL;
            $objPHPExcel = PHPExcel_IOFactory::load('xls/'.$nameEXCEL);
            $objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true,true);
            foreach ($objHoja as $iIndice=>$objCelda) {
    
                        echo '
                            <tr>
                                <td>'.$objCelda['A'].'</td>
                                <td>'.$objCelda['B'].'</td>
                                <td>'.$objCelda['C'].'</td>
                                <td>'.$objCelda['D'].'</td>
                                <td>'.$objCelda['E'].'</td>
                                
                            </tr>
                        ';
                $id=$objCelda['A'];         $nombre=$objCelda['B'];
                $direccion=$objCelda['C'];  $correo=$objCelda['D'];
                $telefono=$objCelda['E'];       
                                    
                if($_POST['radio']=='s'){
                    $sql="INSERT INTO validaciones  
                    (idValidacion,codValidacion, fechaVenta, montoVenta, idUsuario) 
                        VALUES                                                  ('$id','$nombre','$direccion','$correo','$telefono')";
                        mysql_query($sql);
                }
                    }

            }


            //$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
			//header("refresh:300; url=$self");
         
       
            

?>