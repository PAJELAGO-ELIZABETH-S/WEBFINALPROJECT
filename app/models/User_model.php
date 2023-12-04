<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
    public function getInfo()
    {
        return $this->db->table('loginuser')->get_all();
    }
   
	
}
?>
