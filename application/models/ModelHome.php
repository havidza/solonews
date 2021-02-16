<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class ModelHome extends CI_Model {

     public function __construct()
     {
          parent::__construct();
         
     }

     public function tampil_data()
     {
          
          return $this->db->from('berita')
          ->join('penulis','penulis.id=berita.penulis_id')
          ->get()
          ->result();
     }

     public function tampil_data2()
     {
          
          return $this->db->get('berita', 2)->result();
     }
}