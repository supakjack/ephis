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
        $method="monitor";
        $this->output('v_alert',array('method'=>$method));
    }

    public function authen()
    {
        $method="authen";
        $this->output('v_authen',array('method'=>$method));
    }

    public function update_state_by_usr_id($id, $sta)
    {
        $this->load->model('Da_users', 'dus');
        $this->dus->usr_sta = $sta;
        $this->dus->usr_id = $id;
        $this->dus->update_usr_sta();

        redirect(base_url('Ephis_alert/show'), 'refresh');
    }
}

/* End of file Controllername.php */
