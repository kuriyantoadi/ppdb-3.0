<?php

class M_daftar extends CI_Model{

  public function siswa_daftar_up($tambah_data)
  {
    $this->db->insert('tb_siswa',$tambah_data);
  }

}

 ?>
