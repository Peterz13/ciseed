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
    //retrive all users
    public function getAllUser(){

        $query = $this->db->get('Student');
        if($query->num_rows()){
            return $query->result();
        } else {
            return FALSE;
        }

    }
    //add the user
    public function addUser($data){

        $this->db->insert('Student', $data);

        $id = $this->db->insert_id();
        if($id){
            return $id;
        } else {
            return FALSE;
        }

    }

      public function random(){

        //array of names 
        $namelist = array('Bulah','Kizzie','Shirleen','Russel','Royce','Paulene','Drema','Hyun','Gilbert','Kristeen','Romana','Jacki','Jamal','Ginny','Inger','Teodoro','Erlene','Berry','Natacha','Christie');
        $random = rand(0,20);
        $randompass = rand(0,20);

        //make a random username and password
        $data = array(
            'user_name' => $namelist[$random] . rand(0,2000),
            'password' => sha1($namelist[$random] . $namelist[$randompass])
        );

        //find the length of the database
         $query = $this->db->get('Student');
        if($num_row = $query->num_rows()){
            //find a random user and update
            $randomUser = rand(1,$num_row);
            $this->db->where('id', $randomUser);
            $this->db->update('Student', $data);    
            return TRUE;
        } else {
            return FALSE;
        }

    }
}

?>