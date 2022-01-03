<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {



	public function index()
	{
		$data['title'] 			 = 'Dashboard';
		$data['page']			= 'admin/dashboard/index';

		$this->load->view('admin/main', $data);
	}


}

/* End of file Controllername.php */
