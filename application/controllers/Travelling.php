<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Travelling extends CI_Controller{

 function __construct(){
    parent::__construct(); 
    $this->load->model('ModelTravelling');
 }

 public function index(){
    $data['berita'] = $this->ModelTravelling->tampil_data();
    $data['limit'] = $this->ModelTravelling->tampil_data2();
    $this->load->view('pages/Travelling',$data);
 }

}


 ?>