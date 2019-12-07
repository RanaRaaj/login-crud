<?php 
defined('BASEPATH') OR exit ('Direct script access not allowed');
/**
 * 
 */
class Tb2 extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();

	}

	public function ftch(){

		$this->db->select('*');
		$this->db->from('img');
		$que = $this->db->get();
		return $que;

	}

	public function int($data){

		$this->db->insert('img',$data);

	}


}