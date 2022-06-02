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
    $this->load->view('daftar/tkj/index');
  }

  public function daftar_tkj()
  {
    $this->load->view('daftar/tkj/daftar');
    $this->load->view('daftar/form-daftar');
  }

  public function daftar_siswa_up()
  {
    $tgl_pendaftaran = $this->input->post('id_siswa');

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



    // $kode_siswa= array('id_siswa' => $id_siswa);


    $data_edit = array(
      'nama_siswa' => $nama_siswa,
      'nisn' => $nisn,
      'nama_siswa' => $jenis_kelamin,
      'tampat_lahir' => $tempat_lahir,
      'tgl_lahir' => $tgl_lahir,
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
      'sem1_b_ind' => $sem1_b_ind,
      'sem1_mtk' => $sem1_mtk,
      'sem1_ipa' => $sem1_ipa,
      'sem1_b_ing' => $sem1_b_ind,
      //NILAI Semester 2
      'sem2_agama' => $sem2_agama,
      'sem2_b_ind' => $sem2_b_ind,
      'sem2_mtk' => $sem2_mtk,
      'sem2_ipa' => $sem2_ipa,
      'sem2_b_ing' => $sem2_b_ind,
      //NILAI Semester 3
      'sem3_agama' => $sem3_agama,
      'sem3_b_ind' => $sem3_b_ind,
      'sem3_mtk' => $sem3_mtk,
      'sem3_ipa' => $sem3_ipa,
      'sem3_b_ing' => $sem3_b_ind,
      //NILAI Semester 1
      'sem4_agama' => $sem4_agama,
      'sem4_b_ind' => $sem4_b_ind,
      'sem4_mtk' => $sem4_mtk,
      'sem4_ipa' => $sem4_ipa,
      'sem4_b_ing' => $sem4_b_ind,
      //NILAI Semester 5
      'sem5_agama' => $sem5_agama,
      'sem5_b_ind' => $sem5_b_ind,
      'sem5_mtk' => $sem5_mtk,
      'sem5_ipa' => $sem5_ipa,
      'sem5_b_ing' => $sem5_b_ind,
      // Upload File (belum)

    );

    $this->M_admin->siswa_edit_up_tekno($data_edit, $kode_siswa);

    $this->session->set_flashdata('msg', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <strong>Edit data berhasil</strong>

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
    redirect ('C_admin/siswa_tekno/'.$id_siswa);
  }

  //halaman TKJ akhir


}
