<?php
defined('BASEPATH') or exit('No direct script access allowed');

class web extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');

    }

    public function user()
    {
        //$data['user']= $this->m_data->ambil_data()->result();
        $data=array(
            'user'=> $this->m_data->ambil_data()->result(),
            'judul'=>"daftar user"
        );
        $this->load->view('view_header',$data);
        $this->load->view('view_user', $data);
        $this->load->view('view_footer',$data);
    }


    
    public function index()
    {
        $data['judul']="HOME";
        $this->load->view('view_header',$data);
        $this->load->view('view_index',$data);
        $this->load->view('view_footer',$data);
        
    }

    public function blog()
    {
        $data['judul'] = "Home";
        $this->load->view('view_header',$data);
        $this->load->view('view_blog',$data);
        $this->load->view('view_footer',$data);

    }

   
    public function about()
    {
        $data['judul'] = "Home";
        $this->load->view('view_header',$data);
        $this->load->view('view_about',$data);
        $this->load->view('view_footer',$data);
    }

       
}