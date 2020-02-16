<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Da_users extends CI_Model
{
    public $usr_id;
    public $usr_username;
    public $usr_pass;
    public $usr_pfname;
    public $usr_fname;
    public $usr_lname;
    public $usr_nname;
    public $usr_sta;
    public $usr_shp_id;

    public function __construct()
    {
        parent::__construct();
        $this->usr_id = null;
        $this->usr_username = null;
        $this->usr_pass = null;
        $this->usr_pfname = null;
        $this->usr_fname = null;
        $this->usr_lname = null;
        $this->usr_nname = null;
        $this->usr_sta = null;
        $this->usr_shp_id = null;
    }

    public function select()
    {
        if (isset($this->usr_id)) {
            $this->db->where('usr_id', $this->usr_id); // users: WHERE usr_id = 'xxx'
        }
        $this->db->order_by("usr_sta", "asc");
        $query = $this->db->get('users');
        return $query->result();
    }

    public function insert()
    {
        $query = $this->db->insert('users', $this);
        $this->db->insert_id();
        return $query;
    }

    public function update()
    {
        $this->db->where('usr_id', $this->usr_id);
        $query = $this->db->update('users', $this);
        return $query;
    }

    public function update_usr_sta()
    {
        $this->db->set('usr_sta', $this->usr_sta);
        $this->db->where('usr_id', $this->usr_id);
        $query = $this->db->update('users');
        return $query;
    }

    public function delete()
    {
        $this->db->where('usr_id', $this->usr_id);
        $query = $this->db->delete('users');
        return $query;
    }
}

/* End of file Da_users.php */
