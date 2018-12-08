<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAdmin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('m_pegawai');
    $this->load->model('m_surat');
  }


  public function dashboard()
	{
    if($this->session->userdata('statusLogin') != "loginAdmin"){
      redirect(base_url(''));
    }else{
      $this->load->view('admin/a_dashboard');
      $this->load->view('footer');
    }
	}

  public function pengaturan(){
    if($this->session->userdata('statusLogin') == "loginAdmin"){
      $where = array(
        'jabatan' => 0
      );
      $data['sm'] = $this->m_surat->countSurat(1);
      $data['sk'] = $this->m_surat->countSurat(2);
      $data['pegawai'] = $this->m_pegawai->readPegawai(FALSE, FALSE);
      $this->load->view('admin/a_pengaturan', $data);
      $this->load->view('footer');
    }else{
      redirect(base_url(''));
    }
  }

  public function data_ajax($idPegawai)
  {
    $data = $this->m_pegawai->readPegawai(FALSE, FALSE, $idPegawai);
    echo json_encode($data);
  }


  public function ubahStatusPegawai()
  {
    if($this->session->userdata('statusLogin') == "loginUser" || $this->session->userdata('statusLogin') == "loginAdmin"){
      $data = array(
        'status' => $this->input->post('statusLogin')
      );
      $where = array('nik' => $this->input->post('nik'));
      $this->m_pegawai->updatePegawai($data,$where);
      $this->session->set_flashdata('notisSM',
      '  <div class="alert alert-info alert-dismissible pull-right" style="width:30%; height:50px; margin:0px 0px -10px 0px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-edit"></i>Status Berhasil Diubah!</h4>
      </div>');
      echo json_encode(array("status" => TRUE));
    }else{
      redirect(base_url(''));
    }
  }


  public function hapusPegawai($idPegawai){
    if($this->session->userdata('statusLogin') == "loginAdmin"){
      $this->m_pegawai->deletePegawai($idPegawai);
      $this->session->set_flashdata('notisSM',
      '  <div class="alert alert-info alert-dismissible pull-right" style="width:30%; height:50px; margin:0px 0px -10px 0px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-trash"></i>Akun Berhasil Dihapus!</h4>
      </div>');
      echo json_encode(array("status" => TRUE));
    }else{
      redirect(base_url(''));
    }
  }



}
