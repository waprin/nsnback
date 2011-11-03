<?php

/**
 * @author waprin@gmail.com
 */

class Users extends CI_Model {

    var $name = "";
    var $registration_date = "";

    function __construct()
    {
        parent::__construct();
    }

    function insert_user($name)
    {
        $this->name = $name;
        $this->registration_date = time();

        return $this->db->insert('noshavers', $this);
    }

    function get_user_by_name($name)
    {
        $users =  $this->db->get_where('noshavers', array("name" => $name))->result();
        return $users[0];
    }

    function get_all_users()
    {
        return $this->db->get('noshavers')->result();
    }
}
