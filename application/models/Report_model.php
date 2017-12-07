<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model{

  public function getTotalusers()
  {
    $this->db->select('COUNT(user_id) as "reg_count"');
    $count = $this->db->get('users');

    return $count->result_array();
  }

  public function getTotalUsersByFac()
  {
    $this->db->select('faculty, COUNT(faculty) as "reg_count"');
    $this->db->where('flag',1);
    $this->db->group_by('faculty');
    $this->db->order_by('reg_count','desc');
    $results = $this->db->get('users');

    return $results->result_array();
  }

  public function getUserCount()
  {
    $this->db->select('COUNT(user_id) as "reg_count"');
    $this->db->where('MONTH(`reg_date`) = MONTH(CURRENT_DATE())');
    $this->db->where('YEAR(`reg_date`) = YEAR(CURRENT_DATE())');
    $this->db->where('flag',1);

    $result = $this->db->get('users');

    return $result->result_array();

  }

  public function getCountByFac($fac)
  {
    $this->db->select('faculty,COUNT(user_id) as "reg_count"');
    $this->db->where('MONTH(`reg_date`) = MONTH(CURRENT_DATE())');
    $this->db->where('YEAR(`reg_date`) = YEAR(CURRENT_DATE())');
    $this->db->where('flag',1);
    $this->db->where('faculty',$fac);

    $result = $this->db->get('users');

    return $result->result_array();
  }

  public function getClubs()
  {
    $this->db->select('clubname');
    $this->db->where('MONTH(`reg_date`) = MONTH(CURRENT_DATE())');
    $this->db->where('YEAR(`reg_date`) = YEAR(CURRENT_DATE())');

    $resuts = $this->db->get('clubs');

    if($results->num_rows()>0){
      return $results->result_array();
    }
  }

  public function getCountByClub()
  {
    $this->db->select('clubname, COUNT(clubid) as "reg_count"');
    $this->db->group_by('clubid');
    $this->db->order_by('reg_count', 'desc');
    $results = $this->db->get('clubs');

    return $results->result_array();
  }

//store the statistics over the month
  public function setStatistics($data)
  {
    $this->db-insert('report',$data);
  }
}
