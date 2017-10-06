<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacAdmin_model extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function LogFadmin() {

  $faculty = $this->input->post('faculty',TRUE);
  $username = $this->input->post('username',TRUE);
  $password = sha1($this->input->post('password',TRUE));

  //fetch data from database
  $this->db->where('faculty',$faculty);
  $this->db->where('username',$username);
  $this->db->where('password',$password);

  $res = $this->db->get('fac_admins');

  //check if there's a user with the above inputs
      if ($res->num_rows() > 0) {

          //retrieve the details of the user
          return $res->row();

      } else {

          return false;

      }

  }

}
