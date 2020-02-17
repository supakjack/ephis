<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'controllers/Ephis_Controller.php';

class Ephis_alert extends Ephis_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function show()
    {
        if (!isset($this->session->id)) {
            $this->index();
        } else {
            $method = "monitor";
            $this->output('v_alert', array('method' => $method));
        }
    }

    public function authen()
    {
        if (!isset($this->session->id)) {
            $this->index();
        } else {
            $method = "authen";
            $this->output('v_authen', array('method' => $method));
        }
    }

    public function index($msg = null)
    {
        if (isset($msg)) {
            if ($msg == "logout") {
                $this->session->unset_userdata('id');
            }
        }
        if (!isset($this->session->id)) {
            $this->output('v_login');
        } else {
            redirect(base_url('Ephis_alert/show'), 'refresh');
        }
    }
}

/* End of file Controllername.php */
