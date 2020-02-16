<?php
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') or exit('No direct script access allowed');

class Ephis_zones_service_ajax extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function select_zones()
    {
        $post_zon_id = null;

        $this->load->model('Da_zones', 'dzn');
        $this->dzn->zon_id = $post_zon_id;
        $json_rs_zones = $this->dzn->select();

        echo json_encode($json_rs_zones);
    }

    public function insert_zones()
    {
        $post_zon_th = "post_zon_th";
        $post_zon_en = "post_zon_en";
        $post_zon_def = "post_zon_def";
        $post_zon_shp_id = -1;

        $this->load->model('Da_zones', 'dzn');
        $this->dzn->zon_th = $post_zon_th;
        $this->dzn->zon_en = $post_zon_en;
        $this->dzn->zon_def = $post_zon_def;
        $this->dzn->zon_shp_id = $post_zon_shp_id;
        $json_qu_zones = $this->dzn->insert();

        echo json_encode($json_qu_zones);
    }

    public function update_zones()
    {
        $post_zon_id = 2;
        $post_zon_th = "update_post_zon_th";
        $post_zon_en = "update_post_zon_en";
        $post_zon_def = "update_post_zon_def";
        $post_zon_shp_id = -2;

        $this->load->model('Da_zones', 'dzn');
        $this->dzn->zon_id = $post_zon_id;
        $this->dzn->zon_th = $post_zon_th;
        $this->dzn->zon_en = $post_zon_en;
        $this->dzn->zon_def = $post_zon_def;
        $this->dzn->zon_shp_id = $post_zon_shp_id;
        $json_qu_zones = $this->dzn->update();

        echo json_encode($json_qu_zones);
    }

    public function delete_zones()
    {
        $post_zon_id = 8;

        $this->load->model('Da_zones', 'dzn');
        $this->dzn->zon_id = $post_zon_id;
        $json_qu_zones = $this->dzn->delete();

        echo json_encode($json_qu_zones);
    }
}

/* End of file Ephis_zones_service_ajax.php */
