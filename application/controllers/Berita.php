<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Berita extends CI_Controller{

 function __construct(){
    parent::__construct(); 
    $this->load->model('ModelBerita');
 }

 public function index(){
    $data['berita'] = $this->ModelBerita->tampil_data();
    $this->load->view('admin/v_berita',$data);
 }

 public function a_panel(){
    $this->load->view('admin/v_home');
 }

 public function tambah(){
   $data['berita'] = $this->ModelBerita->tampil_data();
    $this->load->view('admin/berita/v_addber',$data);
 }

 
 public function tambah_aksi(){
   $judul = $this->input->post('judul');
   $gambar = $this->input->post('gambar');
   $waktu_terbit = $this->input->post('waktu_terbit');
   $isi = $this->input->post('isi');
   $headline = $this->input->post('headline');
   $link = $this->input->post('link');
   $penulis = $this->input->post('penulis');
   $jenis = $this->input->post('jenis');
  
   $data = array(
      'judul' => $judul,
      'gambar' => $gambar,
      'waktu_terbit' => $waktu_terbit,
      'isi' => $isi,
      'headline' => $headline,
      'link' => $link,
      'penulis_id' => $penulis,
      'berita_jenis_id' => $jenis
      );

   $this->ModelBerita->input_data($data,'berita');
    redirect('berita');

 }

 public function edit($id){
   $where = array('id' => $id);
  $data['berita'] = $this->ModelBerita->edit_data($where,'berita')->result();
  $this->load->view('admin/berita/v_editber',$data);
}



}

 ?>