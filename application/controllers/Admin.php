<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$this->load->model("admin_model");
		$data['row']=$this->admin_model->getAdmin();
		//$this->load->view("admin_view",$data);
		$data['konten']="admin_view";
		$this->load->view("home_view",$data);
	}
	public function tambah_admin(){
		$this->load->view("tambah_admin_view");
	}
	public function simpan_admin(){
		$data['id_admin']=$_POST['txtusername'];
		$data['nama_admin']=$_POST['txtnama'];
		$data['username']=$_POST['txtlevel'];
		$data['password']=$_POST['txtpassword'];

		$this->load->model("admin_model");
		$simpan=$this->admin_model->insertAdmin($data); 
		redirect('admin');
	}
	public function hapus_admin($id_admin='')
	{
		$hapus=$this->db->query("delete from admin where id_admin='$id_admin'");
		redirect("admin"); 
	}

		public function ubah_admin($id_admin=''){
			$this->load->model("admin_model");
			$data['row']=$this->admin_model->cariAdmin($id_admin);
			$this->load->view("ubah_admin_view",$data);
		}

	
	
}
