<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_daftar extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_daftar');
      $this->load->helper(array('form', 'url'));

      // $this->load->model('M_siswa');
	}

  public function index()
  {
    $this->load->view('welcome_message');
  }


  //halaman TKJ awal
  public function tkj()
  {
    $this->load->view('daftar/tkj/index');
  }

  public function daftar_tkj()
  {
    $this->load->view('daftar/tkj/daftar');
    $this->load->view('daftar/form-daftar');
  }

  public function daftar_siswa_up()
  {
    $tgl_pendaftaran = $this->input->post('tgl_pendaftaran');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
    $kompetensi_keahlian_2 = $this->input->post('kompetensi_keahlian_2');
    $nisn = $this->input->post('nisn');
    $nama_siswa = $this->input->post('nama_siswa');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $asal_sekolah = $this->input->post('asal_sekolah');
    $tahun_lulus = $this->input->post('tahun_lulus');
    $no_hp = $this->input->post('no_hp');
    $nik = $this->input->post('nik');
    $no_kk = $this->input->post('no_kk');
    $tgl_kk = $this->input->post('tgl_kk');
    $kota = $this->input->post('kota');
    $kecamatan = $this->input->post('kecamatan');
    $kelurahan = $this->input->post('kelurahan');
    $alamat = $this->input->post('alamat');
    $rt = $this->input->post('rt');
    $rw = $this->input->post('rw');
    $jarak_kesekolah = $this->input->post('jarak_kesekolah');
    $nama_org_tua = $this->input->post('nama_org_tua');
    $no_hp_org_tua = $this->input->post('no_hp_org_tua');
    $pekerjaan_org_tua = $this->input->post('pekerjaan_org_tua');
    $kip = $this->input->post('kip');
    //sem1
    $sem1_agama = $this->input->post('sem1_agama');
    $sem1_b_indo = $this->input->post('sem1_b_indo');
    $sem1_mtk = $this->input->post('sem1_mtk');
    $sem1_ipa = $this->input->post('sem1_ipa');
    $sem1_b_ing = $this->input->post('sem1_b_ing');
    //sem2
    $sem2_agama = $this->input->post('sem2_agama');
    $sem2_b_indo = $this->input->post('sem2_b_indo');
    $sem2_mtk = $this->input->post('sem2_mtk');
    $sem2_ipa = $this->input->post('sem2_ipa');
    $sem2_b_ing = $this->input->post('sem2_b_ing');
    //sem3
    $sem3_agama = $this->input->post('sem3_agama');
    $sem3_b_indo = $this->input->post('sem3_b_indo');
    $sem3_mtk = $this->input->post('sem3_mtk');
    $sem3_ipa = $this->input->post('sem3_ipa');
    $sem3_b_ing = $this->input->post('sem3_b_ing');
    //sem4
    $sem4_agama = $this->input->post('sem4_agama');
    $sem4_b_indo = $this->input->post('sem4_b_indo');
    $sem4_mtk = $this->input->post('sem4_mtk');
    $sem4_ipa = $this->input->post('sem4_ipa');
    $sem4_b_ing = $this->input->post('sem4_b_ing');
    //sem5
    $sem5_agama = $this->input->post('sem5_agama');
    $sem5_b_indo = $this->input->post('sem5_b_indo');
    $sem5_mtk = $this->input->post('sem5_mtk');
    $sem5_ipa = $this->input->post('sem5_ipa');
    $sem5_b_ing = $this->input->post('sem5_b_ing');
    //terima post file
    $pdf_skhun = $_FILES['pdf_skhun'];
    $pdf_surat_dokter = $_FILES['pdf_surat_dokter'];
    $pdf_kk = $_FILES['pdf_kk'];
    $pdf_akta = $_FILES['pdf_akta'];
    $pdf_photo = $_FILES['pdf_photo'];
    $pdf_rapor1 = $_FILES['pdf_rapor1'];
    $pdf_rapor2 = $_FILES['pdf_rapor2'];
    $pdf_rapor3 = $_FILES['pdf_rapor3'];
    $pdf_rapor4 = $_FILES['pdf_rapor4'];
    $pdf_rapor5 = $_FILES['pdf_rapor5'];
    $pdf_kip = $_FILES['pdf_kip'];
    $pdf_piagam1= $_FILES['pdf_piagam1'];
    $pdf_piagam2= $_FILES['pdf_piagam2'];
    $pdf_piagam3= $_FILES['pdf_piagam3'];

    $pesan_error_upload = "Mohon maaf file yang anda input tidak sesuai dengan standar sistem kami.
    <br>.Harus berukuran kurang dari 500 kb dan berformat .pdf";

    // var_dump($pdf_skhun);

    //cek upload file awal
    if ($pdf_skhun != '') {
      $config_skhun['upload_path'] = './assets/up/skhun/';
      $config_skhun['allowed_types'] = 'pdf';
      $config_skhun['max_size'] = '1200';
      $config_skhun['encrypt_name']	= TRUE;

      $this->load->library('upload', $config_skhun);
      if (!$this->upload->do_upload('pdf_skhun')) {
        echo $pesan_error_upload."1";
      }else {
        $pdf_skhun_up = array('upload_data' => $this->upload->data());
      }
    }

    if ($pdf_surat_dokter != '') {
      $config_surat_dokter['upload_path'] = './assets/up/surat_dokter/';
      $config_surat_dokter['allowed_types'] = 'pdf';
      $config_surat_dokter['max_size'] = 600;
      $config_surat_dokter['encrypt_name']	= TRUE;

      $this->load->library('upload', $config_surat_dokter);
      if (!$this->upload->do_upload('pdf_surat_dokter')) {
        // echo $pesan_error_upload;
        $error = array('error' => $this->upload->display_errors());
        // $this->load->view('upload', $error);
      }else {
        $pdf_surat_dokter_up = array('upload_data' => $this->upload->data());
      }
    }

    if ($pdf_kk != ''){
      $config_kk['upload_path'] = './assets/up/kk/';
      $config_kk['allowed_types'] = 'pdf';
      $config_kk['max_size'] = 600;
      $config_kk['encrypt_name']	= TRUE;

      $this->load->library('upload', $config_kk);
      if (!$this->upload->do_upload('pdf_kk')) {
        echo $pesan_error_upload;
      }else {
        $pdf_kk_up = array('upload_data' => $this->upload->data());
      }
    }

    if ($pdf_akta != '') {
      $config['upload_path'] = './assets/up/akta/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_akta')) {
        echo $pesan_error_upload;
      }else {
        $pdf_akta_up = array('upload_data' => $this->upload->data());
      }
    }


    if ($pdf_photo != '') {
      $config['upload_path'] = './assets/up/photo/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_photo')) {
        echo $pesan_error_upload;
      }else {
        $pdf_photo_up = array('upload_data' => $this->upload->data());
      }
    }


    if ($pdf_rapor1 != ''){
      $config['upload_path'] = './assets/up/rapor1/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_rapor1')) {
           echo $pesan_error_upload;
      }else {
        $pdf_rapor1_up = array('upload_data' => $this->upload->data());
      }
    }


    if ($pdf_rapor2 != '') {
      $config['upload_path'] = './assets/up/rapor2/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_rapor2')) {
         echo $pesan_error_upload;
      }else {
        $pdf_rapor2_up = array('upload_data' => $this->upload->data());
      }
    }

    if ($pdf_rapor3 != '') {
      $config['upload_path'] = './assets/up/rapor3/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_rapor3')) {
        echo $pesan_error_upload;
      }else {
        $pdf_rapor3_up = array('upload_data' => $this->upload->data());
      }
    }


    if ($pdf_rapor4 != '') {
      $config['upload_path'] = './assets/up/rapor4/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_rapor4')) {
        echo $pesan_error_upload;
      }else {
        $pdf_rapor4_up = array('upload_data' => $this->upload->data());
      }
    }


    if ($pdf_rapor5 != '') {
      $config['upload_path'] = './assets/up/rapor5/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_rapor5')) {
        echo $pesan_error_upload;
      }else {
        $pdf_rapor5_up = array('upload_data' => $this->upload->data());
      }
    }

    if ($pdf_kip != ''){
      $pdf_kip_up = "";
    }else {
      $config['upload_path'] = './assets/up/kip/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_kip')) {
           echo $pesan_error_upload;
      }else {
        $pdf_kip_up = array('upload_data' => $this->upload->data());
      }
    }

    if ($pdf_piagam1 != ''){
      $pdf_piagam1_up ="";
    }else {
      $config['upload_path'] = './assets/up/piagam1/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_piagam1')) {
           echo $pesan_error_upload;
      }else {
        $pdf_piagam1_up = array('upload_data' => $this->upload->data());
      }
    }

    if ($pdf_piagam2 == ''){
      $pdf_piagam2_up = "";
    }else{
      $config['upload_path'] = './assets/up/piagam2/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_piagam2')) {
       echo $pesan_error_upload;
      }else {
        $pdf_piagam2_up = array('upload_data' => $this->upload->data());
      }
    }

    if ($pdf_piagam3 != ''){
      $pdf_piagam3_up = "";
    }else {
      $config['upload_path'] = './assets/up/piagam3/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 600;
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pdf_piagam3')) {
       echo $pesan_error_upload;
      }else {
        $pdf_piagam3_up = array('upload_data' => $this->upload->data());
      }
    }



    //cek upload file akhir

    $data_tambah = array(
      'tgl_pendaftaran'=>$tgl_pendaftaran,
      'kompetensi_keahlian'=>$kompetensi_keahlian,
      'kompetensi_keahlian_2'=>$kompetensi_keahlian_2,
      'nama_siswa' => $nama_siswa,
      'tgl_lahir'=>$tgl_lahir,
      'nisn' => $nisn,
      'jenis_kelamin' => $jenis_kelamin,
      'tempat_lahir' => $tempat_lahir,
      'asal_sekolah' => $asal_sekolah,
      'tahun_lulus' => $tahun_lulus,
      'no_hp' => $no_hp,
      'nik' => $nik,
      'no_kk' => $no_kk,
      'tgl_kk' => $tgl_kk,
      'kota' => $kota,
      'kecamatan' => $kecamatan,
      'kelurahan' => $kelurahan,
      'alamat' => $alamat,
      'rt' => $alamat,
      'rw' => $rw,
      'jarak_kesekolah' => $jarak_kesekolah,
      'nama_org_tua' => $nama_org_tua,
      'no_hp_org_tua' => $no_hp_org_tua,
      'pekerjaan_org_tua' => $pekerjaan_org_tua,
      'kip' => $kip,
      //NILAI Semester 1
      'sem1_agama' => $sem1_agama,
      'sem1_b_indo' => $sem1_b_indo,
      'sem1_mtk' => $sem1_mtk,
      'sem1_ipa' => $sem1_ipa,
      'sem1_b_ing' => $sem1_b_ing,
      //NILAI Semester 2
      'sem2_agama' => $sem2_agama,
      'sem2_b_indo' => $sem2_b_indo,
      'sem2_mtk' => $sem2_mtk,
      'sem2_ipa' => $sem2_ipa,
      'sem2_b_ing' => $sem2_b_ing,
      //NILAI Semester 3
      'sem3_agama' => $sem3_agama,
      'sem3_b_indo' => $sem3_b_indo,
      'sem3_mtk' => $sem3_mtk,
      'sem3_ipa' => $sem3_ipa,
      'sem3_b_ing' => $sem3_b_ing,
      //NILAI Semester 1
      'sem4_agama' => $sem4_agama,
      'sem4_b_indo' => $sem4_b_indo,
      'sem4_mtk' => $sem4_mtk,
      'sem4_ipa' => $sem4_ipa,
      'sem4_b_ing' => $sem4_b_ing,
      //NILAI Semester 5
      'sem5_agama' => $sem5_agama,
      'sem5_b_indo' => $sem5_b_indo,
      'sem5_mtk' => $sem5_mtk,
      'sem5_ipa' => $sem5_ipa,
      'sem5_b_ing' => $sem5_b_ing,
      // Upload File (belum)
      'pdf_skhun'=> $pdf_skhun_up['upload_data']['file_name'],
      'pdf_surat_dokter'=> $pdf_surat_dokter_up['upload_data']['file_name'],
      'pdf_kk'=>$pdf_kk_up['upload_data']['file_name'],
      'pdf_akta'=>$pdf_akta_up['upload_data']['file_name'],
      'pdf_photo'=>$pdf_akta_up['upload_data']['file_name'],
      'pdf_rapor_1'=>$pdf_rapor1_up['upload_data']['file_name'],
      'pdf_rapor_2'=>$pdf_rapor2_up['upload_data']['file_name'],
      'pdf_rapor_3'=>$pdf_rapor3_up['upload_data']['file_name'],
      'pdf_rapor_4'=>$pdf_rapor4_up['upload_data']['file_name'],
      'pdf_rapor_5'=>$pdf_rapor5_up['upload_data']['file_name'],
      'pdf_kip'=>$pdf_kip_up['upload_data']['file_name'],
      'pdf_piagam1'=>$pdf_piagam1_up['upload_data']['file_name'],
      'pdf_piagam2'=>$pdf_piagam2_up['upload_data']['file_name'],
      'pdf_piagam3'=>$pdf_piagam3_up['upload_data']['file_name'],



    );

    $this->M_daftar->siswa_daftar_up($data_tambah);

    $this->session->set_flashdata('msg', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <strong>Edit data berhasil</strong>

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
    // redirect ('C_admin/siswa_tekno/'.$id_siswa);
  }

  //halaman TKJ akhir


}
