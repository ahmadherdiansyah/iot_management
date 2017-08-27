<?php 
 
class Main extends CI_Model{	
	
	function user_list(){		
		return $this->db->get('users')->result();
	}

	function user_get($id){		
		$this->db->where("id", $id);
        return $this->db->get("users")->row();
	}

	function user_delete($id){		
		$this->db->where("id", $id);
        $this->db->delete("users");
	}

	function update($api,$param,$username,$id_data){		
		$this->db->where("api_key", $api);
		$this->db->where("username", $username);
		$this->db->where("id_data", $id_data);
        	$this->db->update("data", $param);
	}

	function user_create($param){
        $this->db->insert('users', $param);
	}
}
