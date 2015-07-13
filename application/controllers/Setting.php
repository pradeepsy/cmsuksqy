<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

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
		$this->data['type']='form';
		$this->data['menu_status']='home';
		$this->data['content']='settings/addlogo.php';
		$this->load->view('index', $this->data);

		//$this->load->view('index');
	}

	public function do_upload_logo()
    {
            $config['upload_path']          = './images/logo/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1024;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->setting->do_upload_logo())
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    $this->load->view('upload_success', $data);
            }
    }

    public function logosuccess()
	{
		$this->data['type']='form';
		$this->data['menu_status']='home';
		$this->data['content']='settings/successlogo.php';
		$this->load->view('index', $this->data);
	}

	public function listlogo()
	{
		$this->data['type']='list';
		$this->data['menu_status']='home';
		$this->data['content']='settings/index.php';

		$data2=$this->home_model->selectlogo();
		$this->data['data']=$data2;
		$this->load->view('index', $this->data);
	}
	public function deletelogo($id)
	{
		$data2['status']=0;
		$this->home_model->removelogo($id, $data2);
		redirect('setting/listlogo');
	}
}
