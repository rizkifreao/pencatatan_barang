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
    $this->template->display('admin/laporan/index',$data);
  }

  public function print()
  {
    $startDate = $this->input->post("periodeAwal");
    $endDate = $this->input->post("periodeAkhir");
    $produksi = $this->m_Produksi->getAllBy(array(
      'tanggal >=' => $startDate,
      'tanggal <=' => $endDate,
    ));
    // echo json_encode($produksi);
    $data = [
      'title' => "Laporan",
      'periode' => $startDate." - ".$endDate,
      'produksi' => $produksi
    ];
    $this->load->view('admin/laporan/print',$data);
  }

}


/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */