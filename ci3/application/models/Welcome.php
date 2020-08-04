<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
		$this->load->view('welcome_message');
	}
	public function tambah_aksi()
	{
		$nama		= $this->input->post('nama');
		$no			= $this->input->post('no');
		$alamat		= $this->input->post('alamat');

		$data = array(
			'nama'		=> $nama,
			'no'		=> $no,
			'alamat'	=> $alamat,
		);
		$this=>m_model=>input_data($data, 'tb_siswa');
		redirect('welcome/index');
	}
}
