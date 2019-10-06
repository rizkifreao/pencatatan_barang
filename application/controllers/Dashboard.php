<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->database();
        check_login();
    }
	
	public function index()
	{
        $data['breadcumbs'] = "Dashboard";
		$this->template->display('admin/dashboard/index',$data);
	}
}
