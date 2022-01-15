<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('security');
        $this->load->helper('file');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Admin_models');
    }
    public function index()
    {
        if (isset($this->session->userdata['logged_in'])) {
            $data['allMateri'] = $this->Admin_models->getAllMateri();
            $this->load->view('layouts/admin/header');
            $this->load->view('admin/index', $data);
            $this->load->view('layouts/admin/footer');
        } else {
            redirect('auth_admin');
        }
    }

    public function getMateri($id)
    {
        $data = $this->Admin_models->getMateribyId($id)->result();
        echo json_encode($data);
    }

    public function addMateri()
    {
        $this->form_validation->set_rules('nama-materi', 'Nama Materi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('deskripsi-materi', 'Deskripsi Materi', 'trim|required|xss_clean');
        if (!empty($_FILES['img-materi']['name'])) {
            // Set preference
            $config['upload_path'] = './storage/image/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '256000'; // max_size in kb
            $config['file_name'] = time() . '-' . $_FILES['img-materi']['name'];

            // Load upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // File upload
            if ($this->upload->do_upload('img-materi')) {
                // Get data about the file
                $uploadData = $this->upload->data();
                $img_materi = $uploadData['file_name'];
                $data['response'] = 'successfully uploaded ' . $img_materi;
            } else {
                $data['response'] = 'error_upload' . $this->upload->display_errors();
            }
            $data = [
                'nama' => $this->input->post('nama-materi'),
                'deskripsi' => $this->input->post('deskripsi-materi'),
                'image' => $img_materi
            ];
        } else {
            $img_materi = null;
            $data = [
                'nama' => $this->input->post('nama-materi'),
                'deskripsi' => $this->input->post('deskripsi-materi'),
            ];
        }
        $this->Admin_models->addMateri($data);
        redirect('admin');
    }
    public function editMateri($id)
    {
        $this->form_validation->set_rules('nama-materi', 'Nama Materi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('deskripsi-materi', 'Deskripsi Materi', 'trim|required|xss_clean');
        if (!empty($_FILES['img-materi']['name'])) {
            // Set preference
            $config['upload_path'] = './storage/image/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '256000'; // max_size in kb
            $config['file_name'] = time() . '-' . $_FILES['img-materi']['name'];

            // Load upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // File upload
            if ($this->upload->do_upload('img-materi')) {
                // Get data about the file
                $uploadData = $this->upload->data();
                $img_materi = $uploadData['file_name'];
                $data['response'] = 'successfully uploaded ' . $img_materi;
            } else {
                $data['response'] = 'error_upload' . $this->upload->display_errors();
            }
            $data = [
                'nama' => $this->input->post('nama-materi'),
                'deskripsi' => $this->input->post('deskripsi-materi'),
                'image' => $img_materi
            ];
        } else {
            $img_materi = null;
            $data = [
                'nama' => $this->input->post('nama-materi'),
                'deskripsi' => $this->input->post('deskripsi-materi')
            ];
        }
        // var_dump($data);
        $this->Admin_models->editMateri($data, $id);
        redirect('admin');
    }
    public function deleteMateri($id, $img_name)
    {
        $this->Admin_models->deleteMateri($id);
        unlink("storage/image/".$img_name);
        redirect('admin');
    }
}
