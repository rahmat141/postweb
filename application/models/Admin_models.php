<?php

class Admin_models extends CI_Model
{

    // Read data using username and password
    public function getAllMateri()
    {
        $this->db->select('*');
        $this->db->from('materi');
        return $this->db->get()->result_array();
    }
    public function addMateri($data)
    {
        $this->db->insert('materi', $data);
    }
    public function getMateribyId($id)
    {
        $this->db->select('*');
        $this->db->from('materi');
        $this->db->where('id', $id);
        return $this->db->get();
    }

    public function editMateri($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('materi', $data);
    }

    public function deleteMateri($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('materi');
    }
}
