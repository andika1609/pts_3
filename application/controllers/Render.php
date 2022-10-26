<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Render extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Ciqrcode');
    }

    public function index()
    {
        $this->load->view('tampil_qr');
    }
}

/* End of file Render.php and path /application/controllers/Render.php */
