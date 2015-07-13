<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//$this->load->helper('cookie');
		//$this->load->helper('date');

		
	}
	
	public function insertlogo($data)
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

		/*$this->db->select('title, content, date');
		$this->db->from('mytable');

		$query = $this->db->get();*/

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
	}

	
	/*public function getCampaign()
	{		
		$this->db->select('*, count(contact.email) AS countLeads');
		$this->db->from('campaign');
		$this->db->where('contact.status',1);
		$this->db->join('contact', 'campaign.camp_id = contact.camp_id');
		$this->db->group_by("campaign.camp_id"); 
		
		$query = $this->db->get();
		return $query->result_array();	
		
	}	
	
	public function getCampaignType()
	{
		$this->db->where('status',1);
		$this->db->order_by("created_on", "desc");
		$query=$this->db->get('campaign_type');		 
		return $query->result_array();
	}
	
	public function getContact($camp_id)
	{
		
		$this->db->select('contact.created_on AS created, contact.*, campaign_type.camp_type as campType, campaign.* ');
		$this->db->from('contact');		
		$this->db->join('campaign', 'campaign.camp_id = contact.camp_id');	
		$this->db->join('campaign_type', 'campaign_type.id = campaign.type_camp');
		$this->db->where('contact.status',1);	 
		$this->db->where("campaign.camp_id",$camp_id);
		$this->db->order_by("contact.created_on", "desc");	
		$query=$this->db->get();
		return $query->result_array();
	}	
	
	public function getCampaign()
	{
		$this->db->select("camp_id,name");
		$query=$this->db->get('campaign');		 
		return $query->result_array();
	}
	public function getGroup()
	{
		$this->db->select("id,gr_name");
		$query=$this->db->get('groupby_contact');		 
		return $query->result_array();
	}
	
	public function countLeadsbyCampId($camp)
	{
		$this->db->where('camp_id',$camp);
		$this->db->where('status','1');
		$count=$this->db->count_all_results('contact');
		return $count;
	}
	
	public function delete_leads($id,$data = array())
	{
		$this->db->where('id', $id);
		$this->db->update('contact', $data); 
	}
	
	function ConvertOneTimezoneToAnotherTimezone($time,$currentTimezone,$timezoneRequired)
	{
		$system_timezone = date_default_timezone_get();
		$local_timezone = $currentTimezone;
		date_default_timezone_set($local_timezone);
		$local = date("Y-m-d h:i:s A");
	 
		date_default_timezone_set("GMT");
		$gmt = date("Y-m-d h:i:s A");
	 
		$require_timezone = $timezoneRequired;
		date_default_timezone_set($require_timezone);
		$required = date("Y-m-d h:i:s A");
	 
		date_default_timezone_set($system_timezone);
	
		$diff1 = (strtotime($gmt) - strtotime($local));
		$diff2 = (strtotime($required) - strtotime($gmt));
	
		$date = new DateTime($time);
		$date->modify("+$diff1 seconds");
		$date->modify("+$diff2 seconds");
		$timestamp = $date->format("m-d-Y H:i:s");
		return $timestamp;
	} */
}
