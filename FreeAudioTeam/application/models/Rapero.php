<?php

class Rapero extends CI_Model{
	public function FreeAudioTeam(){
		$Consulta=$this->db->query('SELECT *FROM rapero');
		return $Consulta->result();
	}

	public function Consulta2(){
		
		$this->db->select('*');
		$this->db->where('id=2');
		$result=$this->db->get('rapero');
		return $result->result();
	}
}

?>