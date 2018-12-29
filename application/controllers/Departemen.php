<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

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
		$this->load->model('model_departemen');
		$this->load->library('session');
		$data = array(
			'konten' => 'departemen',
			'param'=>'departemen');
		$this->load->view('template',$data);
	}
	public function tambahdepartemen()
	{
		$this->load->library('session');
		$this->load->model('model_departemen');  //load model
		$nama = $this->input->post('nama_departemen');  //memasukkan input data dari view
		$data = array(
			'name' => $nama                //sesuaikan nama kolom database
			);
		$this->model_departemen->insertdb($data,'departemen');  //jalankan ke model
		$this->session->set_flashdata("notif","<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data berhasil ditambah</div>");
		redirect('departemen');
	}

	public function hapusdepartemen()
	{
		$this->load->model('model_departemen'); 
		$this->load->library('session');
		// $data = array(
		// 	'name' => $nama
		// 	);

		$id = $this->uri->segment('3');
		// $where('id', $id);
		//print_r($where);die;
		$data = $this->db->where('id', $id);
		$this->model_departemen->Delete('tb_fak',$data);
		$this->session->set_flashdata("notif","<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data berhasil dihapus</div>");
		redirect('departemen');
	}
	public function editdepartemen()
	{
		$this->load->model('model_departemen'); 
		$this->load->library('session');
		$id=$this->input->post('id');
		$data['name']=$this->input->post('nama');
		$where=$this->db->where('id', $id);
		$this->model_departemen->updatedb($where,$data,'tb_fak');
		
		$this->session->set_flashdata("notif","<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data berhasil diedit</div>");
		redirect('departemen');

	}




}
