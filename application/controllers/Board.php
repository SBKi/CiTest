<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

	public function __construct()
  	{
    	parent::__construct();
    	$this->load->library('session');

    	if(!isset($_SESSION['userlogin'])){
    		//로그인 아닌 상태
    		$this->session->set_flashdata('error','로그인 후에 글을 작성할수있습니다.');
    		redirect('/auth/login');
    	}
	}

	public function add()
	{
		$this->load->view('include/header');
		$this->load->view('board/boardAdd');
	}
}
