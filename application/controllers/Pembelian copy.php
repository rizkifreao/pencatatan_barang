<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
 

class Pembelian extends CI_Controller { 

    function __construct(){	
        parent::__construct();
        check_login();
    }
    
    public function index()
    {
        $data['breadcumbs'] = "Pembelian Material";
        $this->template->display('admin/pembelian/index',$data);
    }

    public function detailPembelianJson($id)
    {
        header('Content-Type: application/json');
        $det_pembelian = $this->M_Pembelian_detail->getDetail($id);
        $data = array(
            'id' => $det_pembelian->id,
            'materialid' => $det_pembelian->materialid,
            'label'=> $this->M_Material->getDetail($det_pembelian->materialid)->label,
            'jumlah'=> $det_pembelian->jumlah 
        );
        echo json_encode($data);
    }

    public function create($id="")
    {
        $pembelian = $this->M_Pembelian->getDetail($id);
        if (!$pembelian) {
            $this->session->set_flashdata('alert',error('Data tidak ditemukan'));
            redirect('pembelian');
        }
        if (empty($id)) {
            $data['nofaktur'] = '';
            $this->M_Pembelian->insert($data);
            $lastID = $this->db->insert_id();
            redirect('pembelian/create/'.$lastID);
        }
        $data['breadcumbs'] = "Pembelian Material";
        $data['pembelian'] = $pembelian;
        $data['det_material'] = $this->M_Pembelian_detail->getAllBy("pembelianid =".$id);
        $data['material'] = $this->M_Material->getAll();
        $this->template->display('admin/pembelian/create',$data);
    }

    public function addMaterial()
    {
        // update atribut faktur
        // $pembelian["id_pembelian"] = $pembelianid = $this->input->post("id_pembelian");
		// $pembelian["nofaktur"] = $this->input->post("nofaktur");
		// $pembelian["suplier"] = $this->input->post("suplier");
		// $pembelian["tanggal"] = $this->input->post("tanggal");
		// $pembelian["keterangan"] = $this->input->post("tanggal");
        // $this->M_Pembelian->update($pembelianid,$pembelian);
        
        // Insert to table det_pembelian
        $id = $this->input->post("id");
        $data["pembelianid"] = $pembelianid = $this->input->post("pembelianid");
        $data["materialid"] = $id_material = $this->input->post("materialid");
        $data["jumlah"] = $jumlah = $this->input->post("jumlah");

        if ($id) {
            $this->session->set_flashdata('alert',success('Berhasil diperbaharui'));
            $this->M_Pembelian_detail->update($id,$data);
        }else{
            $this->session->set_flashdata('alert',success('Berhasil ditambahkan'));
            $this->M_Pembelian_detail->insert($data);
        }

        redirect("pembelian/create/".$pembelianid);
        // update stok material
        // $stokakhir = $this->M_Material->getDetail($id_material)->stok;
        // $stokBaru['stok'] = $stokakhir + $jumlah;
    }

    public function hapusMaterial($id)
    {
        $pembelianid = $this->M_Pembelian_detail->getDetail($id)->pembelianid;
        $this->M_Pembelian_detail->delete($id);
        $this->session->set_flashdata('alert',success('Data berhasil dihapus'));
        redirect("pembelian/create/".$pembelianid);
    }
}