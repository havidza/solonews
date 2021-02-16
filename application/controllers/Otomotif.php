<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Otomotif extends CI_Controller{

 function __construct(){
    parent::__construct(); 
    $this->load->model('ModelOtomotif');
 }

 public function index(){
    $data['berita'] = $this->ModelOtomotif->tampil_data();
    $data['limit'] = $this->ModelOtomotif->tampil_data2();
    $this->load->view('pages/Otomotif',$data);
 }

}


 ?>