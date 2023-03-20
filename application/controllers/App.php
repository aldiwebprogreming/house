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


		function detail($kode){

			$data['detail'] = $this->db->get_where('tbl_rumah', ['kode_rumah' => $kode])->row_array();
			$kode_member = $data['detail']['kode_member'];
			$data['member'] = $this->db->get_where('tbl_profil', ['kode_member' => $kode_member])->row_array();

			$this->db->order_by('id', 'RANDOM');
			$this->db->limit(10);
			$data['rumah'] = $this->db->get('tbl_rumah')->result_array();

			$this->load->view('template/header');
			$this->load->view('app/detail', $data);
			$this->load->view('template/footer');
		}


		function kategori(){
			$kategori = $this->input->get('kategori');
			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();
			$data['rumah'] = $this->db->get_where('tbl_rumah', ['kategori' => $kategori])->result_array();
			$data['label'] = $this->db->get_where('tbl_kategori', ['kode' => $kategori])->row_array();
			$this->load->view('template/header');
			$this->load->view('app/kategori', $data);
			$this->load->view('template/footer');
		}


	}


	?>
