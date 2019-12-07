<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class Admin_ind extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();

	}

	public function get(){
		$this->db->select();
		$this->db->from('image');
		$query = $this->db->get();
		return $query;
		
	}

	public function chk($name,$password){

		$this->db->where('name',$name);
		$this->db->where('password',$password);
		$query = $this->db->get('alogin');

		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function upd($data){

		$this->db->insert('image',$data);

	}

	public function del($id){

		$this->db->where('id',$id);
		$this->db->delete('image');

	}

	public function dwn($id){

		$this->db->select();
		$this->db->where('id',$id);
		$this->db->from('image');
		$que = $this->db->get();
		return $que;

	}

}