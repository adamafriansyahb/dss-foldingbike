<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dss extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function criteria()
    {
        $data['title'] = 'Manage Criteria';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['criteria'] = $this->db->get('criteria')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dss/criteria', $data);
        $this->load->view('templates/footer');
    }

    public function alternatives()
    {
        $data['title'] = 'List of Alternatives';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['alternatives'] = $this->db->get('list_alternatives')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dss/alternatives', $data);
        $this->load->view('templates/footer');
    }

    public function alternatives_add()
    {
        $data['title'] = 'Add New Bike';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['alternatives'] = $this->db->get('list_alternatives')->result_array();

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');
        $this->form_validation->set_rules('folding_method', 'Folding method', 'required');
        $this->form_validation->set_rules('speed', 'Speed', 'required');
        $this->form_validation->set_rules('wheel_size', 'Wheel size', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('dss/alternatives_add', $data);
            $this->load->view('templates/footer');
        } else {

            $name = $this->input->post('name');
            $price = $this->input->post('price');
            $weight = $this->input->post('weight');
            $folding_method = $this->input->post('folding_method');
            $speed = $this->input->post('speed');
            $wheel_size = $this->input->post('wheel_size');

            //check if there is a picture to upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/bikes/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $new_image = 'seli.png';
            }

            $data = [
                'image' => $new_image,
                'name' => $name,
                'price' => $price,
                'weight' => $weight,
                'folding_method' => $folding_method,
                'speed' => $speed,
                'wheel_size' => $wheel_size
            ];

            $this->db->insert('list_alternatives', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New bike has been added!</div>');
            redirect('dss/alternatives');
        }
    }

    public function alternatives_delete($alternative_id)
    {
        $this->load->model('Dss_model', 'menu');
        $this->menu->deleteAlternative($alternative_id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">An alternative has been deleted!</div>');
        redirect('dss/alternatives');
    }

    public function alternatives_update($id)
    {
        $data['title'] = 'Edit The Bike';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['alternative'] = $this->db->get_where('list_alternatives', array('id' => $id))->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');
        $this->form_validation->set_rules('folding_method', 'Folding method', 'required');
        $this->form_validation->set_rules('speed', 'Speed', 'required');
        $this->form_validation->set_rules('wheel_size', 'Wheel size', 'required');
        #$this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('dss/alternatives_update', $data);
            $this->load->view('templates/footer');
        } else {

            $name = $this->input->post('name');
            $price = $this->input->post('price');
            $weight = $this->input->post('weight');
            $folding_method = $this->input->post('folding_method');
            $speed = $this->input->post('speed');
            $wheel_size = $this->input->post('wheel_size');
            #$description = $this->input->post('description');

            //check if there is a picture to upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/bikes/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['alternative']['image'];
                    if ($old_image != 'seli.png') {
                        unlink(FCPATH . 'assets/img/bikes/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    //$this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $new_image = 'seli.png';
            }

            $data = [
                'image' => $new_image,
                'name' => $name,
                'price' => $price,
                'weight' => $weight,
                'folding_method' => $folding_method,
                'speed' => $speed,
                'wheel_size' => $wheel_size
            ];

            $this->db->where('id', $id);
            $this->db->update('list_alternatives', $data);
            #$this->db->insert('list_alternatives', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Bike has been edited.</div>');
            redirect('dss/alternatives');
        }
    }
}
