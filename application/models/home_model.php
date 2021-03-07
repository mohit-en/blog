<?php
class home_model extends CI_Model
{
    function about_user_model($id)
    {
        $data = $this->db->where('user_id', $id)
            ->get('user_list')->result_array();

        return $data;
    }

    function getAllPosts($formData)
    {
        $currentPage = $formData['page'];

        $display_post_per_page = 9;

        $totalPosts = $this->db->query("SELECT * FROM total_posts")->num_rows();

        $totalPages = ceil($totalPosts / $display_post_per_page);

        $limitNumber = ($currentPage - 1) * $display_post_per_page;

        $postData = $this->db->query("SELECT tp.*,ul.user_name as creater FROM total_posts as tp left join user_list as ul on tp.user_id = ul.user_id LIMIT $limitNumber,$display_post_per_page")->result();


        return array(
            'total_pages' => $totalPages,
            'post_data' => $postData,
            'active_page' => $formData['page']
        );
        // $data = $this->db->query("SELECT * FROM total_posts")->result();

        // return $data;
    }

    function getPostsData($formData)
    {
        // $data = $this->db->where('post_id', $id)->get('total_posts')->result()[0];

        $id = $formData['id'];

        $data = $this->db->query("SELECT tp.*,ul.user_name as creater FROM total_posts as tp left join user_list as ul on tp.user_id = ul.user_id WHERE post_id = $id")->result()[0];

        return $data;
    }
}
