<?php

class Upload extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        $this->load->view('upload_image', array('error' => ''));
    }

    function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        
        $this->load->library('upload', $config);
        $this->load->library('session');

        if (!$this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_image', $error);
        }
        else
        {
            $upload = $this->upload->data();
            $data = array('upload_data' => $upload);
            $this->load->model('Images');
            $this->Images->insert_image($this->session->userdata('userid'), $upload["file_name"], $this->input->post('day'));
            $this->load->view('upload_success', $data);
        }
    }

}
?>