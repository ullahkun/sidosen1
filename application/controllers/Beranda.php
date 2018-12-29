<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

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


	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') != 'login') {
			redirect('/login');
		}
	}

	public function index()
	{
		$data = array(
			'konten' => 'beranda',
			'param'=>'beranda');
		$data['totaldosen']=$this->db->query("SELECT COUNT(nama_dosen) as total FROM tb_dosen")->result_array();
		$data['total']=$this->db->query("SELECT COUNT(name) as total FROM tb_fakultas")->result_array();
		$data['totaldepartemen']=$this->db->query("SELECT COUNT(name) as total FROM tb_fak")->result_array();
		//print_r($data['total']);die;
		$this->load->view('template',$data);
	}
}
