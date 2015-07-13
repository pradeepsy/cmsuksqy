<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

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
            $this->load->model('services_model');
    }

	public function index()
	{
		$this->data['type']='list';
		$this->data['menu_status']='services';
		$this->data['content']='services/index.php';

		$data2=$this->services_model->selectServices();
		// echo "<pre>"; print_r($data2);
		
		$this->data['data']=$data2;
		$this->load->view('index', $this->data);
	}
	public function add()
	{
		//print_r($this->input->post());
		//die;
		if(!empty($this->input->post('heading')) && !empty($this->input->post('editor3')))
		{
			$data2['heading']=trim($this->input->post('heading'));
            $data2['ychoose_us']=trim($this->input->post('editor3'));
            $data2['status']=trim($this->input->post('status'));  

            $this->services_model->insertServices($data2);
            //echo $this->db->last_query();
            //die;
            redirect('services');
		}
		else
		{
			$this->data['type']='form';
			$this->data['menu_status']='services';
			$this->data['content']='services/add.php';
			$this->load->view('index', $this->data);
		}
		
	}

	public function edit($id)
	{
		if(!empty($this->input->post('heading')) && !empty($this->input->post('editor3')))
		{
            $data2['heading']=trim($this->input->post('heading'));
            $data2['ychoose_us']=trim($this->input->post('editor3'));
            $data2['status']=trim($this->input->post('status')); 

            $this->services_model->updateAssociateDev($id,$data2);
            //echo $this->db->last_query();
            //die;
            redirect('services');
		}
		else{
			
			$data2=$this->services_model->selectAssociatedDev($id);		
			$this->data['data']=array(
						'link'   	 => trim($data2[0]['link']),
						'sequence'   => trim($data2[0]['sequence']),
						'status'  	 => trim($data2[0]['status'])
						);

			$this->data['type']='form';
			$this->data['menu_status']='services';
			$this->data['content']='services/edit.php';
			$this->load->view('index', $this->data);
		}
		
	}

	public function delete($id)
	{
		$data2['status']=0;
		$this->services_model->removeServices($id, $data2);
		redirect('services');
	}
}
