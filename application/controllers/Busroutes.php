<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busroutes extends CI_Controller
{
    public function index()
    {
        $this->load->view('pages/busroute_page');
        $this->load->model('Bus_model');
    }

    public function init()
    {
        $this->load->model('Bus_model');
        $from = $this->input->post('from');
        $to = $this->input->post('to');

        //$data =array("From"=>array("index"=>0,"group"=>''),"To"=>array("index"=>0,"group"=>''));
        $from_data = array("index" => 0, "group" => '');
        $to_data = array("index" => 0, "group" => '');

        $from_data['index'] = $this->Bus_model->getIndex($from);
        $to_data['index'] = $this->Bus_model->getIndex($to);

        $from_data['group'] = $this->Bus_model->selectGroup($from_data['index']);
        $to_data['group'] = $this->Bus_model->selectGroup($to_data['index']);

        $output = $this->level1($from_data, $to_data);
        var_dump($output);




    }

    public function level1($from_data, $to_data)
        //this is when only one bus is needed
    {
        $f = $this->findroute_1($from_data);
        $t = $this->findroute_1($to_data);


        $final_arr = array_intersect($f, $t);

        if (count($final_arr) == 0) {
            //means there are two or mose buses.level 2 calls
            $arr = $this->level2($f, $t);
            return $arr;
        } else {
            //route by one bus
            return $final_arr;
        }
    }

    public function level2($from, $to)
    {
        $final_arr = $this->findroute_2($from, $to);//returns an array of places where combine two bus routes
        $arr=array();
        foreach ($final_arr as $i)
        {
            $place = $this->Bus_model->getPlace($i);
            echo "</br>";
            var_dump($place);
        }


    }

    public function findroute_1($data)
        //finds the routes that have each index in their bus route
    {
        $possible_values = array();
        $this->load->model('Bus_model');
        foreach ($data['group'] as $route) {
            $row = $this->Bus_model->findroute($route);
            $value = explode(" ", $row);
            foreach ($value as $i) {
                if ((int)$i == $data['index']) {
                    array_push($possible_values, $route);
                }

            }
        }

        return $possible_values;

    }

    public function findroute_2($from, $to)
    {
        $this->load->model('Bus_model');
        /*var_dump($from);
        echo "</br>";
        var_dump($to);*/


        if (count($from) >= count($to)) {
            foreach ($from as $routef) {
                $row = $this->Bus_model->findroute($routef);
                $value_from = explode(" ", $row);

                foreach ($to as $routet) {
                    $row = $this->Bus_model->findroute($routet);
                    $value_to = explode(" ", $row);


                    echo "</br> array intersec";
                    $arr = $this->match($value_from,$value_to);
                    var_dump($arr);
                    if (count($arr) > 0) {
                        return $arr;
                    }


                }


            }
        }


    }

    public function match($from,$to)
    {
        $arr =array();
        foreach($from as $f)
        {
            foreach ($to as $t)
            {
                if($t==$f)
                {
                    array_push($arr,$t);
                }
            }

        }
        return $arr;
    }
}
