<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class ModelPenulis extends CI_Model {

     public function __construct()
     {
          parent::__construct();
         
     }

     public function getAll() 
     {
      return $this->db->get('penulis')->result();
      }

     public function tampil_data()
     {
          $this->db->order_by('nama','ASC');
          return $this->db->get('penulis')->result();
     }

     
     public function input_data($data,$table) {
          $this->db->insert($table,$data);
      }
      public function edit_data($where,$table){		
          return $this->db->get_where($table,$where);
      }
      public function update_data($where,$data,$table){
		$this->db->where($where);
          $this->db->update($table,$data);
      }
      
      public function hapus_data($where,$table){
		$this->db->where($where);
          $this->db->delete($table);
          
}
}