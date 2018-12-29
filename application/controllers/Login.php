<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login');
    }
public function ceklogin()
	{
		
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$cek = $this->db->query("select * from user where username = '".$user."' and password='".$pass."' ");
			$jml = $cek->num_rows();
			// print_r($jml);die;
			// print_r($cek);die;
			if($jml > 0){
				// print_r("wkowkow");die;
				$data_session = array('status'=>"login");
				$this->session->set_userdata($data_session);
				redirect('/');

			}else{
					$this->session->set_flashdata("notif","<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data berhasil ditambah</div>");
				redirect('/login');

			}
		
	}
}