<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hp extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('mhp');
		$this->load->helper(['form', 'url']);
		$this->load->library(['form_validation','session']);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index(){
		$data['hp'] = $this->db->get('handphone')->result();

		$this->load->view('barang/handphone/handphone', $data);
	}
	public function add(){
		$this->load->view('form/header');
		$this->load->view('barang/menu');
		$this->load->view('form/add');
		$this->load->view('form/footer');
	}
	public function save(){
		$this->form_validation->set_message('is_unique', '<span class="help-block"><i class="fa fa-warning"></i> {field} sudah terpakai</span>');
		$this->form_validation->set_rules('id', 'ID', ['required', 'is_unique[handphone.id]']);
		$this->validasi();

		if($this->form_validation->run() === FALSE){
			$this->add();
		}else{
			$config = array('upload_path' => './images/',
							'allowed_types' => 'jpeg|jpg|png',
							'max_size' => '2048',
							'max_width' => '2000',
							'max_height' => '2000');
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('filefoto')) {
			$this->session->set_flashdata('message', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
			redirect(site_url('hp/add'));
			} else{
				$file = $this->upload->data();
				$data =	[
					'id' => $this->input->post('id'),
					'merek' => $this->input->post('merek'),
					'tipe' => $this->input->post('tipe'),
					'harga' => $this->input->post('harga'),
					'stock' => $this->input->post('stock'),
					'kondisi' => $this->input->post('kondisi'),
					'spek' => $this->input->post('spek'),
					'foto' => $file['file_name']];

				$this->db->insert('handphone',$data);
				$this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
				redirect(site_url('hp'));
			}
		}
	}
	public function del($id){
		$row = $this->mhp->get_by_id($id);

		if ($row) {
			unlink('images/'.$row-> foto);
			$this->db->delete('handphone', ['id' => $id]);
			redirect('Hp');
		}
	}
	public function edit($id){
		$data['hp'] = $this->mhp->edit($id);

		$this->load->view('form/header');
		$this->load->view('barang/menu');
		$this->load->view('form/edit', $data);
		$this->load->view('form/footer');
	}
	public function sved($id){
		$this->validasi();
		if($this->form_validation->run() === FALSE){
				$this->edit($id);
			}else{
				$this->mhp->update();
				$this->session->set_flashdata('update_sukses', 'Data mobil berhasil diperbaharui');
				redirect('hp');
			}
	}
	public function addimg(){
		$this->validasi();
		if ($this->form_validation->run() == FALSE){}
		$this->load->view('form/header');
		$this->load->view('barang/menu');
		$this->load->view('form/addimg');
		$this->load->view('form/footer');
	}
	public function savimg()
	{
		$config = array(
			'upload_path' => './images/',
			'allowed_types' => 'jpeg|jpg|png',
			'max_size' => '2048',
			'max_width' => '2000',
			'max_height' => '2000'
 		);
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('filefoto')) {
			$this->session->set_flashdata('message', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
			redirect(site_url('uploadimage/create'));
		} else {
			$file = $this->upload->data();
			$data = array('foto' => $file['file_name']
			);

			$this->mhp->insert($data);
		}
		$this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
		redirect(site_url('uploadimage'));
	}
	public function validasi(){
		$this->form_validation->set_message('required', '<span class="help-block"><i class="fa fa-warning"></i> {field} tidak boleh kosong</span>');

		$config = [['field' => 'merek',
					'label' => 'Merek',
					'rules' => 'required'],
					['field' => 'tipe',
					'label' => 'Tipe',
					'rules' => 'required'],
					['field' => 'harga',
					'label' => 'Harga',
					'rules' => 'required'],
					['field' => 'stock',
					'label' => 'Stock',
					'rules' => 'required'],
					['field' => 'kondisi',
					'label' => 'Kondisi',
					'rules' => 'required'],
					['field' => 'spek',
					'label' => 'Spesifikasi',
					'rules' => 'required']];

		$this->form_validation->set_rules($config);
	}
}