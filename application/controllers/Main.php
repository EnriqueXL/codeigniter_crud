<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/* El constructor es lo primero en cargar */
	public function __construct()
	{
			parent::__construct();
			$this->load->model("user_model");
	}

	public function index()
	{
		$this->load->view('user/main');
	}
	
}
