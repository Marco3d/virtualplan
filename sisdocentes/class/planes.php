<?php

require_once 'principal.php';

class Planes extends Principal{
    private $planes;
    
    public function __construct(){
            $this->planes = array();
           
        }
        
            //***********************TRAER TODOS LOS DATOS************************************************

       public function getplanes(){
			parent::Conectar();
			$consulta = sprintf(
							"select idplanes, nombre_plan, asignatura, grado, iddocente  from planes order by idplanes asc;"
						);
			$result = mysql_query($consulta);
			
			while ($reg = mysql_fetch_assoc($result)) {
				$this->planes[] = $reg;
			}
			
			return $this->planes;
		}
    
}