 <div>
          
            <?php
                if (isset($_GET["mensaje"]) and is_numeric($_GET["mensaje"])) {
                  switch ($_GET["mensaje"]) {
                    case 1:
                    ?><div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     Las notas han sido guardadas correctamente.
                     </div>
                      <?php break;
                     case 2:
                    ?><div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     Cuidado!. Los números ingresados estan fuera del rango.
                     </div>
                      <?php break;    

                  }
                }
              ?>              
               
          
 </div>