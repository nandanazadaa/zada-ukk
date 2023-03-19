<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Petugas Page';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['bar_graph'] = $this->m_pengaduan->card_admin();

        $this->load->view('Templates/petugas_header',$data);
        $this->load->view('Templates/petugas_topbar',$data);
        $this->load->view('Templates/petugas_sidebar',$data);
        $this->load->view('Dashboard/Petugas/petugas_dashboard', $data);
        $this->load->view('Templates/petugas_footer',$data);
    }

    public function petugas_kategori()
    {
        $data['title'] = 'Petugas Kategori';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['joinkategori'] = $this->m_kategori->joinkategori()->result_array();

        $this->load->model('m_kategori');
        $data['sub_kategori'] = $this->db->get('sub_kategori')->result_array();
        $this->load->model('m_kategori');

        $this->load->view('Templates/petugas_header',$data);
        $this->load->view('Templates/petugas_topbar',$data);
        $this->load->view('Templates/petugas_sidebar',$data);
        $this->load->view('Dashboard/Petugas/petugas_kategori', $data);
         $this->load->view('Templates/petugas_footer',$data);
    }

    public function petugas_masyarakat()
    {
        $data['title'] = 'Home Page';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['masyarakat'] = $this->db->get('masyarakat')->result_array();

        $this->load->view('Templates/petugas_header',$data);
        $this->load->view('Templates/petugas_topbar',$data);
        $this->load->view('Templates/petugas_sidebar',$data);
        $this->load->view('Dashboard/Petugas/petugas_masyarakat', $data);
         $this->load->view('Templates/petugas_footer',$data);
    }

    public function petugas()
    {
        $data['title'] = 'Home Page';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->db->get('petugas')->result_array();

        $this->load->view('Templates/petugas_header',$data);
        $this->load->view('Templates/petugas_topbar',$data);
        $this->load->view('Templates/petugas_sidebar',$data);
        $this->load->view('Dashboard/Petugas/petugas_petugas', $data);
         $this->load->view('Templates/petugas_footer',$data);
    }

    public function petugas_laporan()
    {
        $data['title'] = 'Admin Dashboard';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        // $data['pengaduanaje'] = $this->db->get('pengaduan')->result_array();
        $data['pengaduan'] = $this->db->get('pengaduan')->result_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['pengaduanaapa'] = $this->m_pengaduan->join1()->result_array();
        $data['sub_kategori']=$this->db->get('sub_kategori')->result_array();

        $this->load->view('Templates/petugas_header',$data);
        $this->load->view('Templates/petugas_topbar',$data);
        $this->load->view('Templates/petugas_sidebar',$data);
        $this->load->view('Dashboard/Petugas/petugas_laporan', $data);
        $this->load->view('Templates/petugas_footer',$data);

    }
}
