<?php

class User_model extends CI_Model {

    public function insertUser () {

        //insert data
        $data = array(
            //assign data into array elements
            'username' => $this->input->post('username'),
            'fname' => $this->input->post('fname'),
            'email' =>$this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'faculty' => $this->input->post('faculty'),
            'indexno' => $this->input->post('indexno'),
            //'avatar' => $this->input->post('avatar'),
            'password' => sha1($this->input->post('password'))

        );
        //insert data to the database
        $this->db->insert('users',$data);

    }
    // public function insertImg () {
    //
    //     //insert data
    //     $data = array(
    //         //assign data into array elements
    //         'avatar' => $this->input->post('avatar')
    //     );
    //     //insert data to the database
    //     $this->db->insert('users',$data);
    //
    // }

    public function checkLogin() {

    //enter username and password
    $username = $this->input->post('username',TRUE);
    // $fname = $this->input->post('fname',TRUE);
    $password = sha1($this->input->post('password',TRUE));

    //fetch data from database
    $this->db->where('username',$username);
    $this->db->where('password',$password);

    $res = $this->db->get('users');

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

    public function getClubs() {

        $this->db->select('*');
        $this->db->from('clubs');
        $this->db->order_by('clubid','DESC');
        $this->db->where('faculty',$_SESSION['faculty']);
        $query = $this->db->get();
        return $query->result();

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

    public function getNews() {

        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('newsid','DESC');
        $this->db->where('faculty',$_SESSION['faculty']);
        $query = $this->db->get();

        return $query->result();

    }

    public function getSchols() {

        $this->db->select('*');
        $this->db->from('schols');
        $this->db->order_by('sc_id','DESC');
        $query = $this->db->get();

        return $query->result();

    }

    public function getAccomo() {

        $this->db->select('*');
        $this->db->from('accommo');
        $this->db->order_by('ac_id','DESC');
        $query = $this->db->get();

        return $query->result();

    }

    public function accomoPost($ac_id) {

      $this->db->where('ac_id',$ac_id);
      $query = $this->db->get_where('accommo', array('ac_id' => $ac_id));
      return $query->row();

    }

    public function fetchUser($user_id) {

      $this->db->where('user_id',$user_id);
      $query = $this->db->get_where('users', array('user_id' => $user_id));
      return $query->row();

    }

    // public function accomoPost($ac_id) {
    //
    //
    //   $query = $this->db->get_where('accommo', array('ac_id' => $ac_id));
    //   if ($query->num_rows() > 0) {
    //       return $query->row();
    //   }
    //
    //
    // }

    public function getComments() {

        $this->db->select('*');
        $this->db->from('ac_comments');
        $this->db->order_by('com_id','DESC');
        $query = $this->db->get();

        return $query->result();

    }

    public function clubUser () {

        //insert data
        $data = array(
            //assign data into array elements
            'username' => $this->input->post('username'),
            'fname' => $this->input->post('fname'),
            'email' =>$this->input->post('email'),
            'faculty' => $this->input->post('faculty'),
            'contact' => $this->input->post('contact'),
            'indexno' => $this->input->post('indexno'),
            'gender' => $this->input->post('gender'),
            'clubname' => $this->input->post('clubname'),
            'linkedin' => $this->input->post('linkedin'),
            'facebook' => $this->input->post('facebook')

        );
        //insert data to the database
        $this->db->insert('clubusers',$data);

    }

    public function addAccoComment() {

      $data = array(
      //'ac_id' => $this->input->post('ac_id'),
      'comuser' => $this->input->post('comuser'),
      'comment' => $this->input->post('comment')
    );
    // return $this->db->insert('ac_comments', $data);
      $this->db->where('$ac_id',$ac_id);
      $this->db->insert('ac_comments',$data);
      return $ac_id;

    }

    public function edit($user_id) {

      $this->db->where('user_id',$user_id);
      $query = $this->db->get_where('users', array('user_id' => $user_id));

      return $query->row();

    }

    public function update($user_id) {

      $data = array(
        // 'user_id' => $this->input->post('user_id'),
      'fname' => $this->input->post('fname'),
      'email' => $this->input->post('email'),
      'indexno' =>$this->input->post('indexno'),
      'contact' =>$this->input->post('contact')

      );
      $this->db->where('user_id',$user_id);
      $this->db->update('users',$data);
      return $user_id;
  }

  public function updatePassword($user_id) {
    $data = array(
    'password' => sha1($this->input->post('password')),
    );
    $this->db->where('user_id',$user_id);
    $this->db->update('users',$data);
    return $user_id;
  }


}
?>
