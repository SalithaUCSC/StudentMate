<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
      $this->load->view('pages/landing_page');
  }

  public function userHome()
  {
      $this->load->model('User_model');
      $records = $this->User_model->getNews();
      $this->load->view('pages/home_page', ['records' => $records]);
  }

  public function userClubs()
  {
    $this->load->model('User_model');
    $records = $this->User_model->getClubs();
    $this->load->view('pages/clubs_page', ['records' => $records]);
  }

  public function userAccommodation() {
    $this->load->model('User_model');
    $accomos = $this->User_model->getAccomo();
    $this->load->view('pages/accommodation_page', ['accomos' => $accomos]);
  }

  public function joinClubs() {
    $this->load->view('pages/clubReg_page');
  }

  public function Signup()
  {
      $this->load->view('pages/register_page');
  }

  // public function acmPost()
  // {
  //   $this->load->model('User_model');
  //   $data['row'] = $this->User_model->accomoPost($ac_id);
  //   $this->load->view('pages/accommo_post',$data);
  //     $this->load->view('pages/accommo_post');
  // }


}
