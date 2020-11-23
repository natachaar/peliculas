<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Accesos extends CI_Controller {

    public function index() {

        $this->load->view('front/view_header');
        $this->load->view('front/view_login');
        $this->load->view('front/view_footer');
    }

    public function login() {

        $email = trim($this->input->post('email'));
        $password = trim($this->input->post('password'));

        $usuario = $this->General_model->get('usuario', array('email' => $email));

        if (count($usuario) > 0) {
            if ($password == $usuario[0]->password) {

                $user_session = array(
                    'login' => true,
                    'id_usuario' => $usuario[0]->id_usuario,
                    'user_name' => $usuario[0]->nombre,
                    'user_email' => $usuario[0]->email
                );

                $this->session->set_userdata($user_session);
                echo '{"success":"1"}';
            } else {
                echo '{"success":"0", "msj":"<i class=\"fas fa-exclamation-triangle\"></i> Error, su contraseña es incorrecta."}';
            }
        } else {
            echo '{"success":"0", "msj":"<i class=\"fas fa-exclamation-triangle\"></i> Error, no existe el email."}';
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    public function registro() {
        $this->load->view('front/view_header');
        $this->load->view('front/view_registro');
        $this->load->view('front/view_footer');
    }

    public function add_usuario() {

        $nombre = trim($this->input->post('nombre'));
        $apellidos = trim($this->input->post('apellidos'));
        $email = trim($this->input->post('email'));
        $password = trim($this->input->post('password'));
        $sexo = $this->input->post('sexo');
        $telefono = trim($this->input->post('telefono'));

        $usuario = $this->General_model->get('usuario', array('email' => $email));

        if (count($usuario) > 0) {

            echo '{"success":"0", "msj":"<i class=\"fas fa-exclamation-triangle\"></i> Ya existe un usuario registrado con ese email."}';
        } else {

            $new_user = array(
                'nombre' => $nombre,
                'apellidos' => $apellidos,
                'email' => $email,
                'password' => $password,
                'fecha_alta' => date('Y-m-d H:i:s'),
                'ip_address' => $this->input->ip_address(),
                'sexo' => $sexo,
                'telefono' => $telefono,
            );

            $id_usuario = $this->General_model->insert('usuario', $new_user);

            if ($id_usuario > 0) {

                $usuario = $this->General_model->get('usuario', array('id_usuario' => $id_usuario));

                $user_session = array(
                    'login' => true,
                    'id_usuario' => $usuario[0]->id_usuario,
                    'user_name' => $usuario[0]->nombre,
                    'user_email' => $usuario[0]->email
                );

                $this->session->set_userdata($user_session);
                echo '{"success":"1"}';
            } else {
                echo '{"success":"0", "msj":"<i class=\"fas fa-exclamation-triangle\"></i> Error, no se pudo crear el nuevo usuario."}';
            }
        }
    }

    public function registro_success() {
        $this->load->view('front/view_header');
        $this->load->view('front/view_registro_success');
        $this->load->view('front/view_footer');
    }

}
