<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bprin
 * Date: 11/2/11
 * Time: 10:42 PM
 * To change this template use File | Settings | File Templates.
 */
 
class Create extends CI_Controller {

    function index()
    {
        $this->load->view('create_view');
    }


    public function submit()
    {
        $this->load->model('Users');

        if (count (($this->Users->get_user_by_name($this->input->post('name')))) > 0)
        {
            $this->load->view('create_view', array("message" => "failure", "error" => "user already exists"));;
        }
        else
        {
            echo $this->Users->insert_user($this->input->post('name'));
            $this->load->view('create_view', array("message" => "success!", "error" => ""));
        }
    }
}
