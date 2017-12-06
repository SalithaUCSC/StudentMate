<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_model extends CI_Model
{

    public function getIndex($place)
    {
        $result =$this->db->get_where('places',array('place'=>$place));

        if($result->num_rows()>0)
        {
            $dest =$result->result_array();
            return (int)$dest[0]['no'];
        }

    }

    public function selectGroup($index)
    {

        $A =array(138,155,135,120,177,154); //1-25
        $B =array(176,141,120,125,138,103,122);//25-50
        $C =array(120,135,163);//50-75
        $D =array(135,143);//75-100
        $E =array(155,103,177,154);//100-125
        $F =array(100,101,154,155);//125-150

        //select the group for places
        if ($index<25){
            return array(138,155,135,120,177);
        }elseif ($index<50){
            return array(176,141,120,125,138,103,122);
        }elseif ($index<75){
            return array(120,135,163);
        }elseif ($index<100){
            return array(135,143);
        }elseif ($index<125){
            return array(155,103,177,154);
        }elseif ($index<150){
            return array(100,101,154,155);
        }
    }

    public function findroute($route_no)
    {
        $result =$this->db->get_where('busroute',array('busIndex'=>$route_no));

        if($result->num_rows()>0)
        {
            $arr = $result->result_array();
            return $arr[0]['route'];
        }
    }

    public function getPlace($place)
    {
        $result =$this->db->get_where('places',array('no'=>(int)$place));

        if($result->num_rows()>0)
        {
            $row=$result->result_array();
            return $row[0]['place'];
        }
    }
}
