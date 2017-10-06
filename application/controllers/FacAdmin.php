<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facadmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $this->load->view('pages/facadmin_page');
  }

  public function getFacLogin()
        {
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('faculty','Faculty','required');
            $this->form_validation->set_rules('password','Password','required');

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('login_failed', 'Login Details are missing');
                redirect('FacAdmin');

            }
            else {
                //load the model to connect to the db
                $this->load->model('FacAdmin_model');

                //Get faculty
                $faculty = $this->input->post('faculty');
                // Get username
                $username = $this->input->post('username');
                // Get and encrypt the password
                $password = sha1($this->input->post('password'));

                $res = $this->FacAdmin_model->LogFadmin();

                if ($res) {
                    $session_data = array(
                        'user_id' => $res->user_id,
                        'username' => $res->username ,
                        'fname' => $res->fname ,
                        'faculty' => $res->faculty ,
                        'email' => $res->email ,
                        'contactno' => $res->contactno ,
                        'nic' => $res->nic,
                    );

                $this->session->set_userdata($session_data);
                redirect('FacAdmin/facHome');
                }
                else {
                    $this->session->set_flashdata('login_failed', 'Login Details are Invalid');
                    redirect('FacAdmin');
                }

            }
        }

}
