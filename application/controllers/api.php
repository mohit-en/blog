<?php
defined('BASEPATH') or exit('No direct script access allowed');

class api extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
        // if ($this->session->userdata('type') != "co_admin") {
        //     redirect('admin/index');
        // }
    }
    // For calender
    function fetchEvents()
    {
        if ($this->input->post('uid')) {
            $formData['id'] = $this->input->post('uid');
            $Alldata = $this->api_model->getEventsModel($formData);
            $data = array();

            foreach ($Alldata as $row) {
                $data[] = array(
                    'id' => $row->id,
                    'title' => $row->title,
                    'start' => $row->date_from,
                    'end' => $row->date_to,
                    'color' => $row->color
                );
            }


            echo json_encode($data);
        }
    }

    function insertEvents()
    {
        if ($this->input->post('title')) {
            $formData['user_id'] = $this->input->post('uid');
            $formData['title'] = $this->input->post('title');
            $formData['date_from'] = $this->input->post('start');
            $formData['date_to'] = $this->input->post('end');
            $formData['color'] = $this->input->post('color');

            $this->api_model->addEventsModel($formData);
        }
    }

    function updateEvents()
    {
        if ($this->input->post('user_id')) {
            $formData['user_id'] = $this->input->post('user_id');
            $formData['event_id'] = $this->input->post('event_id');
            $formData['date_from'] = $this->input->post('start');
            $formData['date_to'] = $this->input->post('end');

            $this->api_model->updateEventsModel($formData);
        }
    }

    function deleteEvents()
    {
        if ($this->input->post('event_id')) {
            $formData['event_id'] = $this->input->post('event_id');

            $this->api_model->deleteEventsModel($formData);
        }
    }


    // For Text editor
    public function add_post_api()
    {
        if ($this->input->post("title")) {
            $formData['article_title'] = $this->input->post("title");
            $formData['short_description'] = $this->input->post("short_description");

            $formData['article'] = $this->input->post("data");
            $formData['user_id'] = $this->session->userdata('id');
            $formData['creater'] = $this->session->userdata('name');
            $formData['date'] = date('Y-m-d');

            if ($_FILES['poster_img'] && $_FILES['poster_img']['tmp_name']) {
                $imageFileType = pathinfo($_FILES['poster_img']['name'], PATHINFO_EXTENSION);
                $filename = rand(1, 10000) . "-" . rand(1, 10000) . "-" . rand(1, 10000) . rand(1, 10000) . ".$imageFileType";
                $location = "uploads/posts/" . $filename;

                move_uploaded_file($_FILES['poster_img']['tmp_name'], $location);

                $formData['img_path'] = $location;
            }
            $this->api_model->insert_post_model($formData);
        }
    }
}
