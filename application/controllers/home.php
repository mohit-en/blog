<?php
class home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("home_model");
    }

    public function about_user()
    {

        $id = 5;
        $data['data'] = $this->home_model->about_user_model($id);
        /* echo "<pre>";
            print_r($data);
        echo "</pre>"; */
        $this->load->view("user_about_page", $data);
    }

    public function index()
    {
        $data['posts'] = $this->home_model->getAllPosts();


        $this->load->view('public/index', $data);
    }
    public function userblog()
    {
        $this->load->view('public/userblog');
    }
    public function blogpage($id)
    {
        $data['post_data'] = $this->home_model->getPostsData($id);

        // print_r($data['post_data']->article_title);
        $this->load->view('public/blogpage', $data);
    }
}
