<?php
class co_admin_model extends CI_Model
{
    function total_posts()
    {
        $id = $this->session->userdata('id');
        $data = $this->db->where('user_id', $id)
            ->get('total_posts')->result_array();
        $this->db->where('user_id', $id)
            ->set('total_post', count($data))
            ->update('user_list');
        return $data;
    }

    function row_delete($id)
    {
        if ($id > 0) {
            $this->db->where('post_id', $id)
                ->delete('total_posts');
        }
    }

    function update_profile_view()
    {
        $id = $this->session->userdata('id');
        $data = $this->db->where('user_id', $id)
            ->get('user_list')->result();
        return $data;
    }
    function update_profile($data)
    {
        $id = $this->session->userdata('id');
        $this->db->where('user_id', $id);
        $this->db->update('user_list',$data);
    }
}
