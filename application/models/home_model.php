<?php
class home_model extends CI_Model
{
    function about_user_model($id)
    {
        $data = $this->db->where('user_id', $id)
            ->get('user_list')->result_array();

        return $data;
    }

    function getAllPosts()
    {
        $data = $this->db->get('total_posts')->result_array();

        return $data;
    }

    function getPostsData($id)
    {
        $data = $this->db->where('post_id', $id)->get('total_posts')->result()[0];

        return $data;
    }
}
