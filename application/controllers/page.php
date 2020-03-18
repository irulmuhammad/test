<?php 

class Page extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('new_model');
		$this -> load -> helper('url');
	}

	public function index(){

		$this -> load -> view('home');
		$this->load->model("admin_model");
		$data['row']=$this->admin_model->getAdmin();
		//$this->load->view("admin_view",$data);
		$data['konten']="admin_view";
		$this->load->view("home_view",$data);
	}

	public function getdata()
	{
		$data['data'] = $this -> new_model -> getdata('tb_order') -> result();
		$this -> load -> view('view_data',$data);
	}

	public function form_pesanan()
	{
		$this -> load -> view('form_pesanan');
	}

	public function aksi_form_pesanan()
	{

		$data = array(
			'nama' => $this -> input -> post('nama'),
			'email' => $this -> input -> post('email'),
			'no_telepon' => $this -> input -> post('no_telepon'),
			'paket_wisata' => $this -> input -> post('paket_wisata'),
			'jumlah_org' => $this -> input -> post('jumlah_org'),
			'tanggal_trip' => $this -> input -> post('tanggal_trip'),
			'lama_trip' => $this -> input -> post('lama_trip'),
			'catatan' => $this -> input -> post('catatan'),
			'alamat' => $this -> input -> post('alamat'),
			'atasnama' => $this -> input -> post('alamat')
			);

		$this->load->view('aksi_form_pesanan',$data);


	}

	public function aksi_upload_bukti()
	{

		$this -> load -> library('form_validation');

			
			$keterangan = $this -> input -> post('keterangan');	

			$data = [ 'keterangan' => $keterangan ];

			if(!empty($_FILES['gambar']['userfile']))
			{
				$upload = $this -> upload_image();
				$data['gambar'] = $upload;
			}


			$this -> new_model -> insert_data($data , 'tb_buktipembayaran');
			redirect('home');

	}

	public function upload_image()
	{
		$config['upload_path'] = '/assets/img/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 1024;
		$config['remove_space'] = TRUE;
		$config['overwrite'] = TRUE;

		$this -> load -> library('upload',$config);

		if($this -> upload -> do_upload('userfile')){
			$this -> session ->set_flashdata('msg', $this -> upload -> display_error('',''));
		}

		return $this -> upload -> data();
	}


	public function pesantiket()
	{

		$this->load->view('pesantiket');
	}

	public function pembayaran()
	{
		$this->load->view('pembayaran');
	}


	public function ordertiket()
	{
		
	

		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$notelp = $this->input->post('notelp');
		$paketwisata = $this->input->post('paketwisata');
		$tgltrip = $this->input->post('tgltrip');
		$jumlahorang = $this->input->post('jumlahorang');
		$lamatrip = $this->input->post('lamatrip');
		$catatan = $this->input->post('catatan');
	

	 $data = [ 


		'nama' => $nama ,
		'email' => $email ,
		'alamat' => $alamat ,
		'no_telepon' => $notelp ,
		'paket_wisata' => $paketwisata ,
		'tanggal_trip' => $tgltrip ,
		'jumlah_org' => $jumlahorang ,
		'lama_trip' => $lamatrip ,
		'catatan' => $catatan ,
		

	 ];

	 $this -> new_model -> insert_data($data , 'tb_order');

	 redirect(base_url('home/buktipembayaran'));
	
		
	}

	public function uploadbukti()
	{
		$this->load->view('uploadbukti');
	}

	public function datatraveler()
	{
		$data['title'] = 'Halaman Treveler | Data Traveler';
		$data['data_traveler'] = $this -> new_model -> getdata('tb_order') -> result();
		$this->load->view('datatraveler',$data);
	}

	public function databuktipembayaran()
	{
		$data['title'] = 'Halaman Treveler | Data Bukti Pembayaran';
		$data['data_buktipembayaran'] = $this -> new_model -> getdata('tb_buktipembayaran') -> result();
		$this->load->view('databuktipembayaran',$data);
	}

	public function delete_data($id)
	{
		$where = ['id' => $id];

		$this -> new_model -> delete_data($where , 'tb_buktipembayaran');
		redirect('page/databuktipembayaran/');
	}

	public function delete($kd_order)
	{
		$where = ['kd_order' => $kd_order];

		$this -> new_model -> delete($where , 'tb_order');
		redirect('page/datatraveler/');
	}

}




 ?>