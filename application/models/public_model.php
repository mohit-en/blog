<?php 
class public_model extends CI_Model
{
    function about_user_model($id)
    {
        $data = $this->db->where('user_id', $id)
                ->get('user_list')->result_array();

        return $data;
    }
}
