<?php
class home extends CI_Controller
{
    public function about_user()
    {
        $this->load->model("public_model");
        $id = 5;
        $data['data'] = $this->public_model->about_user_model($id);
        /* echo "<pre>";
            print_r($data);
        echo "</pre>"; */
        $this->load->view("user_about_page", $data);
    }

    public function index()
    {
        $this->load->view('public/index');
    }
    public function userblog()
    {
        $this->load->view('public/userblog');
    }
    public function blogpage()
    {
        $this->load->view('public/blogpage');
    }
}
