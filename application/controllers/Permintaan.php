<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
/**
 *
 * Model Permintaan
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    rizkipebrianto <rizkipebrianto96@gmail.com>
 * @link      https://github.com/rizkifreao
 * @param     ...
 * @return    ...
 *
 */

class Permintaan extends CI_Controller { 

    function __construct(){	
        parent::__construct();
        check_login();
    }

    public function index()
    {
        $data['breadcumbs'] = "Permintaan Material";
        $this->template->display('admin/permintaan/index',$data);
    }

    
}