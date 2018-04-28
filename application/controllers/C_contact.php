<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Siswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('M_contact'); // Load SiswaModel ke controller ini
  }
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
        this->M_contact->save(); // Panggil fungsi save() yang ada di SiswaModel.php
    }
    
    $this->load->view('index.php');
  }
  
}