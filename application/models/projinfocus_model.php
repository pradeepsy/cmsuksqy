<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');
class Projinfocus_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->helper('cookie');
		//$this->load->helper('date');

		
	}

	public function selectActiveProjFocusRegion(){
		$query=$this->db->where('status',1);
		$query=$this->db->get('project_in_focus_region');
		return $query->result_array();	
	}

	public function selectProjFocusRegion(){
		$query=$this->db->get('project_in_focus_region');
		return $query->result_array();	
	}
	public function selectProjFocusAll(){
		$query=$this->db->get('project_in_focus_all');
		return $query->result_array();	
	}

	

	
	public function insertProjinFocusRegion($data)
	{
		$this->db->insert('project_in_focus_region', $data); 
	}

	public function removeProjinFocusRegion($id, $data){
		$this->db->where('id', $id);
		$this->db->update('project_in_focus_region', $data); 
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

	


	

	/*public function insertlogo($data)
	{
		$this->db->insert('settings', $data); 
	}
	public function insertsliders($data)
	{
		$this->db->insert('sliders', $data); 
	}
	public function insertmenus($data)
	{
		$this->db->insert('menus', $data); 
	}
	public function insertprojectinfocus($data)
	{
		$this->db->insert('project_in_focus', $data); 
	}

	public function insertAssDeveloper($data)
	{
		$this->db->insert('associated_developers', $data); 
	}

	
	

	public function selectmenus(){
		$query=$this->db->get('menus');
		return $query->result_array();	
	}

	public function selectlogo(){
		$this->db->where('status', 1);
		$query=$this->db->get('settings');
		return $query->result_array();	


	}

	public function selectsliders(){
		// $this->db->where('status', 1);
		$query=$this->db->get('sliders');
		return $query->result_array();	
	}
	public function selectProjinFocus(){
		// $this->db->where('status', 1);
		$query=$this->db->get('project_in_focus');
		return $query->result_array();	
	}
	public function selectAssDevelopers(){
		$query=$this->db->get('associated_developers');
		return $query->result_array();	
	}
	
	
	public function selectAssociatedDev($id){
		$this->db->where('id', $id);
		$query=$this->db->get('associated_developers');
		return $query->result_array();	
	}

	public function selectProjinfocusbyid($id){
		$this->db->where('id', $id);
		$query=$this->db->get('project_in_focus');
		return $query->result_array();	
	}

	public function selectsliderbyid($id){
		$this->db->where('id', $id);
		$query=$this->db->get('sliders');
		return $query->result_array();	
	}

	public function selectmenusbyid($id){
		$this->db->where('id', $id);
		$query=$this->db->get('menus');
		return $query->result_array();	
	}

	
	public function removesmenu($id, $data){
		$this->db->where('id', $id);
		$this->db->update('menus', $data); 
	}

	public function removelogo($id, $data){
		$this->db->where('id', $id);
		$this->db->update('settings', $data); 
	}

	public function removesliderimg($id, $data){
		$this->db->where('id', $id);
		$this->db->update('sliders', $data); 
	}

	public function removeprojinfocus($id, $data){
		$this->db->where('id', $id);
		$this->db->update('project_in_focus', $data); 
	}

	public function removeAssociatedDev($id, $data){
		$this->db->where('id', $id);
		$this->db->update('associated_developers', $data); 
	}
	
	
	public function updateAssociateDev($id, $data){
		$this->db->where('id', $id);
		$this->db->update('associated_developers', $data); 
	}

	public function updateprojinfocus($id, $data){
		$this->db->where('id', $id);
		$this->db->update('project_in_focus', $data); 
	}
	public function updateslider($id, $data){
		$this->db->where('id', $id);
		$this->db->update('sliders', $data); 
	}
	public function updatemenus($id, $data){
		$this->db->where('id', $id);
		$this->db->update('menus', $data); 
	}*/

}
