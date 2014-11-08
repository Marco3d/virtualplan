<?php

require_once 'principal.php';

class Planes extends Principal {

    private $planes;
    private $planes_docentes;

    public function __construct() {
        $this->planes = array();
        $this->planes_docentes = array();
    }

    //***********************TRAER TODOS LOS DATOS************************************************

    public function getplanes() {
        parent::Conectar();
        $consulta = sprintf(
                "select idplanes, nombre_plan, asignatura, grado, iddocentes FROM planes order by idplanes asc;"
        );
        $result = mysql_query($consulta);

        while ($reg = mysql_fetch_assoc($result)) {
            $this->planes[] = $reg;
        }

        return $this->planes;
    }

    public function getplanes_docentes() {
        parent::Conectar();
        $consulta = sprintf(
                "select                                  p.idplanes,p.nombre_plan,
							 p.asignatura,p.grado,
							 p.iddocentes,
                                                         d.iddocentes,d.nombre_docentes
							 FROM
							 planes as p,
							 docentes as d
							 where
							 p.iddocentes=d.iddocentes
							
							 order by idplanes asc;"
        );
        $result = mysql_query($consulta);
        if ($result) {

            while ($reg = mysql_fetch_assoc($result)) {
                $this->planes_docentes[] = $reg;
            }
        }

        return $this->planes_docentes;
    }

    //**********************AGREGAR DATOS*******************************************************

    public function add_planes() {
        parent::Conectar();

        //verificar que no este repetido el nombre
        $consulta = sprintf("SELECT nombre_plan FROM planes WHERE nombre_plan = %s;",
                      parent::comillas_inteligentes($_POST["nombre_plan"])
        );
        $result = mysql_query($consulta);
       
        //echo mysql_num_rows($result);exit;

        if (mysql_num_rows($result) == 0) {



            //inserta la asignatura en la base de datos
            $consulta = sprintf(
                    "INSERT INTO planes values(null,%s,%s,%s,%s)",
                    parent::comillas_inteligentes($_POST["nombre_plan"]),
                    parent::comillas_inteligentes($_POST["asignatura"]),
                    parent::comillas_inteligentes($_POST["grado"]),
                    parent::comillas_inteligentes($_POST["iddocentes"])
                    
            );
            $result = mysql_query($consulta);
            //echo mysql_query($consulta);exit;

            header("Location: crearplan.php");
        } else {
            header("Location: crearplan.php?mensaje=4");
        }
    }

}
