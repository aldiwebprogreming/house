<?php 

	/**
	 * 
	 */
	class Member extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){

			$this->load->view('template_member/header');
			$this->load->view('member/index');
			$this->load->view('template_member/footer');
		}

		function profil(){

			$data['prov'] = $this->db->get('tbl_provinsi')->result_array();
			$this->load->view('template_member/header');
			$this->load->view('member/profil', $data);
			$this->load->view('template_member/footer');
		}

		function get_kab(){

			$id = $this->input->get('id');
			$data['kab'] = $this->db->get_where('tbl_kabupaten', ['province_id' => $id])->result_array();
			$this->load->view('getdata/kabupaten', $data);

		}

		function get_kec(){

			$id = $this->input->get('id');
			$data['kec'] = $this->db->get_where('tbl_kecamatan', ['regency_id' => $id])->result_array();
			$this->load->view('getdata/kecamatan', $data);
			
		}

		function act_profil(){

			$data = [
				'kode_member' => '',
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'nowa' => $this->input->post('nowa'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'prov' => $this->input->post('prov'),
				'kab' => $this->input->post('kab'),
				'kec' => $this->input->post('kec'),
			];

			$this->db->insert('tbl_profil', $data);
			$this->session->set_flashdata('message', 'swal("Yess", "Profil anda berhasil di buat", "success");');
			redirect('member/profil');

		}

		function upload(){

			$this->load->view('template_member/header');
			$this->load->view('member/upload');
			$this->load->view('template_member/footer');

		}


	}

?>