<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function insertFadmin()
  {
      //insert data
      $data = array(
          //assign data into array elements
          'username' => $this->input->post('username'),
          'fname' => $this->input->post('fname'),
          'faculty' =>$this->input->post('faculty'),
          'email' =>$this->input->post('email'),
          'contactno' => $this->input->post('contactno'),
          'password' => sha1($this->input->post('password'))

      );
      //insert data to the database
      $this->db->insert('fac_admins',$data);
  }

  public function insertAccomo()
  {
      //insert data
      $data = array(
          //assign data into array elements
          'ac_title' => $this->input->post('ac_title'),
          'ac_content' => $this->input->post('ac_content'),
          'ac_date' =>$this->input->post('ac_date'),
          'ac_time' =>$this->input->post('ac_time')
      );
      //insert data to the database
      $this->db->insert('accommo',$data);
  }

  public function insertSchol()
  {
      //insert data
      $data = array(
          //assign data into array elements
          'sc_title' => $this->input->post('sc_title'),
          'sc_des' => $this->input->post('sc_des'),
          'sc_date' =>$this->input->post('sc_date'),
          'sc_time' =>$this->input->post('sc_time')
      );
      //insert data to the database
      $this->db->insert('schols',$data);
  }
}
