<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Admin extends CI_Controller{

 function __construct(){
    parent::__construct(); 
 }

 public function index(){
    $this->load->view('admin/v_login');
 }


 public function a_panel(){   
    $this->load->view('admin/v_home');
 }
}


 ?>