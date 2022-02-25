<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    public function save($data)
    {
        return $this->db->insert("usuarios",$data);
    }

}
