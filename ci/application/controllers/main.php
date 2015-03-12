<?php 
	
	class Main extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('main_model');
		}

		public function index(){
			$data['name']="My first application.";
			$this->load->view('main', $data);
		}
	};
 ?>