<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
//        $this->load->library('user_agent');
    }

    public function index() {

        if ($this->session->dashboard_login) {
            
            $this->load->view('back/view_back_header');
            $this->load->view('back/view_back_home');
            $this->load->view('back/view_back_footer');
        } else {
            redirect('dashboard/login');
        }
    }

    public function login() {

        $this->load->view('back/view_back_login');
    }

    public function login_access() {

        $user = trim($this->input->post('user'));
        $password = trim($this->input->post('password'));

        $usuario = $this->General_model->get('sys_usuario', array('sys_usuario' => $user));

        if (count($usuario) > 0) {
            if ($password == $usuario[0]->sys_password) {

                $user_session = array(
                    'dashboard_login' => true,
                    'id_user' => $usuario[0]->id_sys_usuario,
                    'sys_usuario' => $usuario[0]->sys_usuario,
                    'sys_nombre' => $usuario[0]->sys_nombre
                );

                $this->session->set_userdata($user_session);
                echo '{"success":"1"}';
            } else {
                echo '{"success":"0", "msj":"<i class=\"fas fa-exclamation-triangle\"></i> Error, su contraseña es incorrecta."}';
            }
        } else {
            echo '{"success":"0", "msj":"<i class=\"fas fa-exclamation-triangle\"></i> Error, no existe el Usuario."}';
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect(base_url('dashboard/login'));
    }

}
