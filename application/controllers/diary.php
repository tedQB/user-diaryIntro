<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class diary extends CI_Controller {

	public function __construct()
	{
 		session_start();		
		parent::__construct();
		$this->load->model('diary_model');
		$this->load->model('bang_model');
	}	
 
	public function getAllList(){ 
		if (!isset($_SESSION['username']) ) { 
			echo isset($_SESSION['username']);
         	redirect(base_url('diary/loginError'));
      	}
		$args['title'] = "全部日记待帅选";
		$args['getAllList'] = $this->diary_model->getAllList();		
		$args['getAllResultCount'] = $this->diary_model->getAllResultCount($type='');
		$args['current'] = 1;
		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('getAllList',array(
			  'args' => $args
		));
		$this->load->view('footer',array(
			  'args' => $args
		));
       
	}

	public function index(){ 
		$this->load->view('index');
	}

	public function getRecList(){
		if (!isset($_SESSION['username']) ) {
         	redirect(base_url('diary/loginError'));
      	}		
		$args['title'] = "已推荐日记";
		$args['getAllList'] = $this->diary_model->getRecList();		
		$args['getAllResultCount'] = $this->diary_model->getAllResultCount($type='getRecList');
		$args['current'] = 2;
		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('getRecList',array(
			  'args' => $args
		));
       	$this->load->view('footer',array(
			  'args' => $args
		));
	}

	public function getNoList(){
		if (!isset($_SESSION['username']) ) {
         	redirect(base_url('diary/loginError'));
      	}		
		$args['title'] = "推荐驳回日记";
		$args['getAllList'] = $this->diary_model->getNoList();		
		$args['current'] = 3;
		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('getNoList',array( 
			  'args' => $args
		));
       	$this->load->view('footer',array(
			  'args' => $args
		));
	}

	public function getAjaxList () {
		$currentPage =  $_POST['cur_page'];
		$type = $_POST['type'];
		$rst = $this->diary_model->getAjaxList($currentPage,$type);			
		//header('Content-Type: application/json');
		
		echo json_encode($rst);
	}

	public function getRandAjaxList () {
		$currentPage =  $_POST['cur_page'];
		$type = $_POST['type'];
		$rst = $this->diary_model->getRandAjaxList($currentPage,$type);			
		//header('Content-Type: application/json');
		
		echo json_encode($rst);
	}


	public function recList(){
		$args['title'] = "会员推荐日记";
		$args['getAllList'] = $this->diary_model->getRecList();		
		$args['getAllResultCount'] = $this->diary_model->getAllResultCount($type='getRecList');
		$args['current'] = 4;
		$this->load->view('head',array(
			  'args' => $args
		));
		$this->load->view('recListOut',array(
			  'args' => $args
		));
	}

	public function changeState(){ 
		$id =  $_POST['id'];
		$state = $_POST['state'];
		$rst = $this->diary_model->changeState($id,$state);	
		echo $rst;

	}

	public function praise(){ 
		$id =  $_POST['id'];
		$state = $_POST['state'];
		$rst = $this->diary_model->praise($id,$state);	
		echo $rst;

	}

	public function loginError(){ 
	  	$this->load->view('error_message');
	}

	public function mimi(){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('email_address', 'Email Address', 'valid_email|required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
      if ( $this->form_validation->run() !== false ) {
         // then validation passed. Get from db
         $res = $this
                  ->diary_model
                  ->verify_user(
                     $this->input->post('email_address'), 
                     $this->input->post('password')
                  );

         if ( $res !== false ) {
            $_SESSION['username'] = $this->input->post('email_address');
            redirect(base_url('diary/getAllList'));
         }
         else{
            //redirect('/diary/loginError');
         }
      }
      $this->load->view('login_view');

   }
   public function logout(){
      session_destroy();
      $this->load->view('login_view');
   }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */