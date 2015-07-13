<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projinfocuspage extends CI_Controller {

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
		$this->data['content']='projinfocuspage/index.php';

		$data2=$this->projinfocus_model->selectProjFocusAll();
		// echo "<pre>"; print_r($data2);

		$allregions=$this->projinfocus_model->selectProjFocusRegion();
		//echo "<pre>"; print_r($allregions);

		
		$this->data['allregions']=$allregions;		
		
		$this->data['data']=$data2;
		$this->load->view('index', $this->data);
	}

	public function add()
	{
			$data2=$this->projinfocus_model->selectActiveProjFocusRegion();

			$this->data['data']=$data2;
			$this->data['type']='form';
			$this->data['menu_status']='proj_in_focus';
			$this->data['content']='projinfocuspage/add.php';
			$this->load->view('index', $this->data);
	}

	public function edit($id)
	{
		if(!empty($this->input->post('link')))
		{
            $data2['link']=trim($this->input->post('link'));
            $data2['venue']=trim($this->input->post('venue'));
            $data2['description']=trim($this->input->post('description'));
            $data2['region']=trim($this->input->post('region'));
            $data2['sequence']=trim($this->input->post('sequence'));
            $data2['status']=trim($this->input->post('status'));  

            $this->projinfocus_model->updateAllProjinFocus($id,$data2);
            redirect('projinfocuspage');
		}
		else{
			
			$data2=$this->projinfocus_model->selectAllProjinFocusbyId($id);		
			$dataRegions=$this->projinfocus_model->selectActiveProjFocusRegion();
			
			$this->data['dataregions']=$dataRegions;
			//echo "<pre>";print_r($this->data['dataregions']);
			//die;
			$this->data['data']=array(
						'link'   	 => trim($data2[0]['link']),
						'venue'   	 => trim($data2[0]['venue']),
						'description'=> trim($data2[0]['description']),
						'region'     => trim($data2[0]['region']),
						'sequence'   => trim($data2[0]['sequence']),
						'status'  	 => trim($data2[0]['status'])
						);
			$this->data['type']='form';
			$this->data['menu_status']='proj_in_focus';
			$this->data['content']='projinfocuspage/edit.php';
			$this->load->view('index', $this->data);
		}
		
	}

	public function delete($id)
	{
		$data2['status']=0;
		$this->projinfocus_model->removeProjinFocusall($id, $data2);
		redirect('projinfocuspage');
	}
}
