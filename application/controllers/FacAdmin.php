<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacAdmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('FacAdmin_model');
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $data['facs'] = $this->FacAdmin_model->getFacNames();
    $this->load->view('pages/FacAdmin/facadmin_page',$data);
  }

  public function facHome()
  {
      $data['usr'] = $this->FacAdmin_model->getUsers();
      $data['usrlimit'] = $this->FacAdmin_model->getUsersLimit();
      $data['clubs'] = $this->FacAdmin_model->getClubs();
      $data['clubslim'] = $this->FacAdmin_model->getClubsLimit();
      $data['nws'] = $this->FacAdmin_model->getNews();
      $data['nwslm'] = $this->FacAdmin_model->getNewsLimit();
      $data['clubData'] = $this->FacAdmin_model->getClubNames();
      $this->load->view('pages/FacAdmin/faculty_page', $data);

  }

  public function addNews()
  {
      $this->load->view('pages/FacAdmin/addNews_page');
  }

  public function addClubs()
  {
      $this->load->view('pages/FacAdmin/addClubPost_page');
  }

  public function FadminProfile()
  {
      $this->load->view('pages/FacAdmin/Fadmin_profile');
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

  public function editFadmin($user_id) {

      if (isset($_POST['updatebtn'])) {

          if ($this->FacAdmin_model->updateFadmin($user_id)) {

              $this->session->set_flashdata('success','Faculty Admin is updated');
              redirect('FacAdmin/editFadmin/'.$user_id);

          } else {
              $this->session->set_flashdata('error','Faculty Admin is not updated');
              redirect('FacAdmin/editFadmin/'.$user_id);
          }
      }

      $data['row'] = $this->FacAdmin_model->editFadmin($user_id);
      $this->load->view('pages/FacAdmin/edit_Fadmin',$data);

  }

  public function viewAllUsers() {
    $this->load->library('pagination');
    $config['base_url'] = 'http://localhost/Projects/ciproject/FacAdmin/viewAllUsers';
    $config['total_rows'] = $this->FacAdmin_model->getUsersCount();
    $config['per_page'] = 5;
    $config['uri_segment'] = 3;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = array('class' => 'page_link');
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $this->pagination->initialize($config);
    $data['link'] = $this->pagination->create_links();
    $data['records'] = $this->FacAdmin_model->getUsersPagintaion($config['per_page'], $page);
    $data['recs'] = $this->FacAdmin_model->getUsers();
    $this->load->view('pages/FacAdmin/viewUsers_page', $data);
  }

  public function deleteUser($user_id) {
    $this->FacAdmin_model->delete($user_id);
    redirect('FacAdmin/viewAllUsers' );
  }

  public function addClubsByFacadmin()
  {
      $this->form_validation->set_rules('clubname','Club Name','required');
      $this->form_validation->set_rules('clubdate','Deadline date','required');
      $this->form_validation->set_rules('clubtime','Time','required');

      if ($this->form_validation->run() == TRUE) {

        $this->FacAdmin_model->addFacClubs();

        //set message to be shown when registration is completed
        $this->session->set_flashdata('success','Club registration is published!');
        redirect('FacAdmin/addClubs',$data);

      } else {

          $this->load->view('pages/FacAdmin/addClubPost_page');
      }
  }

  public function viewAllClubs() {
    $data['records'] = $this->FacAdmin_model->getClubs();
    $this->load->view('pages/FacAdmin/viewClubs_page', $data);
  }

  public function edit_Clubs($clubid) {

    if (isset($_POST['update'])) {

      if ($this->FacAdmin_model->updateClubs($clubid)) {

        $this->session->set_flashdata('success','Club Post is updated');
        redirect('FacAdmin/edit_Clubs/'.$clubid);

      } else {
        $this->session->set_flashdata('error','Club Post is not updated');
        redirect('FacAdmin/edit_Clubs/'.$clubid);
      }
    }

    $data['row'] = $this->FacAdmin_model->editClubs($clubid);
    $this->load->view('pages/FacAdmin/editClubs_page',$data);

  }

  public function deleteClubs($clubid) {
    $this->FacAdmin_model->deleteClubs($clubid);
    redirect('FacAdmin/viewAllClubs');
  }

  public function edit_clubReg($c_id) {

    if (isset($_POST['update'])) {

      if ($this->FacAdmin_model->updateClubReg($c_id)) {

        $this->session->set_flashdata('success','Club registration is updated');
        redirect('FacAdmin/edit_ClubReg/'.$c_id);

      } else {
        $this->session->set_flashdata('error','Club registration is not updated');
        redirect('FacAdmin/edit_ClubReg/'.$c_id);
      }
    }

    $data['row'] = $this->FacAdmin_model->editClubReg($c_id);
    $this->load->view('pages/FacAdmin/editClubReg_page',$data);

  }

  public function delete_clubReg($c_id) {
    $this->FacAdmin_model->deleteClubReg($c_id);
    redirect('FacAdmin/viewClubUsers' );
  }

  public function addNewsByFacAdmin()
  {
      $this->form_validation->set_rules('tname','Title','required');
      $this->form_validation->set_rules('faculty','Faculty');
      $this->form_validation->set_rules('date','Date','required');
      $this->form_validation->set_rules('time','Time','required');
      $this->form_validation->set_rules('content','Content','required');


      if ($this->form_validation->run() == TRUE) {

        $this->FacAdmin_model->addFacNews();

        //set message to be shown when news is completed
        $this->session->set_flashdata('success','Faculty news published!');
        redirect('FacAdmin/addNews',$data);

      } else {
        $this->load->view('pages/FacAdmin/addNews_page');
      }
  }

  public function viewAllNews() {
    $this->load->library('pagination');
    $config['base_url'] = 'http://localhost/Projects/ciproject/FacAdmin/viewAllNews';
    $config['total_rows'] = $this->FacAdmin_model->getNewsCount();
    $config['per_page'] = 5;
    $config['uri_segment'] = 3;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['attributes'] = array('class' => 'page_link');
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $this->pagination->initialize($config);
    $data['link'] = $this->pagination->create_links();
    $data['records'] = $this->FacAdmin_model->getNewsPagintaion($config['per_page'], $page);
    $data['recs'] = $this->FacAdmin_model->getNews();
    $this->load->view('pages/FacAdmin/viewNews_page', $data);
    //$data['records'] = $this->FacAdmin_model->getNews();
    //$this->load->view('pages/viewNews_page', $data);
  }

  public function edit_News($newsid) {

    if (isset($_POST['update'])) {

      if ($this->FacAdmin_model->updateNews($newsid)) {

        $this->session->set_flashdata('success','News is updated');
        redirect('FacAdmin/edit_News/'.$newsid);

      } else {
        $this->session->set_flashdata('error','News is not updated');
        redirect('FacAdmin/edit_News/'.$newsid);
      }
    }

    $data['row'] = $this->FacAdmin_model->editNews($newsid);
    $this->load->view('pages/FacAdmin/editNews_page',$data);

  }

  public function deleteNews($newsid) {
    $this->FacAdmin_model->deleteNews($newsid);
    redirect('FacAdmin/viewAllNews' );
  }

  public function viewClubUsers()
  {
    $data['clbs'] = $this->FacAdmin_model->getClubNames();
    // $data['clbusr'] = $this->FacAdmin_model->getClubUserCount();
    $this->load->view('pages/FacAdmin/clubUsers_page' , $data);
  }

  // public function viewSingleclubUsers()
  // {
  //   $clubname = $this->input->post('clubname');
  //
  //   $res = $this->FacAdmin_model->getSingleClub();
  //
  //   if ($res) {
  //       $session_data = array(
  //           'clubname' => $res->clubname,
  //           'faculty' => $res->faculty,
  //           'username' => $username,
  //           'email' => $email
  //         );
  //
  //   $this->session->set_userdata($session_data);
  //   // $data['usrs'] = $this->FacAdmin_model->getClubUsers();
  //   redirect('FacAdmin/viewSingleClub',$data);
  //   }
  //   else {
  //       $this->session->set_flashdata('login_failed', 'Login Details are Invalid');
  //       redirect('FacAdmin');
  //   }
  //
  //
  //   // $data['SinUsr'] = $this->FacAdmin_model->getClubNames();
  //
  //   // $data['SinUsr'] = $this->FacAdmin_model->getSingleClub();
  //   // $this->load->view('pages/viewSingleClub_page' , $data);
  // }


// public function viewSingleClub()
// {
//   $this->load->view('pages/viewSingleClub_page');
// }

  public function addNewClubPage()
  {
    $this->load->view('pages/FacAdmin/addNewClub_page');
  }

  public function addNewClub()
  {

      $this->form_validation->set_rules('c_name','Club Name','required|is_unique[club_data.c_name]');
      $this->form_validation->set_rules('c_value','Club DB value','required|is_unique[club_data.c_value]');
      $this->form_validation->set_rules('c_faculty','Faculty','required');


      if ($this->form_validation->run() == TRUE) {

        $this->FacAdmin_model->insertNewClub();

      //set message to be shown when registration is completed
      $this->session->set_flashdata('success','Club is added');
      redirect('FacAdmin/addNewClubPage');

      } else {

          $this->load->view('pages/FacAdmin/addNewClub_page');
          }

  }


}
