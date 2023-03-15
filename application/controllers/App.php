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

			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();
			$data['rumah'] = $this->db->get('tbl_rumah')->result_array();
			$this->load->view('template/header');
			$this->load->view('app/index', $data);
			$this->load->view('template/footer');
		}


		function detail(){

			$this->load->view('template/header');
			$this->load->view('app/detail');
			$this->load->view('template/footer');
		}

		

	}


?>