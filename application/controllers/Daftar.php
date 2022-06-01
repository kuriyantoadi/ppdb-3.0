<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			// $this->load->model('M_login');
      // $this->load->model('M_siswa');
	}

  public function index()
  {
    $this->load->view('welcome_message');
  }


  //halaman TKJ awal
  public function tkj()
  {
    $this->load->view('daftar/login_tkj');
  }

  public function tkj_daftar()
  {
      #code
  }

  //halaman TKJ akhir


}
