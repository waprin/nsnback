<?php
/**
 * @author waprin@gmail.com
 */
 
class Images extends CI_Model{

    var $noshaverid = 0;
    var $filename = "";
    var $day = 0;

    function __construct()
    {
        parent::__construct();
    }

    function insert_image($noshaverid, $filename, $day)
    {
        $this->noshaverid = $noshaverid;
        $this->filename = $filename;
        $this->day = $day;

        $this->db->insert('pics', $this);
    }

    function update_entry($pic)
    {
        $this->noshaverid = $pic->noshaverid;
        $this->filename = $pic->filename;
        $this->day = $pic->day;

        $this->db->update('pics', $this, array('id' => $pic->id));;
    }

    function get_images_by_user($noshaverid)
    {
        $this->db->order_by('day');
        return $this->db->get_where('pics', array('noshaverid' => $noshaverid))->result();
    }

    function get_image_by_user_and_day($noshaverid, $day)
    {
        return $this->db->get_where('pics', array('noshaverid' => $noshaverid, 'day' => $day))->result();
    }


}
