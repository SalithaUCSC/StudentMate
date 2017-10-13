<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
  }

  public function index()
  {
    $this->load->view('pages/Admin/admin_page');
  }

  public function signout() {
      session_unset();
      redirect(base_url());
  }

  public function add_FacAdmin()
  {
    $this->load->view('pages/Admin/addFacAdmin_page');
  }

  public function add_Accomodation()
  {
    $this->load->view('pages/Admin/addAccomodation_page');
  }

  public function add_Scholarship()
  {
    $this->load->view('pages/Admin/addSchol_page');
  }

  public function addFacAdmin()
  {
      $this->form_validation->set_rules('username','Username','required|is_unique[fac_admins.username]');
      $this->form_validation->set_rules('fname','Full Name','required');
      $this->form_validation->set_rules('faculty','Faculty','required');
      $this->form_validation->set_rules('email','Email','required|valid_email');
      $this->form_validation->set_rules('contactno','Contact Number','required');
      $this->form_validation->set_rules('password','Password','required');
      $this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');

      if ($this->form_validation->run() == TRUE) {

        $this->Admin_model->insertFadmin();

        //set message to be shown when registration is completed
        $this->session->set_flashdata('success','Faculty admin is added!');
        redirect('Admin/add_FacAdmin');

      } else {

          $this->load->view('pages/Admin/addFacAdmin_page');
        }
  }

  public function addAccomodation()
  {
      $this->form_validation->set_rules('ac_title','Accomodation Title','required');
      $this->form_validation->set_rules('ac_content','Description','required');
      $this->form_validation->set_rules('ac_date','Publish Date','required');
      $this->form_validation->set_rules('ac_time','Time','required');

      if ($this->form_validation->run() == TRUE) {

        $this->Admin_model->insertAccomo();

        $this->session->set_flashdata('success','Accomodation is published!');
        redirect('Admin/addAccomodation');

      } else {

          $this->load->view('pages/Admin/Admin/addAccomodation_page');
        }
  }

  public function addSchol()
  {
      $this->form_validation->set_rules('sc_title','Scholarship Title','required');
      $this->form_validation->set_rules('sc_des','Description','required');
      $this->form_validation->set_rules('sc_date','Publish Date','required');
      $this->form_validation->set_rules('sc_time','Time','required');

      if ($this->form_validation->run() == TRUE) {

      $this->Admin_model->insertSchol();

      $this->session->set_flashdata('success','Scholarship is published!');
      redirect('Admin/addSchol');

      } else {

          $this->load->view('pages/Admin/addSchol_page');
          }
  }

  public function AdminProfile()
  {
      $this->load->view('pages/Admin/Admin_profile');
  }



}
