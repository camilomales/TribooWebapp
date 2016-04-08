
<?php
require_once "../controladores/verExcelFactura.php";
require_once "../controladores/GuardarFacturaControlador.php"; 

$idUsuario=$_POST['idUsuario'];
 
$radio = $_POST["radio"]; 

$conexion = mysql_connect("localhost","root","");
        mysql_select_db("dbtriboo2",$conexion);

 $idUsuario=$_POST['idUsuario'];
echo "es=".$idUsuario;

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

$tamaño=1;

 



if(isset($_POST['radio'])){
            require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
            echo "es".$nameEXCEL;
            $objPHPExcel = PHPExcel_IOFactory::load('xls/'.$nameEXCEL);
            $objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
            

            $resultado = mysql_query("SELECT * FROM validaciones");
				$result = mysql_num_rows($resultado);

				if($result==0){
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
                $id=$objCelda['A'];         $numFactura=$objCelda['B'];
                $fechaFactura=$objCelda['C'];  $montoFactura=$objCelda['D'];
                $telefono=$objCelda['E'];    
                
                ///comprobar cuantas filas hay en la tabla
               
                if($_POST['radio']=='s'){
				
				
                	while ($tamaño<=$iIndice) {

                		$guardar = guardarFactura($numFactura, $fechaFactura, $montoFactura, $idUsuario);
                        $tamaño++;

                        }          					
                }
          
                    }
				}else{

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
                $id=$objCelda['A'];         $numFactura=$objCelda['B'];
                $fechaFactura=$objCelda['C'];  $montoFactura=$objCelda['D'];
                $telefono=$objCelda['E'];    
                
                ///comprobar cuantas filas hay en la tabla
               
                if($_POST['radio']=='s'){
				
				$entrar = false;

                	while ($tamaño<=$iIndice) {
                		foreach ($cat as $row) {
                			if($numFactura==$row['codValidacion']){
                				$entrar=true;              				
                			}
                		}

                		if($entrar!=true){
                			$guardar = guardarFactura($numFactura, $fechaFactura, $montoFactura, $idUsuario);
                		}

                        $tamaño++;

                        }          					
                }
          
                    }

				}

          
                    	
                    	/*  
                    for($i=0; $i <= $iIndice; $i++){
						$sql1="UPDATE validaciones SET idUsuario='$idUsuario'";
						 mysql_query($sql1);
                    }
				*/

            }


         //   $self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
          //  header("refresh:300; url=$self");

?>
