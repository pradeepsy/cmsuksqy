<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {

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
		$this->data['menu_status']='menus';
		$this->data['content']='menus/index.php';

		$data2=$this->home_model->selectmenus();
		$this->data['data']=$data2;
		$this->load->view('index', $this->data);
	}
	public function add()
	{
		if(!empty($this->input->post('name')) && !empty($this->input->post('link')))
		{
			$data2['name']=trim($this->input->post('name'));
            $data2['link']=trim($this->input->post('link'));
            $data2['sequence']=trim($this->input->post('sequence'));
            $data2['status']=trim($this->input->post('status'));                    
            $this->home_model->insertmenus($data2);
            redirect('menus');
		}
		else{
			$this->data['type']='form';
			$this->data['menu_status']='menus';
			$this->data['content']='menus/add.php';
			$this->load->view('index', $this->data);
		}
		
	}
	public function edit($id)
	{
		if(!empty($this->input->post('name')) && !empty($this->input->post('link')))
		{
			$data2['name']=trim($this->input->post('name'));
            $data2['link']=trim($this->input->post('link'));
            $data2['sequence']=trim($this->input->post('sequence'));
            $data2['status']=trim($this->input->post('status'));                    
            $this->home_model->updatemenus($id,$data2);
            redirect('menus');
		}
		else{
			
			$data2=$this->home_model->selectmenusbyid($id);
			
			$this->data['data']=array(
						'name'  	 => trim($data2[0]['name']),
						'link'       => trim($data2[0]['link']),
						'sequence'   => trim($data2[0]['sequence']),
						'status'  	 => trim($data2[0]['status'])
						);

			$this->data['type']='form';
			$this->data['menu_status']='menus';
			$this->data['content']='menus/edit.php';


			$this->load->view('index', $this->data);
		}
		
	}

	public function deletemenus($id)
	{
		$data2['status']=0;
		$this->home_model->removesmenu($id, $data2);
		redirect('menus');
	}

	 public function success()
	{
		$this->data['type']='form';
		$this->data['menu_status']='home';
		$this->data['content']='sliders/success.php';
		$this->load->view('index', $this->data);
	}
}
