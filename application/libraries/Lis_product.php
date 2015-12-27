<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lis_product
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}
	public function function_tbl(){
		$ketqua = $this->ci->db->get('product')->result();	
		return $ketqua;
	}
	

}

/* End of file Lis_product.php */
/* Location: ./application/libraries/Lis_product.php */
