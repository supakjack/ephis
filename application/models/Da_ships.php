<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Da_ships extends CI_Model
{

    public $shp_id;
    public $shp_th;
    public $shp_en;
    public $shp_def;
    public $shp_sta;

    public function __construct()
    {
        parent::__construct();
        $this->shp_id = null;
        $this->shp_th = null;
        $this->shp_en = null;
        $this->shp_def = null;
        $this->shp_sta = null;
    }

    public function select()
    {
        if (isset($this->shp_id)) {
            $this->db->where('shp_id', $this->shp_id); // ships: WHERE shp_id = 'xxx'
        }
        $query = $this->db->get('ships');
        return $query->result();
    }

    public function insert()
    {
        $query = $this->db->insert('ships', $this);
        return $query;
    }

    public function update()
    {
        $this->db->where('shp_id', $this->shp_id);
        $query = $this->db->update('ships', $this);
        return $query;
    }

    public function delete()
    {
        $this->db->where('shp_id', $this->shp_id);
        $query = $this->db->delete('ships');
        return $query;
    }
}

/* End of file Da_ships.php */
