<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class Main extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function get(){

		$this->db->select('*');
		$this->db->from('employ');
		$query = $this->db->get();
		return $query;
	}

	public function chk($name,$password){

		$this->db->where('name',$name);
		$this->db->where('password',$password);
		$query = $this->db->get('login');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function add($rec){

		$this->db->insert('login',$rec);

	}

	public function delet($id){

		$this->db->where('id',$id);
		$this->db->delete('employ');

	}

	public function upget($id){

		$this->db->select('*')->from('employ')->where('id',$id);
		$query = $this->db->get();
		return $query;

	}

	public function upd($id,$que){

		$this->db->where('id',$id);
		$this->db->update('employ',$que);

	}

	public function inst($que){

		$this->db->insert('employ',$que);

	}

}