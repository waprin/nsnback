<?php
/**
 * @author waprin@gmail.com
 */
class Display extends CI_Controller {

       function index()
       {
          $this->load->model("Users");
          $users = $this->Users->get_all_users();
          $names = array();
          foreach($users as $user)
          {
              $names[$user->name] = $user->name;
          }
          $this->load->view('select_user', array("users" => $names));
       }

       function user()
       {
            $this->load->model('Users');
            $this->load->model('Images');
            $user = $this->Users->get_user_by_name($this->input->post("user"));
            $names = array();
            $images = $this->Images->get_images_by_user($user->id);
            foreach ($images as $image)
            {
                $names[$image->day] = $image->filename;
            }
            $this->load->view('image_view', array('images' => $names));;
       }
}
