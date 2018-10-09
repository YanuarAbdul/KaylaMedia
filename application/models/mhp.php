<?php

class MHp extends CI_Model{
	public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
	function edit($id){		
		$query = $this->db->get_where('handphone', ['id' => $id]);
		return $query->row();
	}
	function update(){
		$row = ['id' => $this->input->post('id')];
		
		$data = [
					'merek' => $this->input->post('merek'),
					'tipe' => $this->input->post('tipe'),
					'harga' => $this->input->post('harga'),
					'stock' => $this->input->post('stock'),
					'kondisi' => $this->input->post('kondisi'),
					'spek' => $this->input->post('spek'),
					'foto' => $this->input->post('foto'),
				];

		$this->db->update('handphone', $data, $row);
	}
	public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('handphone')->row();
  }
}