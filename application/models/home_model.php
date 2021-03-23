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

        $postData = $this->db->query("SELECT tp.*,ul.user_name as creater FROM total_posts as tp left join user_list as ul on tp.user_id = ul.user_id order by tp.post_id desc LIMIT $limitNumber,$display_post_per_page ")->result();

        $oldPosts = $this->db->query("SELECT post_id,img_path,article_title,date FROM total_posts  LIMIT 0,3")->result();
        $newPosts = $this->db->query("SELECT post_id,img_path,article_title,date FROM total_posts  order by post_id desc LIMIT 0,3")->result();

        return array(
            'total_pages' => $totalPages,
            'post_data' => $postData,
            'active_page' => $formData['page'],
            'old_posts' => $oldPosts,
            'new_posts' => $newPosts
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

    function get_users_data($formData)
    {
        $currentPage = $formData['page'];
        $userName = $formData['user_name'];

        $display_post_per_page = 4;

        $user_id = $this->db->query("SELECT user_id FROM user_list where user_name = '$userName'")->result()[0]->user_id;

        $user_data = $this->db->query("SELECT * FROM user_list where user_id = $user_id")->result()[0];
        $totalPosts = $this->db->query("SELECT * FROM total_posts where user_id = $user_id")->num_rows();

        $totalPages = ceil($totalPosts / $display_post_per_page);

        $limitNumber = ($currentPage - 1) * $display_post_per_page;

        $postData = $this->db->query("SELECT * FROM total_posts where user_id = $user_id  order by post_id desc LIMIT $limitNumber,$display_post_per_page")->result();

        $oldPosts = $this->db->query("SELECT post_id,img_path,article_title,date FROM total_posts where user_id = $user_id LIMIT 0,3")->result();
        $newPosts = $this->db->query("SELECT post_id,img_path,article_title,date FROM total_posts where user_id = $user_id order by post_id desc LIMIT 0,3")->result();

        return array(
            'total_pages' => $totalPages,
            'post_data' => $postData,
            'active_page' => $formData['page'],
            'user_data' => $user_data,
            'old_posts' => $oldPosts,
            'new_posts' => $newPosts
        );
    }
}
