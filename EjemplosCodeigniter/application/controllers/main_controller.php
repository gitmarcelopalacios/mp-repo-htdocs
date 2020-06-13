<?php


class main_controller extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
    }

    public function loadFrontEnd($archivo)
    {
        $archivo=$this->uri->segment(3);
        $this->load->view($archivo);
    }

    public function displayFrontEnd($archivo)
    {
        $archivo=$this->uri->segment(3);
        $this->load->view('header');
        $this->load->view($archivo);
        $this->load->view('footer');
    }

}	
