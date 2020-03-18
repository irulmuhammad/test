<?php 

class Home extends CI_Controller{

	public function index(){

		$this -> load -> view('home');
	}

	public function homeweb()
	{
		$this->load->view('home_web');
	}

	public function pesantiket()
	{
		$this->load->view('pesantiket');
	}

	public function buktipembayaran()
	{
		$this->load->view('buktipembayaran');
	}





}



 ?>