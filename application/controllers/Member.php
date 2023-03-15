<?php 

	/**
	 * 
	 */
	class Member extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->load->library('form_validation');

			if ($this->session->kode_member == null) {
				
				redirect('auth/');
			}
		}

		function index(){



			$this->load->view('template_member/header');
			$this->load->view('member/index');
			$this->load->view('template_member/footer');
		}

		function profil(){


			$this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('nowa', 'Nomor whatsapp', 'required|integer|max_length[13]');
			$this->form_validation->set_rules('prov', 'Provinsi', 'required');
			$this->form_validation->set_rules('kab', 'Kabupaten', 'required');
			$this->form_validation->set_rules('kec', 'Kecamatan', 'required');
			// $this->form_validation->set_rules('foto', 'Foto', 'required');

			if ($this->form_validation->run() == false) {

				$data['profil'] = $this->db->get_where('tbl_profil', ['kode_member' => $this->session->kode_member])->row_array();
				
				$data['prov'] = $this->db->get('tbl_provinsi')->result_array();
				$this->load->view('template_member/header');
				$this->load->view('member/profil', $data);
				$this->load->view('template_member/footer');
			}else{

				$kodemember = $this->session->kode_member;

				$cekMember = $this->db->get_where('tbl_profil', ['kode_member' => $kodemember])->row_array();
				if ($cekMember == true) {

					$this->session->set_flashdata('message', 'swal("Oops", "Profil anda sudah terisi", "warning" );');
					redirect('member/profil');


				}else{


					$config['upload_path']          = './profil/';
					$config['allowed_types']        = 'jpg|png|jpeg';
					$config['min_size']             = 9000000;
					$config['encrypt_name']			= TRUE;
					$config['remove_spaces']        = false;

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload("foto")){
						$error = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata('message', 'swal("Oops", "Ada kesalahan dalam upload gambar", "warning" );');
						redirect('member/profil');

					}else{

						$img = array('upload_data' => $this->upload->data());
						$new_name = $img['upload_data']['file_name'];

						$data = [
							'kode_member' => $this->session->kode_member,
							'nama_lengkap' => $this->input->post('nama_lengkap'),
							'email' => $this->input->post('email'),
							'nowa' => $this->input->post('nowa'),
							'nama_lengkap' => $this->input->post('nama_lengkap'),
							'prov' => $this->input->post('prov'),
							'kab' => $this->input->post('kab'),
							'kec' => $this->input->post('kec'),
							'foto' => $new_name,
						];

						$this->db->insert('tbl_profil', $data);
						$this->session->set_flashdata('message', 'swal("Yess", "Profil anda berhasil di buat", "success");');
						redirect('member/profil');

					}

				}

			}


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


		function upload(){

			$kode_member = $this->session->kode_member;
			$member = $this->db->get_where('tbl_profil', ['kode_member' => $kode_member])->row_array();

			$data['prov'] = $this->db->get_where('tbl_provinsi', ['id' => $member['prov']])->row_array();
			$data['kab'] = $this->db->get_where('tbl_kabupaten', ['id' => $member['kab']])->row_array();
			$data['kec'] = $this->db->get_where('tbl_kecamatan', ['id' => $member['kec']])->row_array();

			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();
			$this->load->view('template_member/header');
			$this->load->view('member/upload', $data);
			$this->load->view('template_member/footer');

		}

		function act_upload(){



			if (isset($_POST['kirim'])) {

				$config['upload_path']          = './imghouse/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['min_size']             = 9000000;
				$config['remove_spaces']        = false;
				$config['encrypt_name'] 		= true;


				$this->load->library('upload', $config);
				if (!$this->upload->do_upload("foto1")){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Oops", "Ada kesalahan dalam upload gambar", "warning" );');
					redirect('member/upload');

				}else{

					$arr = $this->input->post('fasilitas[]');
					$fasilitas = implode(',', $arr);


					$img = array('upload_data' => $this->upload->data());
					$new_name = $img['upload_data']['file_name'];

					$data = [

						'kode_member' => $this->session->kode_member,
						'prov' => $this->input->post('prov'),
						'kab' => $this->input->post('kab'),
						'kec' => $this->input->post('kec'),
						'alamat_detail' => $this->input->post('alamat_detail'),
						'kategori' => $this->input->post('kategori'),
						'nama_produk' => $this->input->post('nama_produk'),
						'harga' => $this->input->post('harga'),
						'jml_kamar_tidur' => $this->input->post('jml_kamar_tidur'),
						'jml_kamar_mandi' => $this->input->post('jml_kamar_mandi'),
						'luas_bangunan' => $this->input->post('luas_bangunan'),
						'luas_tanah' => $this->input->post('luas_tanah'),
						'jml_garasi' => $this->input->post('jml_garasi'),
						'fasilitas' => $fasilitas,
						'deskripsi' => $this->input->post('deskripsi'),
						'foto' => $new_name,
					];

				}

				$this->db->insert('tbl_rumah', $data);
				$this->session->set_flashdata('message', 'swal("Yess", "Rumah anda berhasil di upload", "success");');
				redirect('member/upload');

			}

		}

		function data_upload(){

			$kodemember = $this->session->kode_member;
			$data['upload'] = $this->db->get_where('tbl_rumah', ['kode_member' => $kodemember])->result_array();
			$this->load->view('template_member/header');
			$this->load->view('member/data_upload', $data);
			$this->load->view('template_member/footer');

		}

		function detail_rumah($id){

			$data['detail'] = $this->db->get_where('tbl_rumah', ['id' => $id])->row_array();
			// var_dump($data);

			$kode_member = $this->session->kode_member;
			$member = $this->db->get_where('tbl_profil', ['kode_member' => $kode_member])->row_array();

			$data['prov'] = $this->db->get_where('tbl_provinsi', ['id' => $member['prov']])->row_array();
			$data['kab'] = $this->db->get_where('tbl_kabupaten', ['id' => $member['kab']])->row_array();
			$data['kec'] = $this->db->get_where('tbl_kecamatan', ['id' => $member['kec']])->row_array();

			$this->load->view('template_member/header');
			$this->load->view('member/detail_rumah', $data);
			$this->load->view('template_member/footer');
		}


	}

?>