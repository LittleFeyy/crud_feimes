<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Hitungtabung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tabung');
    }
    function index()
    {
        $this->tabung->volume('5', '3');
        echo "<br/>";
        $this->tabung->luaspermukaan('5', '3');
        echo "<br/>";
        $this->tabung->selimut('5', '3');
    }
}
?>