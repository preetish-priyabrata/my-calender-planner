<?php
class Calcontrollers extends CI_Controller{
	public function __construct(){
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		$this->load->helper('url');
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library('session');
		// Load database
		$this->load->model('adminmodel','admin');
	}
	 function index(){
	 	$this->load->view('cal/index');
	 }
	 function event_log(){
	 	$this->load->view('cal/form');
	 }
	 public function add_event(){
	 	$data = array('plan_detail' =>trim($_POST['plan_detail']),'startdate'=>date("Y-m-d H:i:s", strtotime(trim($_POST['start']))),'enddate'=>date("Y-m-d H:i:s", strtotime(trim($_POST['end']))),'starttime'=>date("H:i:s", strtotime(trim($_POST['start']))),'endtime'=>date("H:i:s", strtotime(trim($_POST['end']))) );
	 	$tables="event";
		$result = $this->admin->insert_chat($tables,$data);
		if($result==1){
				redirect('add-event');
		}else{
			redirect('add-event');
		}
	 }
	 
}