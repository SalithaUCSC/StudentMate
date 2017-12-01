<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

        public function __construct()
        {
            parent::__construct();

				$this->load->model('User_model');

        }

        public function index()
        {
            $this->load->view('pages/landing_page');
        }
        public function home()
        {
            $this->load->view('pages/landing_page');
        }

        public function userHome()
        {
          $data['records'] = $this->User_model->getNews();
          $this->load->view('pages/User/home_page', $data);
        }

        public function userClubs()
        {
          $data['records'] = $this->User_model->getClubs();
          $this->load->view('pages/User/clubs_page', $data);
        }

        public function userAccommodation() {
          $data['accomos'] = $this->User_model->getAccomo();
          $this->load->view('pages/User/accommodation_page', $data);
        }

        public function userScholarships() {
          $data['schols'] = $this->User_model->getSchols();
          $this->load->view('pages/User/scholarships_page', $data);
        }

        public function joinClubs() {
          $data['clubData'] = $this->User_model->getClubNames();
          $this->load->view('pages/User/clubReg_page', $data);
        }

        public function Signup()
        {
            $data['facs'] = $this->User_model->getFacNames();
            $this->load->view('pages/register_page', $data);
        }

        public function acmPost()
        {
          $data['row'] = $this->User_model->accomoPost($ac_id);
          $this->load->view('pages/User/accommo_post',$data);
          $this->load->view('pages/User/accommo_post');
        }


        public function registerUser()
        {
            //validate  the data taken through the register form
            $this->form_validation->set_rules('username','Username','required|is_unique[users.username]',array('is_unique' => 'Username already exists!'));
            $this->form_validation->set_rules('fname','Full Name');
            $this->form_validation->set_rules('email','Email','required|valid_email',array('valid_email' => 'Provide a valid email'));
            $this->form_validation->set_rules('contact','Contact','required');
            $this->form_validation->set_rules('faculty','Faculty','required');
            $this->form_validation->set_rules('indexno','Index Number','required');
            $this->form_validation->set_rules('avatar','Profile Picture');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]',array('matches' => 'Confirm Password does not matcch with Password'));

            if ($this->form_validation->run() == TRUE) {

              $this->User_model->insertUser();

              //set message to be shown when registration is completed
              $this->session->set_flashdata('success','You are registered! You can login now.');
              redirect('users/Signup');

            } else {
                //$this->form_validation->set_message('is_unique', 'Username already exists!');
                $data['facs'] = $this->User_model->getFacNames();
                $this->load->view('pages/register_page', $data);
                }
            }

        public function loginUser() {

            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            // $this->form_validation->set_rules('faculty','faculty','required');

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('login_failed', 'Username or Password is missing ');
                redirect('Users/home');

            } else {
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
                        $this->load->view('pages/Admin/admin_page');

                    }elseif ($username == "facadmin") {

                        $this->session->set_userdata($session_data);
                        $data['facs'] = $this->User_model->getFacNames();
                        $this->load->view('pages/FacAdmin/facadmin_page', $data);

                    }else{

                    $this->session->set_userdata($session_data);
                    $data['records'] = $this->User_model->getNews();
                    $this->load->view('pages/User/home_page', $data);
                  }
                }
                else {
                    //wrong credentials
                    $this->session->set_flashdata('login_failed','Username or Password invalid!');
                    redirect('Users/home');
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
            $this->form_validation->set_rules('faculty','Faculty','required');
            $this->form_validation->set_rules('contact','Contact','required');
            $this->form_validation->set_rules('indexno','Index Number','required');
            $this->form_validation->set_rules('clubname','Club Name','required');
            $this->form_validation->set_rules('gender','Gender','required');
            $this->form_validation->set_rules('linkedin','Linkedin URL','required');
            $this->form_validation->set_rules('facebook','Facebook URL','required');

            if ($this->form_validation->run() == TRUE) {

              $this->User_model->clubUser();

              //set message to be shown when registration is completed
              $this->session->set_flashdata('success','You are registered in the club');
              redirect('Users/joinClubs');

            } else {
                $data['clubData'] = $this->User_model->getClubNames();
                $this->load->view('pages/User/clubReg_page', $data);
                }
            }

        public function editUser($user_id) {

            if (isset($_POST['updatebtn'])) {

                if ($this->User_model->update($user_id)) {
                    //$this->load->view('pages/user_profile');
                    // $this->session->unset_userdata($user_id);
                    // $this->session->set_userdata($data);
                    $this->session->set_flashdata('success','Student is updated');
                    redirect('Users/editUser/'.$user_id);



                } else {
                    $this->session->set_flashdata('error','Student is not updated');
                    redirect('Users/editUser/'.$user_id);
                }
            }

            $data['row'] = $this->User_model->edit($user_id);
            $this->load->view('pages/User/edit_user',$data);

        }

        public function userProfile()
        {
            $this->load->view('pages/User/user_profile');
        }

        // public function upload()
        // {
        //     $config['upload_path']          = './assets/images/';
        //     $config['allowed_types']        = 'gif|jpg|jpeg|png';
        //     $this->load->library('upload',$config);
        //
        //     if ( ! $this->upload->do_upload())
        //         {
        //                 $error = array('error' => $this->upload->display_errors());
        //
        //                 $this->load->view('pages/user_profile', $error);
        //         }
        //         else
        //         {
        //                 $file_data = $this->upload->data();
        //                 $data['img'] = base_url().'/assets/images/'.$file_data['file_name'];
        //                 $this->load->view('pages/userprofile', $data);
        //         }
        // }

        public function getPassword($user_id)
        {
          $this->form_validation->set_rules('passwordold','Current Password','required');
          $this->form_validation->set_rules('password','Password','required');
          $this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');

          if ($this->form_validation->run() == TRUE) {

          if (isset($_POST['updatebtn'])) {

              if ($this->User_model->updatePassword($user_id)) {

                  $this->session->set_flashdata('success','Password is updated');
                  redirect('Users/User/getPassword/'.$user_id);

              } else {
                  $this->session->set_flashdata('error','Password is not updated');
                  redirect('Users/getPassword/'.$user_id);
              }
            }
          } else {

                  $data['row'] = $this->User_model->edit($user_id);
                  $this->load->view('pages/User/userPasswordChange',$data);
          }

        }

        public function passwordChange()
        {
          $this->load->view('pages/userPasswordChange');
        }

        public function viewAccommodation() {
          $data['accomos'] = $this->User_model->getAccomo();
          $this->load->view('pages/User/User/accommodation_page', $data);
        }

        public function viewComments() {
          $data['comos'] = $this->User_model->getComments();
          $this->load->view('pages/User/accommodation_page', $data);
        }

        public function getAccomoPost($ac_id) {
          $data['row'] = $this->User_model->accomoPost($ac_id);
          $this->load->view('pages/User/accommo_post', $data);
        }

        public function dropComment()
        {
          $this->load->view('pages/addComment_page');
        }
        // public function getAccomoPost($ac_id) {
        //   $this->load->model('User_model');
        //   $accomos['row'] = $this->User_model->accomoPost($ac_id);
        //   $this->load->view('pages/accommo_post',['$accomos'=>$accomos]);
        // }

        public function acmoComment() {
          $this->form_validation->set_rules('comuser','Username','required');
          $this->form_validation->set_rules('comment','Comment','required');

          if ($this->form_validation->run() == TRUE) {

          $this->User_model->addAccoComment();

          //set message to be shown when adding comment is completed
          $this->session->set_flashdata('success','Comment is added');
          //redirect('User/acmPost', $data);
          // $this->load->model('User_model');
          // $data['row'] = $this->User_model->accomoPost($ac_id);
          redirect('Users/viewAccommodation',$data);
          //$this->load->view('pages/accommo_post',$data);

          } else {

            //$this->load->model('User_model');
            //$data['row'] = $this->User_model->accomoPost($ac_id);
            $this->load->view('pages/User/addComment_page');

            }

          }

          public function getUser($user_id)
          {
            $data['row'] = $this->User_model->fetchUser($user_id);
            $this->load->view('pages/User/user_profile',$data);
          }

        // public function acmoComment() {
        //   $this->form_validation->set_rules('comuser','Username','required');
        //   $this->form_validation->set_rules('comment','Comment','required');
        //
        //   if ($this->form_validation->run() == TRUE) {
        //
        //     if (isset($_POST['commentbtn'])) {
        //
        // 			if ($this->User_model->getAccomoPost($ac_id)) {
        //
        // 				$this->session->set_flashdata('success','Comment is added');
        // 				redirect('Users//'.$ac_id , 'refresh');
        //
        // 			} else {
        // 				$this->session->set_flashdata('error','Student is not updated');
        // 				redirect('Crud/editUser/'.$stu_id , 'refresh');
        // 			}
        // 		}
        //
        //   } else {
        //
        //     $this->load->model('User_model');
        //     $data['row'] = $this->User_model->accomoPost($ac_id);
        //     $this->load->view('pages/accommo_post',$data);
        //
        //     }
        //
        //   }



}




?>
