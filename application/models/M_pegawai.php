<?php
  class M_pegawai extends CI_Model{

     public function __construct(){
       $this->load->database();
     }

     public function createPegawai($post){
       $data = array(
         'nik' => $post['nik'],
         'nama' => $post['nama'],
         'jabatan' => 0,
         'pass_hash' => md5($post['password']),
         'pass_real' => $post['password'],
         'tlp' => $post['tlp']
       );
       return $this->db->insert('pegawai', $data);
     }

     public function readPegawai($where = FALSE, $nik = FALSE, $idPegawai = FALSE){
       if($nik === FALSE && $where != FALSE && $idPegawai === FALSE){
         return $this->db->get_where("pegawai", $where);
       }else if($where === FALSE && $nik != FALSE  && $idPegawai === FALSE){
         $query = $this->db->get_where('pegawai', array('nik'=>$nik));
         return $query->row();
       }else if($where === FALSE && $idPegawai != FALSE){
         $query = $this->db->get_where('pegawai', array('idPegawai'=>$idPegawai));
         return $query->row();
       }else{
         $query = $this->db->order_by('status','ASC')->get_where('pegawai', array('jabatan'=>0));
         return $query->result_array();
       }
     }


     public function updatePegawai($data, $where){
        return $this->db->update('pegawai', $data, $where);
     }


     public function deletePegawai($idPegawai){
         return $this->db->delete('pegawai',array('idPegawai'=>$idPegawai));
     }

  }
 ?>
