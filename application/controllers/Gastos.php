<?php
class Gastos extends CI_Controller
{
    public function index()
    {
        $this->load->view('listar_gastos');
    }
    public function create()
    {
        $this->load->view('novo_gasto');
    }
}
