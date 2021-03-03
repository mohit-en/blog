<?php

class admin_model extends CI_Model
{
    function all()
    {
        return $users = $this->db->where('type','co_admin')
        ->get('user_list')->result_array(); //select * from user_list
    }
    function all_reg()
    {
        return $users = $this->db->where('access', 0)
            ->get('user_register')
            ->result_array(); //select * from user_register
    }
    function users_permission($id)
    {
        if ($id > 0) {

            // Update User_register table for give permission and instert inro user_list.
            $s = $this->db->where('reg_id', $id)
                ->set('access', '1')
                ->update('user_register');
            $data = $this->db->where('reg_id', $id)
                ->get('user_register')->result_object();

            $arr = ["user_name" => $data[0]->name, "email" => $data[0]->email, "password" => $data[0]->password, "reg_id" => $data[0]->reg_id];

            // print_r($arr);
            if ($s) {
                $this->db->insert('user_list', $arr);
            }
        }
    }

    function row_delete($id)
    {
        if ($id > 0) {
            $this->db->where('reg_id', $id)
                ->delete('user_register');
            $this->db->where('reg_id', $id)
                ->delete('user_list');
        }
    }


    function disp_post()
    {
        return $posts = $this->db->get('total_posts')->result_array(); //select * from total_posts
    }
}
