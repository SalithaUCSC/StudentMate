<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacAdmin_model extends CI_Model{

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

  public function getFacNames()
  {
    $this->db->select('*');
    $this->db->from('fac_data');
    $query = $this->db->get();
    return $query->result();
  }

  public function editFadmin($user_id) {

    $this->db->where('user_id',$user_id);
    $query = $this->db->get_where('fac_admins', array('user_id' => $user_id));

    return $query->row();

  }

  public function getUsers() {

    $this->db->select('*');
    $this->db->from('users');
    $this->db->order_by('indexno');
    $this->db->where('faculty',$_SESSION['faculty']);
    $query = $this->db->get();
    return $query->result();

  }

  public function getUsersLimit() {

    $this->db->select('*');
    $this->db->from('users');
    $this->db->order_by('user_id','DESC');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result();

  }

  public function getUsersCount() {

    $this->db->select("COUNT(*) as num_row");
    $this->db->from('users');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->order_by('indexno');
    $query = $this->db->get();
    $result = $query->result();
    return $result[0]->num_row;

  }

  public function getClubUsers() {

    $this->db->select('*');
    $this->db->from('clubusers');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->where('clubname',$_SESSION['clubname']);
    $query = $this->db->get();
    return $query->result();

  }

  public function getClubUserCount() {

    $this->db->select("COUNT(*) as num_row");
    $this->db->from('clubusers');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->group_by('clubname');
    $query = $this->db->get();
    $result = $query->result();
    return $result[0]->num_row;

  }

  public function getUsersPagintaion($limit, $start) {

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->limit($limit, $start);
    $this->db->order_by('indexno');
    $query = $this->db->get();
    return $result = $query->result();

  }

  public function updateFadmin($user_id) {

    $data = array(
    'fname' => $this->input->post('fname'),
    'email' => $this->input->post('email'),
    'faculty' =>$this->input->post('faculty'),
    'contactno' =>$this->input->post('contactno')
    );
    $this->db->where('user_id',$user_id);
    $this->db->update('fac_admins',$data);
    return $user_id;
}

  public function delete($user_id) {
    $this->db->where('user_id',$user_id);
    $this->db->delete('users');
    redirect('FacAdmin/viewAllUsers');
  }

  public function addFacClubs()
  {
      //insert data
      $data = array(
          //assign data into array elements
          'clubname' => $this->input->post('clubname'),
          'faculty' => $this->input->post('faculty'),
          'clubdate' => $this->input->post('clubdate'),
          'clubtime' =>$this->input->post('clubtime'),
      );
      //insert data to the database
      $this->db->insert('clubs',$data);
  }

  public function getClubs() {

    $this->db->select('*');
    $this->db->from('clubs');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->order_by('clubid','DESC');
    $query = $this->db->get();
    return $query->result();

  }

  public function getClubsLimit() {

    $this->db->select('*');
    $this->db->from('clubs');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->order_by('clubid','DESC');
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result();

  }

  public function editClubs($clubid) {

     $this->db->where('clubid',$clubid);
     $query = $this->db->get_where('clubs', array('clubid' => $clubid));
     return $query->row();
   }

   public function deleteClubReg($c_id) {
     $this->db->where('c_id',$c_id);
     $this->db->delete('club_data');
     redirect('FacAdmin/viewClubUsers');
   }

   public function editClubReg($c_id) {

      $this->db->where('c_id',$c_id);
      $query = $this->db->get_where('club_data', array('c_id' => $c_id));

      return $query->row();

    }

    public function updateClubReg($c_id) {

       $data = array(
       'c_value' => $this->input->post('c_value'),
       'c_name' => $this->input->post('c_name')
       );
       $this->db->where('c_id',$c_id);
       $this->db->update('club_data',$data);
       return $c_id;
   }

   public function insertNewClub()
   {
     $cdata = array(
         'c_name' => $this->input->post('c_name'),
         'c_value' =>$this->input->post('c_value'),
         'c_faculty' => $this->input->post('c_faculty'),
     );
     //insert data to the database
     $this->db->insert('club_data',$cdata);
   }

   public function updateClubs($clubid) {

      $data = array(
      'clubname' => $this->input->post('clubname'),
      // 'faculty' => $this->input->post('faculty'),
      'clubdate' => $this->input->post('clubdate'),
      'clubtime' =>$this->input->post('clubtime'),
      );
      $this->db->where('clubid',$clubid);
      $this->db->update('clubs',$data);
      return $clubid;
  }

  public function deleteClubs($clubid) {
    $this->db->where('clubid',$clubid);
    $this->db->delete('clubs');
    redirect('FacAdmin/viewAllClubs');
  }

  public function getClubNames()
  {
    $this->db->select('*');
    $this->db->from('club_data');
    $this->db->where('c_faculty',$_SESSION['faculty']);
    $this->db->order_by('c_id');
    $query = $this->db->get();
    return $query->result();
  }

  // public function getSingleClub()
  // {
  //   $clubname = $this->input->post('clubname',TRUE);
  //
  //   $this->db->where('faculty',$_SESSION['faculty']);
  //   $this->db->where('clubname',$clubname);
  //
  //   $res = $this->db->get('clubusers');
  //
  //         if ($res->num_rows() > 0) {
  //
  //             return $res->row();
  //
  //         } else {
  //
  //             return false;
  //         }
  // }

  public function addFacNews() {
      //insert data
      $data = array(
          //assign data into array elements
          'tname' => $this->input->post('tname'),
          'faculty' => $this->input->post('faculty'),
          'date' => $this->input->post('date'),
          'time' =>$this->input->post('time'),
          'content' =>$this->input->post('content'),
      );
      //insert data to the database
      $this->db->insert('news',$data);
  }

  public function getNews() {

    $this->db->select('*');
    $this->db->from('news');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->order_by('newsid');
    $query = $this->db->get();
    return $query->result();

  }

  public function getNewsCount() {

    $this->db->select("COUNT(*) as num_row");
    $this->db->from('news');
    $this->db->where('faculty',$_SESSION['faculty']);
    $query = $this->db->get();
    $result = $query->result();
    return $result[0]->num_row;

  }

  public function getNewsPagintaion($limit, $start) {

    $this->db->select('*');
    $this->db->from('news');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->limit($limit, $start);
    $this->db->order_by('newsid', 'DESC');
    $query = $this->db->get();
    return $result = $query->result();

  }

  public function getNewsLimit() {

    $this->db->select('*');
    $this->db->from('news');
    $this->db->where('faculty',$_SESSION['faculty']);
    $this->db->order_by('newsid', 'DESC');
    $query = $this->db->get();
    return $query->result();

  }

  public function editNews($newsid) {

     $this->db->where('newsid',$newsid);
     $query = $this->db->get_where('news', array('newsid' => $newsid));

     return $query->row();

   }

   public function updateNews($newsid) {

      $data = array(
      'tname' => $this->input->post('tname'),
      'date' => $this->input->post('date'),
      'time' =>$this->input->post('time'),
      'content' =>$this->input->post('content'),
      );
      $this->db->where('newsid',$newsid);
      $this->db->update('news',$data);
      return $newsid;
  }

  public function deleteNews($newsid) {
    $this->db->where('newsid',$newsid);
    $this->db->delete('news');
    redirect('FacAdmin/viewAllNews');
  }






}
