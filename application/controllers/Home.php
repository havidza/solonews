<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Home extends CI_Controller{

 function __construct(){
    parent::__construct(); 
    $this->load->model('ModelHome');
 }

 public function index(){
    $data['berita'] = $this->ModelHome->tampil_data();
    $data['limit'] = $this->ModelHome->tampil_data2();
    $this->load->view('home',$data);
 }

}


 ?>