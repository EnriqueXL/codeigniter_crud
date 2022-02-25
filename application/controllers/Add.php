<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{

	/* El constructor es lo primero en cargar */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
	}

	public function index()
	{
		$this->load->view('user/add');
	}

	public function save()
	{

		$nombre_completo = $this->input->post("nombre_completo");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$repeatPassword = $this->input->post("repeatPassword");
		
		
		$data = array(
            'nombre_completo' => $nombre_completo,
			'email' => $email,
			'password' => md5($password)
        );
		var_dump($data);
	
		$resultado = $this->user_model->save($data);
		var_dump($resultado);

		if ($resultado) {
            echo "cool";
            /* redirect('datos/correcto'); */
        }
        else{
            echo "Intente nuevamente";
            var_dump($resultado);
            
        }

	}
}
