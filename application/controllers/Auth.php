<?php 

	/**
	 * 
	 */
	class Auth extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->load->library('form_validation');

		}

		function index(){


			$this->form_validation->set_rules('nowa', 'Nomor Whatsapp', 'required|max_length[13]|integer');
			$this->form_validation->set_rules('pass', 'Password', 'required|min_length[6]');

			if ($this->form_validation->run() == false) {

				$this->load->view('template/header');
				$this->load->view('Auth/login');
				$this->load->view('template/footer');

			}else{

				$wa = $this->input->post('nowa');
				$pass = $this->input->post('pass');

				$cek = $this->db->get_where('tbl_register_member', ['nowa' => $wa])->row_array();
				if ($cek == true) {
					
					if (password_verify($pass, $cek['pass'])) {
						
						$data = [
							'nowa' => $wa,
							'kode_member' => $cek['kode_member'],
							'name' => $cek['name'],
						];

						$this->session->set_userdata($data);
						redirect('member/');
					}else{

						$this->session->set_flashdata('message', 'swal("Oops", "Password anda salah", "warning");');
						redirect('Auth/');
					}
				}else{

					$this->session->set_flashdata('message', 'swal("Oops", "Akun anda salah", "warning");');
					redirect('Auth/');
				}

			}
			
			

		}

		function register(){

			
			$this->form_validation->set_rules('nowa', 'Nomor whatsapp', 'required|integer|max_length[13]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('pass', 'Password', 'required|min_length[6]');
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('pass1', 'Confirm Password', 'required|matches[pass]|min_length[6]');

			if ($this->form_validation->run() == false) {
				
				$this->load->view('template/header');
				$this->load->view('Auth/register');
				$this->load->view('template/footer');

			}else{

				$this->load->view('template/header');
				$this->load->view('Auth/register');
				$this->load->view('template/footer');

				$data = [
					'kode_member' => "member-".rand(0, 10000),
					'nowa' => $this->input->post('nowa'),
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
				];

				$this->db->insert('tbl_register_member', $data);
				$this->session->set_flashdata('message', 'swal("Yess", "Anda berhasil register", "success");');
				redirect('Auth/');

			}

		}

		function act_register(){

			

		}

	}
?>