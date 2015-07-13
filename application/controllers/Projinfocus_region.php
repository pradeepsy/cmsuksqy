<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projinfocus_region extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('upload');
            $this->load->model('projinfocus_model');
    }

	public function index()
	{
		$this->data['type']='list';
		$this->data['menu_status']='proj_in_focus';
		$this->data['content']='projinfocus_region/index.php';

		$data2=$this->projinfocus_model->selectProjFocusRegion();
		// echo "<pre>"; print_r($data2);
		
		$this->data['data']=$data2;
		$this->load->view('index', $this->data);
	}

	public function add()
	{
		if(!empty($this->input->post('name')))
		{
            $data2['name']=trim($this->input->post('name'));
            $data2['sequence']=trim($this->input->post('sequence'));
            $data2['status']=trim($this->input->post('status'));  

            $this->projinfocus_model->insertProjinFocusRegion($data2);
            //echo $this->db->last_query();
            redirect('projinfocus_region');
		}
		else
		{
			$this->data['type']='form';
			$this->data['menu_status']='proj_in_focus';
			$this->data['content']='projinfocus_region/add.php';
			$this->load->view('index', $this->data);
		}		
	}

	public function edit($id)
	{
		if(!empty($this->input->post('name')))
		{
            $data2['name']=trim($this->input->post('name'));
            $data2['sequence']=trim($this->input->post('sequence'));
            $data2['status']=trim($this->input->post('status'));  

            $this->projinfocus_model->updateProjinFocusRegion($id,$data2);
            //echo $this->db->last_query();
            redirect('projinfocus_region');
		}
		else{
			
			$data2=$this->projinfocus_model->selectProjinFocusRegion($id);		
			$this->data['data']=array(
						'name'   	 => trim($data2[0]['name']),
						'sequence'   => trim($data2[0]['sequence']),
						'status'  	 => trim($data2[0]['status'])
						);

			$this->data['type']='form';
			$this->data['menu_status']='proj_in_focus';
			$this->data['content']='projinfocus_region/edit.php';
			$this->load->view('index', $this->data);
		}
		
	}

	public function delete($id)
	{
		$data2['status']=0;
		$this->projinfocus_model->removeProjinFocusRegion($id, $data2);
		redirect('projinfocus_region');
	}
}
