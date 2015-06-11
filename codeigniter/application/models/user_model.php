<?php

class User_model extends CI_Model
{

    public function __construct ()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUserByID ($id)
    {
        $user = array(
                'id' => 11,
                "name" => "John",
                "surname" => "Doe",
                "age" => 41
        );
        
        return $user;
    }

    public function getAllUser(){

        $query = $this->db->get('Student');
        if($query->num_rows()){
            return $query->result();
        } else {
            return FALSE;
        }

    }
}

?>