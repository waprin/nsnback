<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bprin
 * Date: 11/2/11
 * Time: 10:10 PM
 * To change this template use File | Settings | File Templates.
 */
 
class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login_view', array("message" => "", "error" => ""));
    }

    public function submit()
    {
        $this->load->library('session');
        $this->load->model('Users');

        $users = ($this->Users->get_user_by_name($this->input->post('name')));
        if (count ($users) > 1)
        {
            $this->load->view('login_view', array("message" => "failure", "error" => "impossible"));;
        }
        else if (count ($users) == 0)
        {
            $this->load->view('login_view', array("message" => "failure", "error" => "no such user exists"));;
        }
        else if (count ($users) == 1)
        {
            $user = $users[0];

            $this->session->set_userdata('userid', $user->id);
            $this->load->view('login_view', array("message" => "success", "error" => ""));
        }

    }

}
