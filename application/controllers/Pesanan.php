<?php

class Pesanan extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_admin');
    $this->load->helper('url');

  }

  function index(){
    $data['pesanan'] = $this->m_admin->tampil_data()->result();
    $this->load->view('daftar_pesanan',$data);
  }

  function edit($id){
    $where = array('id' => $id);
    $data['pesanan'] = $this->m_admin->edit_data($where,'pesanan')->result();
    $this->load->view('v_edit',$data);
  }

  function update(){
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $pesanan = $this->input->post('pesanan');

    $data = array(
			'nama' => $nama,
			'email' => $email,
            'pesanan' => $pesanan

			);

    $where = array('id' => $id);

    $this->m_admin->update_data($where,$data,'pesanan');
    redirect('pesanan');
  }

  function hapus($id){
  $where =  array('id' => $id);
  $this->m_admin->hapus_data($where,'pesanan');
  redirect('pesanan');
  }

  function tambah_aksi(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesanan = $this->input->post('pesanan');

    $data = array(
			'nama' => $nama,
			'email' => $email,
			'pesanan' => $pesanan

			);
      $result = $this->m_admin->input_data('pesanan', $data);
      
		redirect(base_url());
	}
}
