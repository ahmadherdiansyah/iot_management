<?php 
 
class M_user extends CI_Model{	
	
	function device_list($where){		
	$this->db->where("username", $where);
	return $this->db->get('device')->result();
	}
	function device_view($where1,$where2,$where3){		
	$this->db->where("username", $where1);
	$this->db->where("api_key", $where2);
	$this->db->where("id_data", $where3);
	return $this->db->get('data')->result();
	}
	function nama_view($where1,$where2,$where3){		
	$this->db->where("username", $where1);
	$this->db->where("api_key", $where2);
	$this->db->where("id_nama", $where3);
	return $this->db->get('device')->result();
	}
	function api_list($where){		
	$this->db->where("username", $where);
	return $this->db->get('api_key')->result();
	}
	function user_get($id){		
		$this->db->where("id", $id);
        return $this->db->get("user")->row();
	}

	function user_delete($id){		
		$this->db->where("id", $id);
        $this->db->delete("user");
	}

	function user_update($id, $param){		
		$this->db->where("id", $id);
        $this->db->update("user", $param);
	}

	function device_create($param,$param_data){
        $this->db->insert('device', $param);
	$this->db->insert('data', $param_data);
	}
	function api_create($param){
        $this->db->insert('api_key', $param);
	}
	public function hitung($table,$where)
	{
	return $this->db->get_where($table,$where);
	}
}