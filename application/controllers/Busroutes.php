<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busroutes extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
      $this->load->model('Bus_model');
  }

    public function index()
    {
        $this->load->view('pages/busroute_page');

    }

    public function autocomplete()
    {
      $this->load->model('Suggestion');

      $keyword=$POST['data'];
      $resultset = $this->Suggestion->getSuggestions($keyword);
      if($resultset->num_rows()<=0)
      {
          $arr_res[]="Invalid";
      }else{
        foreach($resultset as $row)
        {
          $arr_res[]=$row->place;
        }
      }
      echo json_encode($arr_res);

    }

    public function init()
    {

        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $GLOBALS['flag']=0;
        //$data =array("From"=>array("index"=>0,"group"=>''),"To"=>array("index"=>0,"group"=>''));
        $from_data = array("index" => 0, "group" => '');
        $to_data = array("index" => 0, "group" => '');

        $from_data['index'] = $this->Bus_model->getIndex($from);
        $to_data['index'] = $this->Bus_model->getIndex($to);

        $from_data['group'] = $this->Bus_model->selectGroup($from_data['index']);
        $to_data['group'] = $this->Bus_model->selectGroup($to_data['index']);

        $output = $this->level1($from_data, $to_data);


        $data=array(
          "from"=>$from,
          "to"=>$to,
          "output"=>$output,
          "flag"=>$GLOBALS['flag']

        );
        if(count($output)>0){
          $this->load->view('pages/Routes/route_results',$data);
        }else{
          $this->load->view('pages/Routes/empty_results');
        }

        //print_r($data);


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
            $GLOBALS['flag']=1;
            return $arr;
        } else {
            //route by one bus
            return $final_arr;
        }
    }

    public function level2($from, $to)
    {
        $final_arr = $this->findroute_2($from, $to);//returns an array of places where combine two bus routes
        return $final_arr;


    }

    public function findroute_1($data)
        //finds the routes that have each index in their bus route
    {
        $possible_values = array();
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

        /*var_dump($from);
        echo "</br>";
        var_dump($to);*/
        $index =0;
        $bus=array();
        if (count($from) >= count($to)) {
            foreach ($from as $routef) {
                $row = $this->Bus_model->findroute($routef);
                $value_from = explode(" ", $row);

                $place = array();

                foreach ($to as $routet) {
                    $row = $this->Bus_model->findroute($routet);
                    $value_to = explode(" ", $row);

                    $arr = $this->match($value_from,$value_to);//the intersecting places of the two buses

                    foreach ($arr as $i)
                    {

                        $pl = $this->Bus_model->getPlace($i);
                        array_push($place,$pl);
                    }
                    $index++;
                    //$bus["out$index"]=array("from"=>$routef,"to"=>$routet,"intersection"=>$place);
                    array_push($bus,(array("from"=>$routef,"to"=>$routet,"intersection"=>$place)));
                    if (count($arr) > 0) {
                        return $bus;
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
