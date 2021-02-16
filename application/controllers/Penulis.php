<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Penulis extends CI_Controller{

 function __construct(){
    parent::__construct(); 
    $this->load->model('ModelPenulis');
 }

 public function index(){
    $data['penulis'] = $this->ModelPenulis->tampil_data();
    $this->load->view('admin/v_penulis',$data);
 }


 public function a_panel(){
    $this->load->view('admin/v_home');
 }

 public function tambah(){
   $this->load->view('admin/penulis/v_addpen');
 }

 public function tambah_aksi(){
   $nama = $this->input->post('nama');
   $telepon = $this->input->post('telepon');
   $alamat = $this->input->post('alamat');
   $email = $this->input->post('email');
 
  
   $data = array(
      'nama' => $nama,
      'telepon' => $telepon,
      'alamat' => $alamat,
      'email' => $email
      );

   $this->ModelPenulis->input_data($data,'penulis');
    redirect('penulis');

 }

 public function edit($id){
   $where = array('id' => $id);
  $data['penulis'] = $this->ModelPenulis->edit_data($where,'penulis')->result();
  $this->load->view('admin/penulis/v_edpen',$data);

 }
 public function update(){
   $id = $this->input->post('id');
   $nama = $this->input->post('nama');
   $telepon = $this->input->post('telepon');
   $alamat = $this->input->post('alamat');
   $email = $this->input->post('email');

  $data = array(
     'nama' => $nama,
     'telepon' => $telepon,
     'alamat' => $alamat,
     'email' => $email
  );

  $where = array(
     'id' => $id
  );

  $this->ModelPenulis->update_data($where,$data,'penulis');
  redirect('penulis');
}

 public function hapus($id){
   $where = array('id' => $id);
  $this->ModelPenulis->hapus_data($where,'penulis');
  redirect('penulis');
     
 }
}

 ?>