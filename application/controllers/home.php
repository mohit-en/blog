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

        $formData['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['data'] = $this->home_model->getAllPosts($formData);

        // print_r($data['posts']);
        $this->load->view('public/index', $data);
    }


    public function userblog($username)
    {
        $formData['user_name'] = $username;

        $formData['page'] = isset($_GET['page']) ? $_GET['page'] : 1;

        $data['data'] = $this->home_model->get_users_data($formData);

        $this->load->view('public/userblog');
    }
    public function blogpage($id)
    {

        $formData['id'] = $id;

        $data['post_data'] = $this->home_model->getPostsData($formData);

        // print_r($data['post_data']->article_title);
        $this->load->view('public/blogpage', $data);
    }
}
