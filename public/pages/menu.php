<?php
require_once"../controladores/promocionesActualesControlador.php";
?>
<div class="medio">
    <div class="row">
      <div class="toggle-nav">
              <div class="icon-reorder tooltips" data-original-title="Menu" data-placement="bottom"><i class="icon_menu"></i>
              </div><spam><?=$numeroPromos['cantidad'];?> <?php if($numeroPromos['cantidad']==1){ echo "Promocion Actual";} else{ echo "promociones actuales";}?></spam>
      </div>
    </div>
      
    <hr>
</div>
      <!--header end-->

      <!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">

            <li class="active">
                <a href="triboo.php"class="">
                    <i class="icon_star_alt"></i>
                    <span><b>Promociones</b></span>
                </a>
            </li>

            <li class="active">
                <a href="misMomentos.php" class="">
                    <div class="verPromos">
                      <i class="icon_document_alt"></i>
                      <span>Mis Momentos</span>                          
                    </div>                          
                </a>                      
            </li>                 
            <li class="active">
                <a href="misGustos.php" class="">
                    <div class="verPromos">
                      <i class="icon_document_alt"></i>
                      <span>Mis Gustos</span>                          
                    </div>  
                </a>                      
            </li>
            <li class="active">
                <a href="misMensajesCercanos.php" class="">
                    <div class="verPromos">
                      <i class="icon_document_alt"></i>
                      <span>Promociones Cercanas</span>                          
                    </div>  
                </a>                      
            </li>            
            <li class="active">
                <a href="misEventos.php" class="">
                    <div class="verPromos">
                      <i class="icon_document_alt"></i>
                      <span>Mis Eventos</span>                          
                    </div>  
                </a>                      
            </li>
            <li class="active">
                <a href="misCreditos.php" class="">
                    <div class="verPromos">
                      <i class="icon_document_alt"></i>
                      <span>Mis Creditos</span>                          
                    </div>  
                </a>                      
            </li>            
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

