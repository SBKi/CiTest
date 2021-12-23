<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

 	public function __construct()
  	{
    	parent::__construct();
    	$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function profile()
	{
		$this->load->view('include/header');
		$this->load->view('auth/profile');
	}
	public function register()
	{
		$this->load->view('include/header');
		if(isset($_POST['register']))
		{
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			$this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');

			if($this->form_validation->run() === TRUE)
			{
				$data = array(
					'email' => $_POST['email'],
					'name' => $_POST['name'],
					'password' => $_POST['password']
				);
                $this->db->insert('member',$data);
                $this->session->set_flashdata('success','Success regiestered You can login now');
			}
		}
		$this->load->view('auth/register');
	}
	public function login()
	{
		$this->load->view('include/header');
		if(isset($_POST['login']))
		{
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');

			if($this->form_validation->run() === TRUE)
			{
				$email = $_POST['email'];
                $pssword = $_POST['password'];
                $sql = "SELECT * FROM MEMBER WHERE EMAIL = ? AND PASSWORD = ?";
                $user = $this->db->query($sql,array($email,$pssword))->row();
                if(isset($user)){


                $session_data = array(
                    'username' => $user->name,
                    'userlogin'=>TRUE
                );

                $this->session->set_userdata($session_data);
                redirect("/");
            	}else{
            		$this->session->set_flashdata('error','로그인 정보가 없습니다.');      	
            	}
			}
		}
		$this->load->view('auth/login');
	}

	public function logout(){
		$this->session->unset_userdata('userlogin');
		redirect('auth/login');
	}
}
