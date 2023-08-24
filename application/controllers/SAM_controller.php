<?php
/*
* VCS_controller
* controller
* @input -
* @output -
* @author suwapat saowarod 62160340
* @Create Date 2565-03-01
*/

defined('BASEPATH') or exit('No direct script access allowed');

class SAM_controller extends CI_Controller
{
	/*
    * @author Suwapat Saowarod 62160340
    */
	public function __construct()
	{
		parent::__construct();
	}

	/*
	* index
	* 
	* @input -
	* @output -
	* @author suwapat saowarod 62160340
	* @Create Date 2565-03-01
	*/
	public function index()
	{
        $this->load->view('v_samkok_table');
		
	}

    public function get_data(){

        $this->load->model('SAM_model', 'sam');

		$id = $this->input->post('id');

		$data= array();

		$data['data'] = $this->sam->get_data_by_id($id);

		echo json_encode($data['data']);

    }
	
}