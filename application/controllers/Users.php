<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

        // public function __construct()
        //     {
        //     parent::__construct();
        //     //Codeigniter : Write Less Do More
        //     }

        public function registerUser()
        {
            //validate  the data taken through the register form
            $this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
            $this->form_validation->set_rules('fname','Full Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('contact','Contact','required');
            $this->form_validation->set_rules('faculty','Faculty','required');
            $this->form_validation->set_rules('indexno','Index Number','required');
            $this->form_validation->set_rules('avatar','Profile Picture');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');

            if ($this->form_validation->run() == TRUE) {

            //load the model to connect to the db
            $this->load->model('User_model');
            $this->User_model->insertUser();

            //set message to be shown when registration is completed
            $this->session->set_flashdata('success','You are registered! You can login now.');
            redirect('User/Signup');

            } else {

                $this->load->view('pages/register_page');
                }
            }

        public function loginUser() {

            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            // $this->form_validation->set_rules('faculty','faculty','required');

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('login_failed', 'Username or Password is missing ');
                redirect('User');

            } else {
                $this->load->model('User_model');
                // Get username
                $username = $this->input->post('username');
                // Get and encrypt the password
                $password = sha1($this->input->post('password'));

                $reslt = $this->User_model->checkLogin();

                if ($reslt) {
                    $session_data = array(
                        'user_id' => $reslt->user_id,
                        'username' => $reslt->username ,
                        'fname' => $reslt->fname ,
                        'email' => $reslt->email ,
                        'faculty' => $reslt->faculty ,
                        'indexno' => $reslt->indexno,
                        'contact' => $reslt->contact ,
                        //'avatar' => $reslt->avatar,
                    );
                    if ($username == "admin") {

                        $this->session->set_userdata($session_data);
                        $this->load->view('pages/admin_page');

                    }elseif ($username == "facadmin") {

                        // $this->session->set_userdata($session_data);
                        $this->load->view('pages/facadmin_page');

                    }else{

                    $this->session->set_userdata($session_data);
                    $this->load->model('User_model');
                    $records = $this->User_model->getNews();
                    $this->load->view('pages/home_page', ['records' => $records]);}
                }
                else {
                    //wrong credentials
                    $this->session->set_flashdata('login_failed','Username or Password invalid!');
                    redirect('User');
                }
            }
        }

        public function signout() {
            session_unset();
            redirect(base_url());
        }

        public function clubRegUser()
        {
            //validate  the data taken through the register form
            $this->form_validation->set_rules('username','Username','required|is_unique[clubusers.username]');
            $this->form_validation->set_rules('fname','Full Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('contact','Contact','required');
            $this->form_validation->set_rules('indexno','Index Number','required');
            $this->form_validation->set_rules('clubname','Club Name','required');
            $this->form_validation->set_rules('gender','Gender','required');
            $this->form_validation->set_rules('linkedin','Linkedin URL','required');
            $this->form_validation->set_rules('facebook','Facebook URL','required');

            if ($this->form_validation->run() == TRUE) {

            //load the model to connect to the db
            $this->load->model('User_model');
            $this->User_model->clubUser();

            //set message to be shown when registration is completed
            $this->session->set_flashdata('success','You are registered in the club');
            redirect('User/joinClubs');

            } else {

                $this->load->view('pages/clubReg_page');
                }
            }

        public function editUser($user_id) {

            $this->load->model('User_model');

            if (isset($_POST['updatebtn'])) {

                if ($this->User_model->update($user_id)) {

                    $this->session->set_flashdata('success','Student is updated');
                    redirect('Users/editUser/'.$user_id , 'refresh');

                } else {
                    $this->session->set_flashdata('error','Student is not updated');
                    redirect('Users/editUser/'.$user_id , 'refresh');
                }
            }

            $data['session'] = $this->User_model->edit($user_id);
            $this->load->view('pages/edit_user',$data);

        }

        public function userProfile()
        {
            $this->load->view('pages/user_profile');
        }

        public function viewAccommodation() {
          $this->load->model('User_model');
          $accomos = $this->User_model->getAccomo();
          $this->load->view('pages/accommodation_page', ['accomos' => $accomos]);
        // }
        //
        // public function viewComments() {
          // $this->load->model('User_model');
          // $coms = $this->User_model->getComments();
          // $this->load->view('pages/accommodation_page', ['coms' => $coms]);
        }

        public function getAccomoPost($ac_id) {
          $this->load->model('User_model');
          $data['row'] = $this->User_model->accomoPost($ac_id);
          $this->load->view('pages/accommo_post',$data);
        }

        public function acmoComment() {
          $this->form_validation->set_rules('comuser','Username','required');
          $this->form_validation->set_rules('comment','Comment','required');

          if ($this->form_validation->run() == TRUE) {

          //load the model to connect to the db
          $this->load->model('User_model');
          $this->User_model->addAccoComment();

          //set message to be shown when registration is completed
          $this->session->set_flashdata('success','Comment is added');
          //redirect('User/acmPost', $data);
          redirect('Users/getAccomoPost',$data);

          } else {

            $this->load->model('User_model');
            $data['row'] = $this->User_model->accomoPost($ac_id);
            $this->load->view('pages/accommo_post',$data);
              }
          }



}




?>
