<?php 

class New_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function getdata($table)
	{
		return $this -> db -> get($table);
	}

	public function insert_data($data , $table)
	{
		 $this -> db -> insert($table , $data);
	}

	public function delete_data($where , $table)
	{
		$this -> db -> where($where);
		$this -> db -> delete($table);
	}

	public function delete($where , $table)
	{
		$this -> db -> where($where);
		$this -> db -> delete($table);
	}


}

 ?>