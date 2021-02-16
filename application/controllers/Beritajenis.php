<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Beritajenis extends CI_Controller{

 function __construct(){
    parent::__construct(); 
    $this->load->model('ModelBeritajenis');
 }

 public function index(){
    $data['beritajenis'] = $this->ModelBeritajenis->tampil_data();
    $this->load->view('admin/v_beritajenis',$data);
 }

 public function a_panel(){
    $this->load->view('admin/v_home');
 }

 public function tambah(){
    $this->load->view('admin/beritajenis/v_addbj');
 }

 public function tambah_aksi(){
    $judul = $this->input->post('judul');
 
    $data = array(
        'jenis' => $judul
        );

    $this->ModelBeritajenis->input_data($data,'berita_jenis');
    redirect('beritajenis');

 }

 public function edit($id){
    $where = array('id' => $id);
	$data['beritajenis'] = $this->ModelBeritajenis->edit_data($where,'berita_jenis')->result();
	$this->load->view('admin/beritajenis/v_editbj',$data);
 }

 public function update(){
    $id = $this->input->post('id');
    $judul = $this->input->post('judul');
 
	$data = array(
		'jenis' => $judul
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->ModelBeritajenis->update_data($where,$data,'berita_jenis');
	redirect('beritajenis');
 }

 public function hapus($id){
    $where = array('id' => $id);
	$this->ModelBeritajenis->hapus_data($where,'berita_jenis');
	redirect('beritajenis');
     
 }
}

 ?>