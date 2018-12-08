<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPegawai extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('m_pegawai');
  }

	public function login()
	{
    if($this->session->userdata('statusLogin') == "loginAdmin"){
      redirect(base_url('admin/dashboard'));
    }else if($this->session->userdata('statusLogin') == "loginUser"){
      redirect(base_url('dashboard'));
    }else{
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('nik', 'NIK', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('pegawai/login');
      }else{
        $nik = $this->input->post('nik');
        $pass = $this->input->post('password');
        $where = array(
          'nik' => $nik,
					'pass_hash' => md5($pass)
        );

        if($this->m_pegawai->readPegawai($where, FALSE)->num_rows() > 0){
          $nama = $this->m_pegawai->readPegawai(FALSE, $nik)->nama;
          $jabatan = $this->m_pegawai->readPegawai(FALSE, $nik)->jabatan;
          $tlp = $this->m_pegawai->readPegawai(FALSE, $nik)->tlp;
          $status = $this->m_pegawai->readPegawai(FALSE, $nik)->status;
          $pass = $this->m_pegawai->readPegawai(FALSE, $nik)->pass_real;

          $data_session = array(
						'nama' => $nama,
						'jabatan' => $jabatan,
						'tlp' => $tlp,
						'nik' => $nik,
						'pass' => $pass
						);
					$this->session->set_userdata($data_session);

          if($jabatan == 1 && $status == 1){
            $this->session->set_userdata('statusLogin', 'loginAdmin');
            redirect(base_url('admin/dashboard'));
          }else if($jabatan == 0 && $status == 1){
            $this->session->set_userdata('statusLogin', 'loginUser');
            redirect(base_url('dashboard'));
          }else if($status == 0){
            $this->session->set_flashdata('messageLogin',
  					' <div class="alert alert-warning"><center>
  						Akun anda sedang dalam tahap verifikasi !</center>
  						</div>');
              $this->load->view('pegawai/login');
          }

        }else{
          $this->session->set_flashdata('messageLogin',
					' <div class="alert alert-danger"><center>
						NIP atau Password yang anda masukkan salah !</center>
						</div>');
            $this->load->view('pegawai/login');
        }
      }
    }
	}

	public function register()
	{
    if($this->session->userdata('statusLogin') === "loginUser" || $this->session->userdata('statusLogin') === "loginAdmin"){
      redirect($_SERVER['HTTP_REFERER']);
    }else{
      $this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('nik', 'NIP', 'required');
			$this->form_validation->set_rules('tlp', 'Telepon', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('pegawai/register');
      }else{
        $nik = $this->input->post('nik');
        $where = array(
          'nik' => $nik
        );

        if($this->m_pegawai->readPegawai($where)->num_rows() > 0){
          $this->session->set_flashdata('message',
					' <div class="alert alert-warning">
						NIP yang anda masukan sudah terdaftar pada sistem !
						</div>');
            $this->load->view('pegawai/register');
        }else{
          $this->m_pegawai->createPegawai($this->input->post());
          $this->session->set_flashdata('message',
					' <div class="alert alert-success"><center>
						Pendaftaran anda telah diterima dan akan di verifikasi oleh admin</center>
						</div>');
            $this->load->view('pegawai/register');
        }
      }
    }
	}


  public function editDataPegawai(){
    if($this->session->userdata('statusLogin') == "loginUser" || $this->session->userdata('statusLogin') == "loginAdmin"){
      $nik = $this->session->userdata('nik');
      $data = array(
        'nama' => $this->input->post('nama'),
        'pass_hash' => md5($this->input->post('password')),
        'pass_real' => $this->input->post('password'),
        'tlp' => $this->input->post('tlp')
      );
      $where = array('nik' => $this->session->userdata('nik'));
      $this->m_pegawai->updatePegawai($data,$where);

      $nama = $this->m_pegawai->readPegawai(FALSE, $nik)->nama;
      $jabatan = $this->m_pegawai->readPegawai(FALSE, $nik)->jabatan;
      $tlp = $this->m_pegawai->readPegawai(FALSE, $nik)->tlp;
      $status = $this->m_pegawai->readPegawai(FALSE, $nik)->status;
      $pass = $this->m_pegawai->readPegawai(FALSE, $nik)->pass_real;

      $data_session = array(
        'nama' => $nama,
        'jabatan' => $jabatan,
        'tlp' => $tlp,
        'nik' => $nik,
        'pass' => $pass
        );
      $this->session->set_userdata($data_session);
      redirect($_SERVER['HTTP_REFERER']);
    }else{
      redirect(base_url(''));
    }
  }


  public function dashboard()
	{
    if($this->session->userdata('statusLogin') != "loginUser"){
      redirect(base_url(''));
    }else{
      $this->load->view('pegawai/u_dashboard');
      $this->load->view('footer');
    }
	}


  public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}


}
