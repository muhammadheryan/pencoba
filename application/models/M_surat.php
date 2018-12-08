<?php
  class M_surat extends CI_Model{

     public function __construct(){
       $this->load->database();
     }

     public function createSurat($file, $post, $kategori, $penerima, $pengirim, $proses, $bidang, $bidangSK){
       $inputan = array(
         'noSurat' => $post['noSuratTS'],
         'kategori' => $kategori,
         'pengirim' => $pengirim,
         'penerima' => $penerima,
         'tgl' => $post['tglTS'],
         'tglSurat' => $post['tglSuratTS'],
         'fileSurat' => 'assets/DOKUMENSURAT/'.$file,
         'keterangan' => $post['keteranganTS'],
         'perihal' => $post['perihalTS'],
         'statusTampil' => $post['statusTampil'],
         'sm_proses' => $proses,
         'sm_bidang' => $bidang,
         'sk_bidang' => $bidangSK
       );
       return $this->db->insert('surat', $inputan);
     }


     public function readSurat($kategori = FALSE, $id = FALSE, $where = FALSE){
       if($kategori === FALSE && $where === FALSE){
         $query = $this->db->get_where('surat', array('id'=>$id));
         return $query->row();
       }else if($id === FALSE && $where === FALSE){
         $query = $this->db->order_by('tgl','DESC')->get_where('surat', array('kategori'=>$kategori));
         return $query->result_array();
       }else{
         $query = $this->db->order_by('tgl','DESC')->get_where('surat', $where);
         return $query->result_array();
       }
     }


     public function updateSurat($where, $data){
         $this->db->update('surat', $data, $where);
     		 return $this->db->affected_rows();
     }

     public function deleteSurat($id){
         return $this->db->delete('surat',array('id'=>$id));
     }

     //hapus ya gengs yg ini
     public function countSurat($kategori){
          $this->db->select('YEAR(tgl) AS Tahun, count(YEAR(tgl)) AS Jumlah');
          $this->db->where('kategori', $kategori);
          $this->db->group_by('YEAR(tgl)');
          $this->db->order_by('tgl', 'ASC');
          $query = $this->db->get('surat');
          return $query->result_array();
     }

  }
 ?>
