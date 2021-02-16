<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Politik extends CI_Controller{

 function __construct(){
    parent::__construct(); 
    $this->load->model('ModelPolitik');
 }

 public function index(){
    $data['berita'] = $this->ModelPolitik->tampil_data();
    $data['limit'] = $this->ModelPolitik->tampil_data2();
    $this->load->view('pages/Politik',$data);
 }

}


 ?>