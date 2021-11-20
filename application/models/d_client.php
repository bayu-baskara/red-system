<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class d_client extends CI_Model {
	function getDataClient (){
        $query= $this->db->get('tb_client');
        return $query->result();

    } 

    function insertDataClient ($data){
        $this->db->insert('tb_client', $data);
    }

    function getDataClientDetail ($id_client){
        $this->db->where('id_client', $id_client);
        $query = $this->db->get('tb_client');
        return $query->row();
    }

    function updateDataClient ($id_client, $data){
        $this->db->where('id_client', $id_client);
        $this->db->update('tb_client', $data);

    }
}
