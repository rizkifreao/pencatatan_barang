<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Laporan
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Laporan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    check_login();
  }

  public function index()
  {
    $data = [
      'breadcumbs' => 'Laporan'
    ];
    $this->template->display('admin/laporan/index');
  }

}


/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */