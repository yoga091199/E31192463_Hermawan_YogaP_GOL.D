<?php
	defined('BASEPATH')OR exit('No direct script access allowed');
	class Mahasiswa extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this -> load -> model('Mahasiswa_model'); //load file model dengan nama Mahasiswa_model
		}

		public function index(){
			$data['user'] = $this->Mahasiswa_model->getAll()->result(); //mengambil data array dari database melalui model
			$this->template->views('crud/home_mahasiswa',$data); //menampilkan file view home_mahasiswa dengan menggunakan library template
		}
		
		public function tambah(){
			$this->template->views('crud/tambah_mahasiswa');
			//menampilkan halaman tambah_mahassiwa untuk input data
		}

		public function input(){
			$username = $this->input->post('username');
			//membuat delerasi $username untuk menampung data dari inputan yang memiliki name username
			$password = $this->input->post('pass');
			//membuat delerasi $password untuk menampung data dari inputan yang memiliki name pass
			$nama = $this->input->post('nama');
			//membuat delerasi $nama untuk menampung data dari inputan yang memiliki name nama
			$grup = $this->input->post('grup');
			//membuat delerasi $grup untuk menampung data dari inputan yang memiliki name grup

			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'grup' => $grup,
				);
			//mengatur atribut yang sesuai dengan tabel yang aka ditambahkan nilainya
			//dengan nilai masing - masing atribut telah disimpan dalam variabel sebelumnya
			$this->Mahasiswa_model->input_data($data,'tm_user');
			//input data dengan nilai data pada $data dan tabelnya tn_user
			redirect('Mahasiswa/index');
			//jika sudah maka akan menuju function index pada controller mahasiswa
		}

		public function edit($id){
			$where = array('id' => $id);
			$data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm_user')->result();
			$data['grup'] = $this->Mahasiswa_model->getGrup()->result();
			$this->template->views('crud/edit_mahasiswa',$data);
		}

		public function update(){
			$id = $this->input->post('id');
			$username = $this->input->post('username');
			$password = $this->input->post('pass');
			$nama = $this->input->post('nama');
			$grup = $this->input->post('grup');

			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'grup' => $grup
			);

			$where = array(
				'id' => $id
			);
			$this->Mahasiswa_model->update_data($where,$data, 'tm_user');
			redirect('Mahasiswa');
		}

		public function hapus($id)
		{
			$where = array('id' => $id);
			$this->Mahasiswa_model->hapus_data($where,'tm_user');
			redirect('Mahasiswa/index');
		}

	
	public function Api(){
		$data = $this->Mahasiswa_model->getAll();
		echo json_encode($data->result_array());
	}
		public function ApiInsert(){
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');
		$nama = $this->input->POST('nama');
		$grup = $this->input->POST('grup');

		
		$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
		
		$this->Mahasiswa_model->input_data($data, 'tm_user');
		echo json_encode($array);
	}
	public function ApiDelete(){
		if ($this->input->POST('username')) {
			$where = array('username' => $this->input->POST('username'));
			if ($this->Mahasiswa_model->hapus_data($where,'tm_user')) {
				$array = array('succses' => true);
			} else {
				$array = array('eror' => true);
			}
			echo json_encode($array);
		}
	}
	public function ApiUpdate(){
		$id = $this->input->POST('id');
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');
		$nama = $this->input->POST('nama');
		$grup = $this->input->POST('grup');

		// menyimpan data ke variabel $data dalam bentuk array
		$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
		);

		// Menangkap id pada from
		$where = array(
			'id'=>$id
		);

		// Menangkap semua data untuk di olah pada fungsi update_data pada class Mahasiswa_model
		$this->Mahasiswa_model->update_data($where,$data,'tm_user');
		echo json_encode($array);
	}

	public function grup()
		{
			$data['grup'] = $this->Mahasiswa_model->getGrup()->result();
			$this->template->views('crud/home_grup',$data);
		}

		public function tambahgrup(){
			$data['grup'] = $this->Mahasiswa_model->getGrup()->result();
			$this->template->views('crud/tambah_grup',$data);
		}

		public function inputgrup(){
			$grup = $this->input->post('grup');

			$data = array(
				'grup' => $grup,
				);
			$this->Mahasiswa_model->input_data($data,'tm_grup');
			redirect(base_url('index.php/Mahasiswa/grup'));
		}

		public function editgrup($id_grup){
			$where = array('id_grup' => $id_grup);
			$data['grup'] = $this->Mahasiswa_model->edit_data($where, 'tm_grup')->result();
			$this->template->views('crud/edit_grup',$data);
		}

		public function updategrup(){
			$id = $this->input->post('id');
			$grup = $this->input->post('grup');

			$data = array(
				'grup' => $grup
			);

			$where = array(
				'id_grup' => $id
			);
			$this->Mahasiswa_model->update_data($where,$data, 'tm_grup');
			redirect(base_url('index.php/Mahasiswa/grup'));
		}

		public function hapusgrup($id_grup)
		{
			$where = array('id_grup' => $id_grup);
			$this->Mahasiswa_model->hapus_data($where,'tm_grup');
			redirect('Mahasiswa/grup');
		}
	
	}
	
?>