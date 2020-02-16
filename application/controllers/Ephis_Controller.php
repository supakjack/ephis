<?php
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') or exit('No direct script access allowed');

class Ephis_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function output($view, $data = null)
	{
		$this->load->view('header', $data, FALSE);
		$this->load->view($view, $data, FALSE);
		$this->load->view('footer', $data, FALSE);
	}
}

/* End of file Ephis.php */
