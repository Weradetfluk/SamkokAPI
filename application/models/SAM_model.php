<?php
/*
* VCS_model
* Main Model CI 
* @author Suwapat Saowarod 62160340
* @Create Date 2565-03-06
*/
defined('BASEPATH') or exit('No direct script access allowed');

class SAM_model extends CI_Model
{
    public $db;
    public $db_name;

    public function __construct()
    {
        $this->db = $this->load->database('default',true);
        $this->db_name = $this->db->database;
    }

    public function get_data_by_id($id){

        $query = $this->db->get_where('samkok_actor', ['id' => $id]);

        return $query->result();   
    }

}