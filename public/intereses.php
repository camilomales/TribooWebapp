<?php  
    session_start();
    require_once "../controladores/verCategoriasControlador.php";
    require_once "../controladores/verInteresesControlador.php";
    
?>

    <center>
   
    <form id="form-int" name="form-int" method="POST" action="interesesAgregar.php">
    	<input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION['sesion']; ?>">
	    <?php foreach ($cat as $row): 
        $res = $interesModelo->verificarInteres($_SESSION['sesion'], $row['idCategoria']);        
        if($res['cantidad']==1){?>
            <input type="checkbox" checked data-usuario="<?php echo $_SESSION['sesion']; ?>" id="<?php echo $row['idCategoria']; ?>" class="cat" name="categoria" value="<?php echo $row['idCategoria']; ?>"/><?php echo utf8_encode($row['nombre']); ?><br> 
        <?php } else {?>	    
	    <input type="checkbox" data-usuario="<?php echo $_SESSION['sesion']; ?>" id="<?php echo $row['idCategoria']; ?>" class="cat" name="categoria" value="<?php echo $row['idCategoria']; ?>"/><?php echo utf8_encode($row['nombre']); ?><br> 
		
	 	<?php } endforeach ?>  
	 	
 	</form>
    <div id="res"></div>
</center>


<script src="js/intereses.js"></script>

