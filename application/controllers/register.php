<?php

defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('admin/index');
        }
        $this->load->library('form_validation');
        $this->load->model('register_model');
    }

    function index()
    {
        $this->load->view('register');
    }

    function validation()
    {
        $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');

        if ($this->form_validation->run()) {

            $data = array(
                'name'  => $this->input->post('user_name'),
                'email'  => $this->input->post('user_email'),
                'password' => $this->input->post('user_password'),
                'country' => $this->input->post('country')
            );

            if ($this->db->where('name', $data['name'])->get('user_register')->num_rows() == 0) {
                $id = $this->register_model->insert($data);
                echo "Your request is send to the CEO";
            } else {
                // echo "User name already exist Please choose other.";
                // echo "User name already exist Please choose other.";
                echo "<script>alert('User name already exist Please choose other.'); window.location.href = '/blog/register' </script>";
            }
        } else {
            $this->index();
        }
    }
}
