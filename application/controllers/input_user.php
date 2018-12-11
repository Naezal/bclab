<?php

class Input_user extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_data_user');
		$this->load->helper('url');
	}

	function index(){
		$data['user'] = $this->m_data_user->tampil_data()->result();
		$this->load->view('v_tampil_data_user',$data);
	}

	function tambah(){
		$this->load->view('v_form_user');
	}

	function tambah_aksi(){
		$nama = $this->input->post('name');
		$email = $this->input->post('email');

		$data = array(
			'name' => $nama,
			'email' => $email
			);
		$this->m_data_user->input_data($data, 'users');
		redirect('input_user/index');
	}

	function hapus($id){
		$where = array('user_id' => $id);
		$this->m_data_user->hapus_data($where,'users');
		redirect('input_user/index');
	}

	function edit($id){
	$where = array('user_id' => $id);
	$data['user'] = $this->m_data_user->edit_data($where,'users')->result();
	$this->load->view('v_edit_user',$data);
	}

	function update(){
		$id = $this->input->post('user_id');
		$nama = $this->input->post('name');
		$email = $this->input->post('email');
 
		$data = array(
			'name' => $nama,
			'email' => $email,
		);
 
		$where = array(
			'user_id' => $id
		);
 
		$this->m_data_user->update_data($where,$data,'users');
		redirect('input_user/index');
	}
}