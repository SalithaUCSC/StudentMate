<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacAdmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
      $this->load->view('pages/facadmin_page');
  }
  public function addNewsPage()
  {
      $this->load->view('pages/addnews_page');
  }

  public function facHome()
  {
      $this->load->view('pages/faculty_page');
  }

  public function addClubsPage()
  {
      $this->load->view('pages/addclubs_page');
  }

  public function getFacLogin()
        {
            $this->form_validation->set_rules('username','Username','required');
            // $this->form_validation->set_rules('faculty','Faculty','required');
            $this->form_validation->set_rules('password','Password','required');

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('login_failed', 'Login Details are missing');
                redirect('FacAdmin');

            }
            else {
                //load the model to connect to the db
                $this->load->model('FacAdmin_model');

                //Get faculty
                // $faculty = $this->input->post('faculty');
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
                        // 'faculty' => $res->faculty ,
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

        public function addNewsByFacAdmin()
        {
            $this->form_validation->set_rules('tname','Title','required');
            $this->form_validation->set_rules('date','Date','required');
            $this->form_validation->set_rules('time','Time','required');
            $this->form_validation->set_rules('content','Content','required');


        if ($this->form_validation->run() == TRUE) {

        //load the model to connect to the db
        $this->load->model('FacAdmin_model');
        $this->FacAdmin_model->addFacNews();

        //set message to be shown when registration is completed
        $this->session->set_flashdata('success','Faculty news published!');
        redirect('FacAdmin/addNewsPage',$data);

        } else {

            $this->load->view('pages/addnews_page');
            }
        }


        public function signout() {
            session_unset();
            redirect('FacAdmin');
        }

        public function addClubsByFacadmin()
        {
            $this->form_validation->set_rules('clubname','Club Name','required');
            $this->form_validation->set_rules('clubdate','Deadline date','required');
            $this->form_validation->set_rules('clubtime','Time','required');

            if ($this->form_validation->run() == TRUE) {

            //load the model to connect to the db
            $this->load->model('FacAdmin_model');
            $this->FacAdmin_model->addFacClubs();

            //set message to be shown when registration is completed
            $this->session->set_flashdata('success','Club registration is published!');
            redirect('FacAdmin/addClubsPage',$data);

            } else {

                $this->load->view('pages/addclubs_page');
            }
        }


}
