<?php
require_once 'class/planes.php';
if (isset($_SESSION["iddocentes"]) and isset($_SESSION["usudocente"])) {

    $planes = new Planes();
    $datos = $planes->getplanes();

    $planes_docentes = new Planes();
    $datos2 = $planes_docentes->getplanes_docentes();
    //echo "<pre>";print_r($datos);exit;
    if (isset($_POST["enviado"]) and $_POST["enviado"] == "true") {
        $planes->add_planes();
    }
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

                        <div id="page-wrapper">



                            <div class="row">
                                <div class="col-lg-12">
                                    <h3> Agregar Plan de estudios</h3>

                                    <hr>
                                </div><!-- fin row -->          

                            </div><!-- fin row -->

                            <div class="row">
                                <div class="col-lg-3">

                                    <form role="form" action="" name="" method="post" id="contact-form" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Nombre de la Asignatura</label>
                                            <input class="form-control" name="nombre_plan" title="Ingrese el nombre del plan de estudios  "  required autofocus />
                                        </div> 

                                        <div class="form-group">
                                            <label>Asignatura</label>
                                            <select name="asignatura" >
                                                <option value="MATEMATICAS">MATEMATICAS</option>
                                                <option value="ESPAÑOL">ESPAÑOL</option>
                                                <option value="BIOLOGIA">BIOLOGIA</option>
                                                <option value="SELECCIONAR" selected>Seleccionar</option>
                                            </select>

                                        </div> 

                                        <div class="form-group">
                                            <label>Grado</label>
                                            <select name="grado">
                                                <option value="601JM">601JM</option>
                                                <option value="601JT">601JT</option>
                                                <option value="701JM">701JM</option>
                                                <option value="701JT">701JT</option>
                                                <option value="Seleccionar" selected>Seleccionar</option>
                                            </select>


                                        </div> 

                                        <div class="form-group">
                                            <div class="form-group">
                                                 <label>Docente</label>
                                                <select name="iddocentes">
                                                    <option value="0">Seleccione...</option>
                                                    
                                                        <option value="<?php echo $_SESSION["iddocentes"] ?>"><?php echo $_SESSION["nombre_docentes"] ?></option>

                                                        
                                                </select>
                                            </div> 

                                        </div> 
                                </div> 




                                <div>
                                    <input type="hidden" name="enviado" value="true">
                                    <input type="submit" <button class="btn btn-success" type="button" name="grabar" value="Grabar" title="Grabar">
                                </div>
                                </form>







                            </div><!-- fin row -->          

                        </div><!-- fin row -->







                    </div><!-- /#page-wrapper -->










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





