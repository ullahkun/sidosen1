<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('model_dosen');
		$this->load->library('session');
		$data = array(
			'konten' => 'dosen',
			'param'=>'dosen');
		$this->load->view('template',$data);
	}
	public function tambahdosen()
	{
		$this->load->model('Model_fakultas', 'mod_fakultas', TRUE);
		$this->load->model('Model_departemen', 'mod_dpt', TRUE);
		
		$data = array(
			'konten' => 'tambahdosen',
			'param'=>'dosen');
		$data['tb_fakultas']=$this->mod_fakultas->selectdb();
		$data['dept']=$this->mod_dpt->selectdb();
		$this->load->view('template',$data);
	}
	public function tambahdosen1()
	{
		$this->load->library('session');
		$this->load->model('model_dosen');  //load model
		$nama = $this->input->post('nama_dosen');  
		$email = $this->input->post('email'); 
		$fakultas = $this->input->post('fakultas');
		$departemen = $this->input->post('departemen'); 
		$spesialisasi = $this->input->post('spesialisasi');
		$linkriset = $this->input->post('linkriset');   //memasukkan input data dari view
		$data = array(
			'nama_dosen' => $nama,
			'email' => $email,
			'fakultas' => $fakultas,
			'departemen' => $departemen,
			'spesialisasi' => $spesialisasi,
			'linkriset' => $linkriset    //sesuaikan nama kolom database
			);
		$this->model_dosen->insertdb($data,'dosen');  //jalankan ke model
		$this->session->set_flashdata("notif","<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data berhasil ditambah</div>");
		redirect('dosen');
	}
}
