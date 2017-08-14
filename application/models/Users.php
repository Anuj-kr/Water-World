<?php

class Users extends CI_model
{
    
    public function delivary_de($data)
    {
        $this->db->insert('Delivery_Details', $data);
    }
    public function Sign($data)
    {
        $this->db->insert('user', $data);
    }
    public function Login($Email, $pwd)
    {
        $sql = $this->db->where(['Email'=>$Email, 'pwd'=>$pwd] )
                        ->get('user');
        if($sql->num_rows()){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    public function __construct()
    {
        parent::__construct();
    }
}