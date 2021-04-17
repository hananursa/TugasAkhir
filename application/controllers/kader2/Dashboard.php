<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('kader_model');
		$this->load->library('form_validation');
		if (!isset($this->session->userdata['username'])) {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda belum login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
			);
			redirect('authkader');
		}
	}

	public function index()
	{
		$data['title'] = 'halaman kader';
		$this->load->view('Template/Kader2/header_kader', $data);
		$this->load->view('Kader2/index', $data);
		$this->load->view('Template/Kader2/footer_kader', $data);
	}
	public function data_lansia()
	{
		$data['title'] = 'Data Lansia';
		$this->load->view('Template/Kader2/header_kader', $data);
		$this->load->view('Kader2/data_lansia', $data);
		$this->load->view('Template/Kader2/footer_kader', $data);
	}
	public function data_kesehatan_lansia()
	{
		$data['title'] = 'Data Lansia';
		$this->load->view('Template/Kader2/header_kader', $data);
		$this->load->view('Kader2/data_kesehatan_lansia', $data);
		$this->load->view('Template/Kader2/footer_kader', $data);
	}
	public function data_kegiatan()
	{
		$data['title'] = 'Data Lansia';
		$this->load->view('Template/Kader2/header_kader', $data);
		$this->load->view('Kader2/data_kegiatan', $data);
		$this->load->view('Template/Kader2/footer_kader', $data);
	}
	public function keterangan_kegiatan()
	{
		$data['title'] = 'Data Lansia';
		$this->load->view('Template/Kader2/header_kader', $data);
		$this->load->view('Kader2/keterangan_kegiatan', $data);
		$this->load->view('Template/Kader2/footer_kader', $data);
	}
}

/* End of file Controllername.php */
