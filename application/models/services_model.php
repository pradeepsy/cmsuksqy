<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->helper('cookie');
		//$this->load->helper('date');

		
	}

	
	public function selectServices(){
		$query=$this->db->get('services');
		return $query->result_array();	
	}

	public function insertServices($data)
	{
		$this->db->insert('services', $data); 
	}

	public function removeServices($id, $data){
		$this->db->where('id', $id);
		$this->db->update('services', $data); 
	}



	
	public function insertallprojectinfocus($data)
	{
		$this->db->insert('project_in_focus_all', $data); 
	}


	public function selectProjinFocusRegion($id){
		$this->db->where('id', $id);
		$query=$this->db->get('project_in_focus_region');
		return $query->result_array();	
	}

	public function updateProjinFocusRegion($id, $data){
		$this->db->where('id', $id);
		$this->db->update('project_in_focus_region', $data); 
	}
	public function updateAllProjinFocus($id, $data){
		$this->db->where('id', $id);
		$this->db->update('project_in_focus_all', $data); 
	}
	
	
	public function removeProjinFocusall($id, $data){
		$this->db->where('id', $id);
		$this->db->update('project_in_focus_all', $data); 
	}

	public function selectAllProjinFocusbyId($id){
		$this->db->where('id', $id);
		$query=$this->db->get('project_in_focus_all');
		return $query->result_array();	
	}
	public function getProjFocusRegionbyId($id){
		$this->db->select('id, name');
		$this->db->where('id', $id);
		$query=$this->db->get('project_in_focus_region');
		return $query->result_array();	
	}


}
