<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_register');
    }
    
	
	public function index()
	{
		$this->load->view('register');
	}
    function save(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$username = $this->input->post('username');
		$param = array(
			'nama_user' => $nama,
			'username' => $username,
			'email' => $email,
			'password' => md5($password)
		);
		$this->m_register->create($param);
		redirect('user/home');
	}
}
