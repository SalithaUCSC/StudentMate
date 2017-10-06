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
            'avatar' => $this->input->post('avatar'),
            'password' => sha1($this->input->post('password'))

        );
        //insert data to the database
        $this->db->insert('users',$data);

    }

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

    public function getClubs() {

        $this->db->select('*');
        $this->db->from('clubs');
        $this->db->order_by('clubid','DESC');
        $query = $this->db->get();

        return $query->result();

    }

    public function getNews() {

        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('newsid','DESC');
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

    // public function getComments() {
    //
    //     $this->db->select('*');
    //     $this->db->from('ac_comments');
    //     $this->db->order_by('com_id','DESC');
    //     $query = $this->db->get();
    //
    //     return $query->result();
    //
    // }

    public function clubUser () {

        //insert data
        $data = array(
            //assign data into array elements
            'username' => $this->input->post('username'),
            'fname' => $this->input->post('fname'),
            'email' =>$this->input->post('email'),
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
      'comuser' => $this->input->post('comuser'),
      'comment' => $this->input->post('comment')
    );

    $this->db->insert('ac_comments',$data);

    }

    public function edit($user_id) {

                $this->db->where('user_id',$user_id);
                $query = $this->db->get_where('users', array('user_id' => $user_id));

                return $query->row();

    }

    public function update($user_id) {

                $data = array(
                'fname' => $this->input->post('fname'),
                'email' => $this->input->post('email'),
                'nic' =>$this->input->post('nic')

                );
                $this->db->where('user_id',$user_id);
                $this->db->update('users',$data);
                return $user_id;
            }


}
?>
