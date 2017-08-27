<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
class Upload extends CI_Controller {
	function __construct(){
		parent::__construct();
    	$this->load->model('main');
    	$this->load->helper(array('url'));                                                                  
	}
	
	public function index()
	{
		$api = $this->input->get('api');
		$username = $this->input->get('username');
		$id_data = $this->input->get('id_data');
		$param = array(
		    'data1' => $this->input->get('data1'),
		    'data2' => $this->input->get('data2'),
		    'data3' => $this->input->get('data3'),
		    'data4' => $this->input->get('data4'),
			'data5' => $this->input->get('data5')
		);
		$this->main->update($api,$param,$username,$id_data);
	}
	public function show()
	{
	    $where = array(
			'api_key' => $this->uri->segment(4),
			'username' => $this->uri->segment(3),
			'id_data' => $this->uri->segment(5)
			);
		$query = $this->db->get_where('data',$where);
        $counter = 0;
        $data = $query->result();

        header('Content-Type: application/json','charset=utf-8');
foreach($data as $key => $value){
        $status =array(
            ['id' => $key+1,'data1' => $value->data1 , 'data2' => $value->data2 , 'data3' => $value->data3 , 'data4' => $value->data4, 'data5' => $value->data5 ]  
        );
        $jadi = $status;
		
		}
        echo json_encode($jadi);
	}
}
