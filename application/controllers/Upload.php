<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('home_model');
                $this->load->model('projinfocus_model');
               

        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './images/logo/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
                        redirect('/setting', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $data2=array('header_logo' => $data["upload_data"]["file_name"]);
                        $this->home_model->insertlogo($data2);
                        //echo $this->db->last_query();
                        redirect('setting/logosuccess');
                       // $this->load->view('/setting/logo_success', $data);
                }
        }

        public function do_upload_sliders()
        {
                $config['upload_path']          = './images/sliders/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 2024;
                $config['max_height']           = 1000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);
                        redirect('/sliders', $error);
                }
                else
                {
                       
                        $data = array('upload_data' => $this->upload->data());
                       // print_r($this->input->post());
                        $data2['image']=$data["upload_data"]["file_name"];
                        $data2['title']=trim(nl2br($this->input->post("title")));
                        $data2['subtitle']=trim(nl2br($this->input->post("subtitle")));
                        $data2['sequence']=trim($this->input->post("sequence")); 
                        $data2['status']=trim($this->input->post("status"));                                               
                        $this->home_model->insertsliders($data2);
                        // echo $this->db->last_query();
                        redirect('sliders/success');
                }
        }

        public function do_upload_projectinfocus()
        {
                $config['upload_path']          = './images/project_in_focus/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 2024;
                $config['max_height']           = 1000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);

                        redirect('/project_in_focus', $error);
                }
                else
                {
                       
                        $data = array('upload_data' => $this->upload->data());
                       // print_r($this->input->post());
                        $data2['image']=$data["upload_data"]["file_name"];
                        $data2['title']=trim(nl2br($this->input->post("title")));
                        $data2['link']=trim(nl2br($this->input->post("link")));
                        $data2['sequence']=trim($this->input->post("sequence")); 
                        $data2['status']=trim($this->input->post("status"));                                               
                        $this->home_model->insertprojectinfocus($data2);
                        // echo $this->db->last_query();
                        redirect('project_in_focus');
                }
        }


        public function do_upload_assocdeveloper()
        {
                $config['upload_path']          = './images/associated_developer/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 2024;
                $config['max_height']           = 1000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);

                        redirect('/associated_developer', $error);


                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());

                        if ( ! $this->upload->do_upload('userfile2'))
                        {
                                $error = array('error' => $this->upload->display_errors());
                                //$this->load->view('upload_form', $error);
                                
                                redirect('/associated_developer', $error);
                        }
                        else
                        {
                               
                                $data2 = array('upload_data2' => $this->upload->data());

                               // print_r($this->input->post());
                                $datares['logo']=$data["upload_data"]["file_name"];
                                $datares['logo2']=$data2["upload_data2"]["file_name"];
                                $datares['link']=trim(nl2br($this->input->post("link")));
                                $datares['sequence']=trim($this->input->post("sequence")); 
                                $datares['status']=trim($this->input->post("status")); 
                                             
                                $this->home_model->insertAssDeveloper($datares);
                                // echo $this->db->last_query();
                                redirect('associated_developer');
                        }

                }

                
        }

        public function do_upload_allprojectinfocus()
        {
                $config['upload_path']          = './images/project_in_focus_all/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['max_width']            = 2024;
                $config['max_height']           = 1000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);

                        redirect('/projinfocuspage', $error);
                }
                else
                {
                       
                        $data = array('upload_data' => $this->upload->data());
                       // print_r($this->input->post());
                        $data2['image']=$data["upload_data"]["file_name"];
                        $data2['link']=trim(nl2br($this->input->post("link")));
                        $data2['venue']=trim(nl2br($this->input->post("venue")));
                        $data2['description']=trim(nl2br($this->input->post("description")));
                        
                        $data2['region']=trim($this->input->post("region")); 
                        $data2['sequence']=trim($this->input->post("sequence")); 
                        $data2['status']=trim($this->input->post("status"));                                               
                        $this->projinfocus_model->insertallprojectinfocus($data2);
                        // echo $this->db->last_query();
                        redirect('projinfocuspage');
                }
        }
}
?>