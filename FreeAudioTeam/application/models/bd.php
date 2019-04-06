<?php

/**
 * 
 */
class Bd extends CI_model
{

	public function Consulta(){
		$Consulta=$this->bd->query('SELECT *FROM  Articulos');
		return $Consulta->result();
	}
}

?>