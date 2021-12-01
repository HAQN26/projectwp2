<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

    public function index()
    {
        //load view form register
        $this->load->view('form');
    }
    function Simpan()
    {
        $nama = $this->input->post('xnama');
        $email = $this->input->post('xemail');
        $kategori = $this->input->post('xinstagram');
        $pesan = $this->input->post('xpesanan');

        $this->db->query("INSERT INTO tbl_pesanan (nama,email,instagram,pesan) VALUES ('$nama','$email','$kategori','$pesan')");
        redirect('Umkm');
    }
}
