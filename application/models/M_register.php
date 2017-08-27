<?php 
 
class M_register extends CI_Model{	
    function create($param){
        $this->db->insert('user', $param);
	}
}