<?php 

class Calender extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function index(){
		$data['result'] = $this->db->get("events")->result();

		foreach($data['result'] as $key=>$value){
			$data['data'][$key]['title'] = $value->title;
			$data['data'][$key]['start']=$value->start_date;
			$data['data'][$key]['end']= $value->end_date;
			$data['data'][$key]['backgroundColor'] = "#00a65a";
		}
		$this->load->view('my_calender', $data);
	}
}

 ?>