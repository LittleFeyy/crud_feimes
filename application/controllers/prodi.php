<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class prodi extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = "Halaman Prodi";
        $this->load->view("layout/header");
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer");
    }
    
}        