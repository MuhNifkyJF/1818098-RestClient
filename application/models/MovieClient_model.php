<?php 
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;

class MovieClient_model extends CI_model {

    private $_client;
    public function __construct()
    {
        $this->_client= new Client([
            'base_uri'=> 'http://localhost/1818098-RestFullServer/'
        ]);
    }
    public function getAllMovieClient()
    {
        $response = $this->_client->request('GET','movie');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
    
    public function getMovieClientById($id)
    {
        $response = $this->_client->request('GET','movie',[
            'query' =>[
            'id'=>$id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }
    public function deleteMovieClient($id)
    {
        $response = $this->_client->request('DELETE','movie',[
            'form_params' =>[
                'id' =>$id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }
    public function addMovieClient()
    {
        $data = [
          'judul' => $this->input->post('judul',true),
          'poster' => $this->input->post('poster',true),
          'trailer' => $this->input->post('trailer',true),
          'sinopsis' => $this->input->post('sinopsis',true),
          'pemeran' => $this->input->post('pemeran',true),
          'genre' => $this->input->post('genre',true),
          'tahun_rilis' => $this->input->post('tahun_rilis',true),
          'durasi' => $this->input->post('durasi',true),
          'negara' => $this->input->post('negara',true)
        ];

        $response = $this->_client->request('POST','movie', [
            'form_params' => $data
            
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    

    public function updateMovieClient()
    {
        $data = [
            "judul" => $this->input->post('judul',true),
            "poster" => $this->input->post('poster',true),
            "trailer" => $this->input->post('trailer',true),
            "sinopsis" => $this->input->post('sinopsis',true),
            "pemeran" => $this->input->post('pemeran',true),
            "genre" => $this->input->post('genre',true),
            "tahun_rilis" => $this->input->post('tahun_rilis',true),
            "durasi" => $this->input->post('durasi',true),
            "negara" => $this->input->post('negara',true),
            "id" => $this->input->post('id',true)

        ];

        $response = $this->_client->request('PUT','movie', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function getDataByJudul($judul)
    {
        //return $this->db->get_where('posts', ['judul' => $judul])->row();
        $response = $this->_client->request('GET','movie',[
            'query' =>[
            'judul'=>$judul
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

}