<?php
require_once 'class/planes.php';
if (isset($_SESSION["iddocentes"]) and isset($_SESSION["usudocente"])) {

    $planes = new Planes();
    $datos = $planes->getplanes();
    
    $planes_docentes = new Planes();
    $datos2 = $planes_docentes->getplanes_docentes();
    
    
    //echo "<pre>";print_r($datos);exit;
    ?>
   
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <?php
            $Pagina = "CREAR PLAN";
            include 'includes/head.php'
            ?>
        </head>
        <body>
            <?php include 'includes/navbar.php' ?>



            <div class="main">
                <div class="main-inner">
                    <div class="container">


<div> <?php include 'includes/mensajes.php' ?></div>

                        <div class="widget widget-table action-table">
                            <div class="widget-header"> <i class="icon-th-list"></i>
                                <h3>Crear Plan de Estudios</h3>
                                
                            </div>
                            <?php if (sizeof($datos2) > 0) { ?>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nombre del Plan</th>
                                                <th>Asignatura</th>
                                                <th>Grado</th>
                                                <th>Docente</th>
                                                <th>Acciones</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- hacemos un recorrido por todos los datos mediante un ciclo -->
                                            <?php foreach ($datos2 as $key) { ?>
                                                <?php if ($key["nombre_docentes"]== $_SESSION["nombre_docentes"]) {
                                                    # code...
                                                 ?>
                                                <tr>
                                                    <td class="center"><?php echo $key["idplanes"]; ?></td> 
                                                    <td class="center"><?php echo $key["nombre_plan"]; ?></td>
                                                    <td class="center"><?php echo $key["asignatura"]; ?></td>
                                                    <td class="center"><?php echo $key["grado"]; ?></td>
                                                    <td class="center"><?php echo $key["nombre_docentes"]; ?></td> 
                                                    
                                                    <td class="center">

                                                        <a class="btn btn-info" href="modificarplanes.php?id=<?php echo $key['idplanes']; ?>">
                                                            <i class="fa fa-pencil-square-o"></i>Editar</a>              

                                                        <a class="btn btn-danger" href="javascript:void(0);" onclick="eliminiar('delplanes.php', '<?php echo $key["idplanes"]; ?>')">
                                                            <i class="fa fa-trash-o"></i> Eliminar</a>
                                                    </td>
                                                </tr>
                                                <!-- Cerramos el primer registro y regresamos hasta terminarlos todos -->
                                            <?php } ?>
                                            <?php } ?>

                                        </tbody>
                                    </table>

                                </div>
                                <!-- /widget-content --> 
                            </div>
                            <!-- Si no encuentra ningún datos entonces... -->
                            <?php
                        } else {
                            ?><div class="alert alert-info"><?php echo "No existen datos para la institución. Por favor,agregarlos."; ?></div><?php
                        }
                        ?>
                        <a href="insertarplanes.php" class="btn btn-default btn-lg active" role="button">Agregar Planes</a> 







                    </div> <!-- /container -->    
                </div> <!-- /main-inner -->      
            </div> <!-- /main -->

            <br>

            <?php include 'includes/footer.php' ?>

        </body>
    </html>
    <?php
} else {
    header("Location: index.php");
}
?>


