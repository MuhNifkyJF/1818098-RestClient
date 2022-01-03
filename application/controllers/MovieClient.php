<?php

class MovieClient extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MovieClient_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'List Movie';
        $data['page']		= 'admin/movies/index';
        $data['movieclient'] = $this->MovieClient_model->getAllMovieClient();
        $this->load->view('admin/main', $data);
    }

    public function tambah()
    {
        $data['judul'] = 'Form ADD Movie';
        $data['page']		= 'admin/movies/tambah';
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/main', $data);
        } else {
            $this->MovieClient_model->addMovieClient();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('movieclient');
        }
    }

    public function hapus($id)
    {
        $this->MovieClient_model->deleteMovieClient($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('movieclient');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Movie';
        $data['page']       = 'admin/movies/detail';
        $data['movieclient'] = $this->MovieClient_model->getMovieClientById($id);
        $this->load->view('admin/main', $data);
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Update Movie';
        $data['page']       = 'admin/movies/ubah';
        $data['movieclient'] = $this->MovieClient_model->getMovieClientById($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/main', $data);
        } else {
            $this->MovieClient_model->updateMovieClient();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('movieclient');
        }
    }

}
