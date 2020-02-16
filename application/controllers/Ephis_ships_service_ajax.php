<?php
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') or exit('No direct script access allowed');

class Ephis_ships_service_ajax extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function select_ships()
    {
        $post_shp_id = null;

        $this->load->model('Da_ships', 'dsh');
        $this->dsh->shp_id = $post_shp_id;
        $json_rs_ships = $this->dsh->select();

        echo json_encode($json_rs_ships);
    }

    public function insert_ships()
    {
        $post_shp_th = "post_shp_th";
        $post_shp_en = "post_shp_en";
        $post_shp_def = "post_shp_def";
        $post_shp_sta = "y";

        $this->load->model('Da_ships', 'dsh');
        $this->dsh->shp_th = $post_shp_th;
        $this->dsh->shp_en = $post_shp_en;
        $this->dsh->shp_def = $post_shp_def;
        $this->dsh->shp_sta = $post_shp_sta;
        $json_qu_ships = $this->dsh->insert();

        echo json_encode($json_qu_ships);
    }

    public function update_ships()
    {
        $post_shp_id = 2;
        $post_shp_th = "update_post_shp_th";
        $post_shp_en = "update_post_shp_en";
        $post_shp_def = "update_post_shp_def";
        $post_shp_sta = "update";

        $this->load->model('Da_ships', 'dsh');
        $this->dsh->shp_id = $post_shp_id;
        $this->dsh->shp_th = $post_shp_th;
        $this->dsh->shp_en = $post_shp_en;
        $this->dsh->shp_def = $post_shp_def;
        $this->dsh->shp_sta = $post_shp_sta;
        $json_qu_ships = $this->dsh->update();

        echo json_encode($json_qu_ships);
    }

    public function delete_ships()
    {
        $post_shp_id = 3;

        $this->load->model('Da_ships', 'dsh');
        $this->dsh->shp_id = $post_shp_id;
        $json_qu_ships = $this->dsh->delete();

        echo json_encode($json_qu_ships);
    }
}

/* End of file Ephis_ships_service_ajax.php */
