<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Da_zones extends CI_Model
{

    public $zon_id;
    public $zon_th;
    public $zon_en;
    public $zon_def;
    public $zon_shp_id;

    public function __construct()
    {
        parent::__construct();
        $this->zon_id = null;
        $this->zon_th = null;
        $this->zon_en = null;
        $this->zon_def = null;
        $this->zon_shp_id = null;
    }

    public function select()
    {
        if (isset($this->zon_id)) {
            $this->db->where('zon_id', $this->zon_id); // zones: WHERE zon_id = 'xxx'
        }
        $query = $this->db->get('zones');
        return $query->result();
    }

    public function insert()
    {
        $query = $this->db->insert('zones', $this);
        return $query;
    }

    public function update()
    {
        $this->db->where('zon_id', $this->zon_id);
        $query = $this->db->update('zones', $this);
        return $query;
    }

    public function delete()
    {
        $this->db->where('zon_id', $this->zon_id);
        $query = $this->db->delete('zones');
        return $query;
    }
}

/* End of file Da_zones.php */
