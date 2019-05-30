<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('bang_model');
	}	

	public function r($slug)
	{

		$args['title'] = "我的会员信息";
		$args['slug'] = $slug;
		$args['current'] = 3;
		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('member',array( 
			  'args' => $args
		));
        $this->load->view('footer',array( 
			  'args' => $args
		));

	}	

	public function test(){ 

		$this->load->view('test');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */