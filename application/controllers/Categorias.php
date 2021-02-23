<?php
class Categorias extends CI_Controller
{

    public function index()
    {
        $this->load->view('listar_categorias');
    }
    public function create()
    {
        $this->load->view('nova_categoria');
    }
}
