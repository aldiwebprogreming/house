<?php 


	/**
	 * 
	 */
	class App extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$this->load->view('template/header');
			$this->load->view('app/index');
			$this->load->view('template/footer');
		}


		function detail(){

			$this->load->view('template/header');
			$this->load->view('app/detail');
			$this->load->view('template/footer');
		}

		

	}


?>