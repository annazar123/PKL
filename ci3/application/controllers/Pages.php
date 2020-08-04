<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
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
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
    }
    public function index()
    {
        $data["base"] = $this->M_model->get_data();
        $this->load->view('pages/index', $data);
    }
    public function tambah()
    {
        $nama        = $this->input->post('nama');
        $no            = $this->input->post('no');
        $alamat        = $this->input->post('alamat');

        $data = array('nama' => $nama, 'no' => $no, 'alamat' => $alamat);
        echo "hello";
        $this->M_model->input_data($data, 'tb_siswa');
        redirect('pages/index');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['siswa'] = $this->M_model->edit_data($where, 'tb_siswa')->result();
        $this->load->view('update', $data);
    }
    public function update()
    {
        $id            = $this->input->post('id');
        $nama          = $this->input->post('name');
        $no            = $this->input->post('no');
        $alamat        = $this->input->post('alamat');
        $data = array('nama' => $nama, 'no' => $no, 'alamat' => $alamat);
        $where = array('id' => $id);
        $this->M_model->update_data($where, $data, 'tb_siswa');
        redirect('pages/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_model->hapus_data($where, 'tb_siswa');
        redirect('pages/index/');
    }
}
