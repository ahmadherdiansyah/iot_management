<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_user'); 
	}
	public function home()
	{
		$where = array(
			'username' => $this->session->userdata('username')
			);

		$device = $this->m_user->hitung("device",$where)->num_rows();
		$geek = $this->m_user->hitung("geeknesia",$where)->num_rows();
		$api = $this->m_user->hitung("api_key",$where)->num_rows();
		$this->template->load('layout', 'home', array('device' => $device,'api' => $api,'geek' => $geek));
	}
	public function device()
	{
		$where1 = $this->session->userdata('username');
		$where2 = $this->uri->segment(3);
		$where3 = $this->uri->segment(4);
		$user_list = $this->m_user->device_view($where1,$where2,$where3);
		$device_name = $this->m_user->nama_view($where1,$where2,$where3);
		$this->template->load('layout', 'user/deviceview', array('user_list' => $user_list,'device_name' => $device_name));
	}
	public function index()
	{

		$where = $this->session->userdata('username');
		$user_list = $this->m_user->device_list($where);
		$this->template->load('layout', 'user/index', array('user_list' => $user_list));
	}
	public function api()
	{
		$where = $this->session->userdata('username');
		$api_list = $this->m_user->api_list($where);
		$this->template->load('layout', 'user/api', array('api_list' => $api_list));
	}
	public function delete($id)
	{
		$this->m_user->user_delete($id);
		redirect('user/index');
	}

	public function create()
	{	
		$where = $this->session->userdata('username');
		$api_list = $this->m_user->api_list($where);	
		$this->template->load('layout', 'user/create',array('api_list' => $api_list));
	}
	public function create_api()
	{		
		$this->template->load('layout', 'user/createapi');
	}
	public function create_save()
	{
		$device1 = $this->input->post('device1');
		$device2 = $this->input->post('device2');
		$device3 = $this->input->post('device3');
		$device4 = $this->input->post('device4');
		$device5 = $this->input->post('device5');
		$api = $this->input->post('api');
		$param = array(
			'device1' => $device1,
			'device2' => $device2,
			'device3' => $device3,
			'device4' => $device4,
			'device5' => $device5,
			'api_key' => $api,
			'username' => $this->session->userdata('username')
		);
		$param_data = array(
			'data1' => '',
			'data2' => '',
			'data3' => '',
			'data4' => '',
			'data5' => '',
			'api_key' => $api,
			'username' => $this->session->userdata('username')
		);
		$this->m_user->device_create($param,$param_data);
		redirect('user/home');
	}
	public function createapi_save()
	{
		$api = $this->input->post('api');
		$param = array(
			'api_key' => $api,
			'username' => $this->session->userdata('username')
		);
		$this->m_user->api_create($param);
		redirect('user/home');
	}
	public function edit($id)
	{		
		$user = $this->m_user->user_get($id);
		$this->template->load('layout', 'user/edit', array("user" => $user, "id" => $id));
	}

	public function edit_save()
	{
		$id = $this->input->post('id');
		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');

		if(isset($password)){
			$param = array(
				'fullname' => $fullname,
				'password' => $password
			);
		}else {
			$param = array(
				'fullname' => $fullname
			);	
		}
		
		$this->m_user->user_update($id, $param);

		redirect('user/index');
	}
}
