<?php
class mproduct extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function findall()
	{
		return $this->db->select('*')->from('product')->get()->result_array();
	}
	function find($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('product')->row();
	}
}
?>