<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peliculas_model extends CI_Model {
 
    public function get_peliculas($id_pelicula = NULL){
        $this->db->join('categoria_pelis', 'categoria_pelis.id_categoria = pelis.id_categoria');
        if(!empty($id_pelicula)){
            $this->db->where('pelis.id_pelicula', $id_pelicula);
        }
        return $this->db->get('pelis')->result();
    }
    
}
