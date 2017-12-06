<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suggestion  extends CI_Model
{
  public function getSuggestions($keyword)
  {
      $this->db->select('place');
      $this->db->like('place', $keyword);
      $res = $this->db->get('Places');

      return $res;
  }
}


?>
