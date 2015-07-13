<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Associated_developer extends CI_Controller {

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
            $this->load->model('home_model');
    }

	public function index()
	{
		$this->data['type']='list';
		$this->data['menu_status']='home';
		$this->data['content']='associated_developers/index.php';

		$data2=$this->home_model->selectAssDevelopers();
		// echo "<pre>"; print_r($data2);
		
		$this->data['data']=$data2;
		$this->load->view('index', $this->data);
	}
	public function add()
	{
		$this->data['type']='form';
		$this->data['menu_status']='home';
		$this->data['content']='associated_developers/add.php';
		$this->load->view('index', $this->data);
	}

	public function edit($id)
	{
		if(!empty($this->input->post('link')))
		{
            $data2['link']=trim($this->input->post('link'));
            $data2['sequence']=trim($this->input->post('sequence'));
            $data2['status']=trim($this->input->post('status'));  

            $this->home_model->updateAssociateDev($id,$data2);
            echo $this->db->last_query();
            //die;
            redirect('associated_developer');
		}
		else{
			
			$data2=$this->home_model->selectAssociatedDev($id);		
			$this->data['data']=array(
						'link'   	 => trim($data2[0]['link']),
						'sequence'   => trim($data2[0]['sequence']),
						'status'  	 => trim($data2[0]['status'])
						);

			$this->data['type']='form';
			$this->data['menu_status']='home';
			$this->data['content']='associated_developers/edit.php';
			$this->load->view('index', $this->data);
		}
		
	}

	public function delete($id)
	{
		$data2['status']=0;
		$this->home_model->removeAssociatedDev($id, $data2);
		redirect('associated_developer');
	}
}
