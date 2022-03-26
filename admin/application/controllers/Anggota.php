<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Anggota';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['name'] = $this->db->get('anggota')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Anggota/index');
        $this->load->view('templates/footer');
    }

    public function tambahAnggota()
    {

        $data['title'] = 'Daftar Anggota';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['name'] = $this->db->get('anggota')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('no_telpon', 'Nomer Telpon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('foto', 'Foto', 'required|trim');






        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('Anggota/index');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name'  => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'no_telpon' => $this->input->post('no_telpon'),
                'alamat' => $this->input->post('email'),
                'foto' => $this->input->post('foto'),



            ];

            $this->db->input->post('anggota', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anggota Baru Berhasil ditambahkan! </div>');
            redirect('anggota/index');

            $upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/img/anggota';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    // untuk menghapus foto lama dari folder image
                    $old_image = $data['anggota']['foto'];
                    if ($old_image != 'default2.jpg') {
                        unlink(FCPATH . 'assets/img/anggota/' . $old_image);
                    }
                    // tambah baru image
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }
    }
}
