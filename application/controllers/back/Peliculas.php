<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peliculas extends CI_Controller {

    function __construct() {
        parent::__construct();
//        $this->load->library('user_agent');
    }

    public function index() {
        if ($this->session->dashboard_login) {

            $data['peliculas'] = $this->Peliculas_model->get_peliculas();

            $this->load->view('back/view_back_header');
            $this->load->view('back/view_back_peliculas', $data);
            $this->load->view('back/view_back_footer');
        } else {
            redirect('dashboard/login');
        }
    }

    public function add_pelicula() {
        if ($this->session->dashboard_login) {

            $data['categorias'] = $this->General_model->get('categoria_pelis');

            $this->load->view('back/view_back_header');
            $this->load->view('back/view_back_peliculas_add', $data);
            $this->load->view('back/view_back_footer');
        } else {
            redirect('dashboard/login');
        }
    }

    public function save_pelicula() {

        if ($this->session->dashboard_login) {
            $pelicula = array(
                'id_categoria' => $this->input->post('categoria'),
                'titulo' => trim($this->input->post('titulo')),
                'protagonistas' => trim($this->input->post('protagonistas')),
                'year' => $this->input->post('fecha'),
                'pais' => trim($this->input->post('pais')),
                'resumen' => trim($this->input->post('resumen')),
                'duracion' => $this->input->post('duracion'),
                'imagen' => $this->upload_foto()
            );

            $id = $this->General_model->insert('pelis', $pelicula);

            if ($id > 0) {
                redirect('dashboard/peliculas/view/' . $id);
            } else {
                $this->session->set_flashdata('error', 'No se pudo guardar la información.');
                redirect('dashboard/peliculas/add');
            }
        } else {
            redirect('dashboard/login');
        }
    }

    public function upload_foto() {

        $config['upload_path'] = DIR_SITIO . 'upload/fotos_peliculas/';
        $config['allowed_types'] = 'jpeg|jpg|png';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        } else {
            return '';
        }
    }

    public function view_pelicula($id_pelicula) {

        if ($this->session->dashboard_login) {

            $data['pelicula'] = $this->Peliculas_model->get_peliculas($id_pelicula);

            $this->load->view('back/view_back_header');
            $this->load->view('back/view_back_peliculas_view', $data);
            $this->load->view('back/view_back_footer');
        } else {
            redirect('dashboard/login');
        }
    }

    public function edit_pelicula($id_pelicula) {
        if ($this->session->dashboard_login) {

            $data['pelicula'] = $this->Peliculas_model->get_peliculas($id_pelicula);
            $data['categorias'] = $this->General_model->get('categoria_pelis');

            $this->load->view('back/view_back_header');
            $this->load->view('back/view_back_peliculas_edit', $data);
            $this->load->view('back/view_back_footer');
        } else {
            redirect('dashboard/login');
        }
    }

    public function update_pelicula() {

        if ($this->session->dashboard_login) {

            $id_pelicula = $this->input->post('id_pelicula');

            $pelicula = array(
                'id_categoria' => $this->input->post('categoria'),
                'titulo' => trim($this->input->post('titulo')),
                'protagonistas' => trim($this->input->post('protagonistas')),
                'year' => $this->input->post('fecha'),
                'pais' => trim($this->input->post('pais')),
                'resumen' => trim($this->input->post('resumen')),
                'duracion' => $this->input->post('duracion'),
            );

            if (!empty($this->upload_foto())) {
                $pelicula['imagen'] = $this->upload_foto();
            }

            $this->General_model->update('pelis', $pelicula, array('id_pelicula' => $id_pelicula));

            if ($this->db->affected_rows() > 0) {
                redirect('dashboard/peliculas/view/' . $id_pelicula);
            } else {
                $this->session->set_flashdata('error', 'No se pudo actualizar la información.');
                redirect('dashboard/peliculas/edit/' . $id_pelicula);
            }
        } else {
            redirect('dashboard/login');
        }
    }

    public function delete_pelicula($id_pelicula) {

        if ($this->session->dashboard_login) {
            $pelicula = $this->General_model->get('pelis', array('id_pelicula' => $id_pelicula));

            if (count($pelicula) > 0) {
                $this->General_model->delete('pelis', array('id_pelicula' => $pelicula[0]->id_pelicula));
            }
            redirect('dashboard/peliculas');
        } else {
            redirect('dashboard/login');
        }
    }

}
