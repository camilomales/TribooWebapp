<?php  
  require_once "../controladores/consultarUsuarioControlador.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta usuario</title>
</head>

<body>
    <table>
    <tr>
        <td>
            Correo
        </td>
        <td>
            Contraseña
        </td>
    </tr> 
    <?php foreach ($a_users as $row): ?>
    <tr>
        <td><?php echo $row['mail']; ?></td>                
        <td><?php echo $row['pws']; ?></td>
    </tr>   
    <?php endforeach ?>                     
    </table>
</body>
</html>