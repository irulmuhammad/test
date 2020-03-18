<?php

class Laporanpdf extends CI_Controller {

	function index()
	{
	$this -> load -> library('pdf');
	$this -> load -> model('new_model');
	$data['data'] = $this -> new_model -> getdata('tb_order') -> result();
	$this -> load ->view('pesanan_pdf',$data);
	}

}


?>