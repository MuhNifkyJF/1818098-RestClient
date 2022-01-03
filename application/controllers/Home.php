<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('movieclient_model', 'admin');
	}
	
	public function index()
	{

		$data['title']		= 'Beranda';
		$data['page']       = 'fronts/movies/index';
		$data['film']	= $this->admin->getAllMovieClient();

		$this->load->view('fronts/main', $data);

	}
	public function detail($id)
    {
        $data['judul'] = 'Detail Movie';
        $data['page']       = 'fronts/movies/detail';
        $data['film'] = $this->admin->getMovieClientById($id);
        $this->load->view('fronts/main', $data);
    }

}