<?php  
  require_once "../controladores/verUsuariosQRControlador.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuarios</title>
</head>

<body>
    <table>
    <tr>
        <td>
            Correo
        </td>
        <td>
            contraseña
        </td>
    </tr> 
    <?php foreach ($a_users as $row): ?>
    <tr>
        <td><?php echo $row['idPromocion']; ?></td>                
        <td><?php echo $row['mail']; ?></td>
    </tr>   
    <?php endforeach ?>                     
    </table>
</body>
</html>