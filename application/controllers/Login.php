<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
    
	
	public function index()
	{
		$this->load->view('login');
	}
    function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);

		$user = $this->m_login->cek_login("user",$where)->row();

		if(!empty($user)){ 
			$data_session = array(
				'id' => $user->id,
				'fullname' => $user->nama_user,
                'username' => $username,
                'status' => "login"
                );
 
			$this->session->set_userdata($data_session);
			redirect(base_url("user/home"));
		}else{
			$this->load->view('login', array('message' => 'Username dan Password salah!'));
		}
	}
 
	function logout(){
        session_destroy();
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
