<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sliders extends CI_Controller {

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
		$this->data['content']='sliders/index.php';

		$data2=$this->home_model->selectsliders();
		$this->data['data']=$data2;
		$this->load->view('index', $this->data);
	}
	public function add()
	{
		$this->data['type']='form';
		$this->data['menu_status']='home';
		$this->data['content']='sliders/add.php';
		$this->load->view('index', $this->data);
	}

	public function edit($id)
	{
		if(!empty($this->input->post('title')) && !empty($this->input->post('subtitle')))
		{
			$data2['title']=trim($this->input->post('title'));
            $data2['subtitle']=trim($this->input->post('subtitle'));
            $data2['sequence']=trim($this->input->post('sequence'));
            $data2['status']=trim($this->input->post('status'));  

            $this->home_model->updateslider($id,$data2);
           redirect('sliders');
		}
		else{
			
			$data2=$this->home_model->selectsliderbyid($id);
			
			$this->data['data']=array(
						'title'  	 => trim($data2[0]['title']),
						'subtitle'   => trim($data2[0]['subtitle']),
						'sequence'   => trim($data2[0]['sequence']),
						'status'  	 => trim($data2[0]['status'])
						);

			$this->data['type']='form';
			$this->data['menu_status']='home';
			$this->data['content']='sliders/edit.php';


			$this->load->view('index', $this->data);
		}
		
	}

	public function deleteslider($id)
	{
		$data2['status']=0;
		$this->home_model->removesliderimg($id, $data2);
		redirect('sliders');
	}

	 public function success()
	{
		$this->data['type']='form';
		$this->data['menu_status']='home';
		$this->data['content']='sliders/success.php';
		$this->load->view('index', $this->data);
	}
}
