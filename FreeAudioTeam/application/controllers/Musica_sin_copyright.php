<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musica_sin_copyright extends CI_Controller{


	public function index(){
		$this->load->view('index');
	}
	
	public function inicio(){
		$this->load->view('inicio');
	}
	public function conexion(){
		$this->load->view('conexion');
	}
	
	public function usuario(){
		$this->load->view('usuario');
	}
	public function admin(){
		$this->load->view('admin');
	}

	public function cuentas(){
		$this->load->view('cuentas');
	}
	public function login(){
		$this->load->view('login');
	}

	public function blog(){
		$this->load->view('blog');
	}

	public function categorias(){
		$this->load->view('categorias');
	}

	public function nosotros(){
		$this->load->view('nosotros');
	}

	public function licencias(){
		$this->load->view('licencias');
	}

	public function newIndex(){
		$this->load->view('newIndex');
	}
	public function newIndex2(){
		$this->load->view('newIndex2');
	}
	public function newIndex3(){
		$this->load->view('newIndex3');
	}
	public function newIndex4(){
		$this->load->view('newIndex4');
	}

	public function escucha(){
		$this->load->view('escucha');
	}
	public function escucha2(){
		$this->load->view('escucha2');
	}
	public function escucha3(){
		$this->load->view('escucha3');
	}
	public function art(){
		$this->load->view('art');
	}
	public function art2(){
		$this->load->view('art2');
	}
	public function art3(){
		$this->load->view('art3');
	}
	public function art4(){
		$this->load->view('art4');
	}
	public function art5(){
		$this->load->view('art5');
	}
	public function art6(){
		$this->load->view('art6');
	}

}

?>