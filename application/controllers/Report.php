<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
      $this->load->model('Report_model');
  }

    // public function index()
    // {
    //     $this->load->view('pages/report_page');
    //
    // }

//get the total no of users ofthe system
    public function totalUsers()
    {
      $total =$this->Report_model->getTotalusers();
      return $total[0]["reg_count"];

    }

  //get the total no of users grouped by faculties
    public function totalUsesByFac()
    {
      $users =$this->Report_model->getTotalUsersByFac();
      print_r($users);

      return $users;
    }

    //function to get the count of registered users for the current month
    public function userCount()
    {
      //$currentDate=date("Y/m/d");
      $count =$this->Report_model->getUserCount();
      //print_r($count[0]["reg_count"]);
      return $count[0]["reg_count"];

    }

//get the count of registered users by faculty for the month
    public function userCountByFac()
    {
      $faculty=array('ucsc','mgt','science','arts');
      foreach($faculty as $fac)
      {
        $count = $this->Report_model->getCountByFac($fac);
        $count_array["$fac"] = $count[0]["reg_count"];
      }
      //print_r($count_array);
      return $count_array;
    }

//get the count of registered users by clubs for the month
    public function userCountByClubs()
    {
        $count = $this->Report_model->getCountByClub();
        return $count;


    }
//combining statistics for the monthly_report
  public function report()
  {
    $data =array(
      'totalUsers'=>$this->totalUsers(),
      'totalUsers_byFac' =>$this->totalUsesByFac(),
      'registeredUsers' =>$this->userCount(),
      'registeredUsers_byFac' => $this->userCountByFac(),
      'registeredUsers_byClub'=>$this->getCountByClub()
    );


    //$this->load->view();
  }

  public function create()
  {

    $data =array(
      'totalUsers'=>$this->totalUsers(),
      'totalUsers_byFac' =>$this->totalUsesByFac(),
      'registeredUsers' =>$this->userCount(),
      'registeredUsers_byFac' => $this->userCountByFac(),
      'registeredUsers_byClub'=>$this->userCountByClubs()
    );

    //saving the created file in /downloads/reports/

      $pdfFilePath = FCPATH."downloads/reports/report.pdf";

      $data['page_title'] = 'Hello world'; // pass data to the view

      if (file_exists($pdfFilePath) == FALSE)

      {

      	ini_set('memory_limit','32M'); // boost the memory limit if it's low ;)

      	$html = $this->load->view('pages/report_page', $data, true); // render the view into HTML

      	$this->load->library('pdf');

      	$pdf = $this->pdf->load();

      	$pdf->SetFooter('StudentMate '.'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure ;)

      	$pdf->WriteHTML($html); // write the HTML into the PDF

      	$pdf->Output('report.pdf', 'D'); // save to file because we can

      }


      //redirect("/downloads/reports/$filename.pdf");
  }


}
