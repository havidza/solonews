<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Olahraga extends CI_Controller{

 function __construct(){
    parent::__construct(); 
    $this->load->model('ModelOlahraga');
 }

 public function index(){
    $data['berita'] = $this->ModelOlahraga->tampil_data();
    $data['limit'] = $this->ModelOlahraga->tampil_data2();
    $this->load->view('pages/Olahraga',$data);
 }

}


 ?>