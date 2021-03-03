<?php
class login_model extends CI_Model
{
    function can_login($email, $password)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('user_list');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                    $store_password = $row->password;
                    if ($password == $store_password) {
                        $this->session->set_userdata('id', $row->user_id);
                        $this->session->set_userdata('name', $row->user_name);
                        $this->session->set_userdata('type', $row->type);
                    } else {
                        return 'Wrong Password';
                    }
                
            }
        } else {
            return 'Wrong Email Address';
        }
    }
}
