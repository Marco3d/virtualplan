<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">Sistema de Notas </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
         <!--  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Ajustes</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li> -->
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <img src="../docentes/<?php echo $_SESSION["imagen"]; ?>" class="img-circle" width="50" height="50" >
           <?php echo $_SESSION["nombre_docentes"] ?> </a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Perfil</a></li>
              <li><a href="salir.php">Salir</a></li>
            </ul>
          </li>
        </ul>
        <!-- form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form> -->
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        
        <li <?php if($Pagina=="INICIO"){echo "class='active'"; } ?> ><a href="home.php"><i class="icon-pencil"></i><span>INICIO</span> </a> </li>
        <li <?php if($Pagina=="EVALUACIÓN"){echo "class='active'"; } ?> ><a href="evaluacion.php"><i class="icon-list-alt"></i><span>EVALUACIÓN</span> </a></li>
        <li <?php if($Pagina=="PRIMER PERIODO"){echo "class='active'"; } ?> ><a href="primerperiodo.php"><i class="icon-list-alt"></i><span>PRIMER PERIODO</span> </a></li>
        <li <?php if($Pagina=="SEGUNDO PERIODO"){echo "class='active'"; } ?> ><a href="segundoperiodo.php"><i class="icon-list-alt"></i><span>SEGUNDO PERIODO</span> </a></li>
        <li <?php if($Pagina=="TERCER PERIODO"){echo "class='active'"; } ?> ><a href="tercerperiodo.php"><i class="icon-list-alt"></i><span>TERCER PERIODO</span> </a></li>
        <li <?php if($Pagina=="CUARTO PERIODO"){echo "class='active'"; } ?> ><a href="cuartoperiodo.php"><i class="icon-list-alt"></i><span>CUARTO PERIODO</span> </a></li>
       
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-bar-chart"></i><span>REPORTES</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">link1</a></li>
            <li><a href="#">link2</a></li>
            <li><a href="#">link3</a></li>
            <li><a href="#">link4</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->