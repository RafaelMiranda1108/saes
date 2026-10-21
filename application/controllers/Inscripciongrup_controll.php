<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscripciongrup_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inscripciongrup_model');
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
    }

    public function index()
    {
        $data['inscripciones'] = $this->Inscripciongrup_model->obtener_inscripciones();
        $data['titulo'] = 'Inscripción a grupos | SAES';
        $data['contenido'] = 'formularios/inscripciongrup';
        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $id_grupo = $this->input->post('id_grupo', TRUE);
        $id_alumno = $this->input->post('id_alumno', TRUE);
        $estatus = $this->input->post('estatus_insg', TRUE);

        if ($id_grupo === NULL || $id_grupo === '' || !ctype_digit((string)$id_grupo) ||
            (int)$id_grupo < 1 || $id_alumno === NULL || $id_alumno === '' ||
            !ctype_digit((string)$id_alumno) || (int)$id_alumno < 1 ||
            !in_array($estatus, array('Activa', 'Inactiva'), TRUE)) {
            $this->session->set_flashdata('error', 'Verifica los IDs de grupo y alumno, y selecciona un estatus válido.');
            redirect('Inscripciongrup_controll');
            return;
        }

        $datos = array(
            'id_grupo' => (int)$id_grupo,
            'id_alumno' => (int)$id_alumno,
            'estatus_insg' => $estatus
        );

        if ($this->Inscripciongrup_model->guardar_inscripcion($datos)) {
            $this->session->set_flashdata('success', 'La inscripción se registró correctamente.');
        } else {
            log_message('error', 'Error al registrar inscripción a grupo: ' . $this->db->last_query());
            $this->session->set_flashdata('error', 'No se pudo registrar la inscripción. Verifica que el grupo y el alumno existan.');
        }

        redirect('Inscripciongrup_controll');
    }
}
