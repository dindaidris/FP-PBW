<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_contact extends CI_Model {
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "nama" => $this->input->post('nama'),
      "email" => $this->input->post('email'),
      "pesan" => $this->input->post('pesan')
    );
    
    $this->db->insert('contact', $data); // Untuk mengeksekusi perintah insert data
  }
}