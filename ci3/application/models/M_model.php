<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_model extends CI_Model
{
    function get_data()
    {
        return $this->db->get('tb_siswa')->result();
    }
    public $id;
    public $nama;
    public $no;
    public $alamat;
    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'no',
                'label' => 'no',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ]
        ];
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
