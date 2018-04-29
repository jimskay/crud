<?php

class MY_Controller extends CI_Controller {
	
	public function __contruct()
	{
		parent::_construct();
		$logado = $this->session->userdata("logado");

		if ($logado != 1) {
			redirect(base_url('index.php/login'));
		}
	}

}