<?php
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') or exit('No direct script access allowed');

class Ephis_users_service_ajax extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function select_users()
    {
        $post_usr_id = null;

        $this->load->model('Da_users', 'dus');
        $this->dus->usr_id = $post_usr_id;
        $json_rs_users = $this->dus->select();

        echo json_encode($json_rs_users);
    }

    public function insert_users()
    {
        $post_usr_username = "post_usr_username";
        $post_usr_pass = "post_usr_pass";
        $post_usr_pfname = "post_usr_pfname";
        $post_usr_fname = "post_usr_fname";
        $post_usr_lname = "post_usr_lname";
        $post_usr_nname = "post_usr_nname";
        $post_usr_sta = "post_usr_sta";
        $post_usr_shp_id = -1;

        $this->load->model('Da_users', 'dus');
        $this->dus->usr_username = $post_usr_username;
        $this->dus->usr_pass = $post_usr_pass;
        $this->dus->usr_pfname = $post_usr_pfname;
        $this->dus->usr_fname = $post_usr_fname;
        $this->dus->usr_lname = $post_usr_lname;
        $this->dus->usr_nname = $post_usr_nname;
        $this->dus->usr_sta = $post_usr_sta;
        $this->dus->usr_shp_id = $post_usr_shp_id;
        $json_qu_users = $this->dus->insert();

        echo json_encode($json_qu_users);
    }

    public function update_users()
    {
        $user = $this->input->post('user');
        $post_usr_id = $user['usr_id'];
        $post_usr_username = $user['usr_username'];
        $post_usr_pass = $user['usr_pass'];
        $post_usr_pfname = $user['usr_pfname'];
        $post_usr_fname = $user['usr_fname'];
        $post_usr_lname = $user['usr_lname'];
        $post_usr_nname = $user['usr_nname'];
        $post_usr_sta = $user['usr_sta'];
        $post_usr_shp_id = $user['usr_shp_id'];

        $this->load->model('Da_users', 'dus');
        $this->dus->usr_id = $post_usr_id;
        $this->dus->usr_username = $post_usr_username;
        $this->dus->usr_pass = $post_usr_pass;
        $this->dus->usr_pfname = $post_usr_pfname;
        $this->dus->usr_fname = $post_usr_fname;
        $this->dus->usr_lname = $post_usr_lname;
        $this->dus->usr_nname = $post_usr_nname;
        $this->dus->usr_sta = $post_usr_sta;
        $this->dus->usr_shp_id = $post_usr_shp_id;
        $json_qu_users = $this->dus->update();

        echo json_encode($json_qu_users);
    }

    public function delete_users()
    {
        $post_usr_id = 7;

        $this->load->model('Da_users', 'dus');
        $this->dus->usr_id = $post_usr_id;
        $json_qu_users = $this->dus->delete();

        echo json_encode($json_qu_users);
    }
}

/* End of file Ephis_users_service_ajax.php */
