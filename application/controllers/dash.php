<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dash extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index(){
		$this->load->view('dash/header');
		$this->load->view('dash/menu');
		$this->load->view('dash/halu');
		$this->load->view('dash/footer');
	}
}