<?php

class Materi_models extends CI_Model
{

    // Read data using username and password
    public function getAllMateri()
    {
        $this->db->select('*');
        $this->db->from('materi');
        return $this->db->get()->result_array();
    }
}
