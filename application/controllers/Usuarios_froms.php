<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_froms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Usuarios_model');
    }

    public function index()
    {
        $data['titulo'] = 'Usuarios | SAES';
        $data['contenido'] = 'formularios/usuarios_froms';

        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        $datos = array(
            'id_usuario'       => $this->input->post('id_usuario'),
            'contraseña_usua'  => $this->input->post('contraseña_usua'),
            'descricpion_usua' => $this->input->post('descricpion_usua'),
            'estatus_usua'     => $this->input->post('estatus_usua')
        );

        $this->Usuarios_model->insertar_usuario($datos);

        redirect('usuarios_froms');
    }

    public function lista()
    {
        $data['usuarios'] = $this->Usuarios_model->obtener_usuarios();

        $data['titulo'] = 'Lista de usuarios | SAES';
        $data['contenido'] = 'tablas/usuarios';

        $this->load->view('layouts/main', $data);
    }
}