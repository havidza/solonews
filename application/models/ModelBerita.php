<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class ModelBerita extends CI_Model {

     public function __construct()
     {
          parent::__construct();
         
     }
          public function tampil_data()
     {
         
          return $this->db->from('berita')
          ->join('penulis','penulis.id=berita.penulis_id')
          ->join('berita_jenis', 'berita_jenis.id=berita.berita_jenis_id','left')
          ->order_by('berita.id','asc')
          ->get()
          ->result();
     }

     public function tampil_data2()
     {
          
          return $this->db->get('berita', 2)->result();
     }

     
     public function tampil_data3()
     {
         
          return $this->db->from('berita')
          ->join('berita_jenis', 'berita_jenis.id=berita.berita_jenis_id','left')
          ->join('penulis','penulis.id=berita.penulis_id','left')
          ->order_by('berita.id','asc')
          ->get()
          ->result();
     }

     
     public function input_data($data,$table) {
          $this->db->insert($table,$data);
      }

     public function edit_data($where,$table){	
          return $this->db->get_where($table,$where);
      }

}