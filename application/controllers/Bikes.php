<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bikes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function select()
    {
        $data['title'] = 'Select Your Bikes';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['alternatives'] = $this->db->get('list_alternatives')->result_array();

        $this->form_validation->set_rules('a1', 'Alternative 1', 'required');
        $this->form_validation->set_rules('a2', 'Alternative 2', 'required');
        $this->form_validation->set_rules('a3', 'Alternative 3', 'required');

        $user_email = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()['email'];
        $query_alternatives_selected = $this->db->get_where('alternatives_selected', ['id_user' => $data['user']['id']]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('alternatives/alternatives_select', $data);
            $this->load->view('templates/footer');
        } else {
            $alternative_1 = $this->input->post('a1');
            $alternative_2 = $this->input->post('a2');
            $alternative_3 = $this->input->post('a3');
            $alternative_4 = $this->input->post('a4');
            $alternative_5 = $this->input->post('a5');
            if (
                $alternative_1 == $alternative_2 or $alternative_1 == $alternative_3 or $alternative_1 == $alternative_4 or $alternative_1 == $alternative_5 or
                $alternative_2 == $alternative_3 or $alternative_2 == $alternative_4 or $alternative_2 == $alternative_5 or
                $alternative_3 == $alternative_4 or $alternative_3 == $alternative_5 or
                $alternative_4 == $alternative_5
            ) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">You can not select the same bikes!</div>');
                redirect('bikes/select');
            } else {
                $alternatives_selected = array(
                    array(
                        'id_user' =>  $data['user']['id'],
                        'name' => $alternative_1,
                        'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['price'],
                        'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['weight'],
                        'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['folding_method'],
                        'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['speed'],
                        'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['wheel_size']
                    ),
                    array(
                        'id_user' =>  $data['user']['id'],
                        'name' => $alternative_2,
                        'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['price'],
                        'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['weight'],
                        'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['folding_method'],
                        'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['speed'],
                        'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['wheel_size']
                    ),
                    array(
                        'id_user' =>  $data['user']['id'],
                        'name' => $alternative_3,
                        'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['price'],
                        'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['weight'],
                        'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['folding_method'],
                        'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['speed'],
                        'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['wheel_size']
                    ),
                    array(
                        'id_user' =>  $data['user']['id'],
                        'name' => $alternative_4,
                        'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['price'],
                        'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['weight'],
                        'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['folding_method'],
                        'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['speed'],
                        'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['wheel_size']
                    ),
                    array(
                        'id_user' =>  $data['user']['id'],
                        'name' => $alternative_5,
                        'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['price'],
                        'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['weight'],
                        'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['folding_method'],
                        'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['speed'],
                        'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['wheel_size']
                    )
                );

                if ($query_alternatives_selected->num_rows() < 1) {
                    $this->db->insert_batch('alternatives_selected', $alternatives_selected);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Bikes have been successfully selected. </div>');
                } else {

                    $prev_alternatives = $this->db->get_where('alternatives_selected', array('id_user' => $data['user']['id']))->result_array();
                    $prev_a1 = $prev_alternatives[0]['name'];
                    $prev_a2 = $prev_alternatives[1]['name'];
                    $prev_a3 = $prev_alternatives[2]['name'];
                    $prev_a4 = $prev_alternatives[3]['name'];
                    $prev_a5 = $prev_alternatives[4]['name'];

                    $alternatives_selected_2 = array(
                        array(
                            'id' => $this->db->get_where('alternatives_selected', array('id_user' => $data['user']['id'], 'name' => $prev_a1))->row_array()['id'],
                            'name' => $alternative_1,
                            'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['price'],
                            'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['weight'],
                            'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['folding_method'],
                            'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['speed'],
                            'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_1))->row_array()['wheel_size']
                        ),
                        array(
                            'id' => $this->db->get_where('alternatives_selected', array('id_user' => $data['user']['id'], 'name' => $prev_a2))->row_array()['id'],
                            'name' => $alternative_2,
                            'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['price'],
                            'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['weight'],
                            'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['folding_method'],
                            'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['speed'],
                            'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_2))->row_array()['wheel_size']
                        ),
                        array(
                            'id' => $this->db->get_where('alternatives_selected', array('id_user' => $data['user']['id'], 'name' => $prev_a3))->row_array()['id'],
                            'name' => $alternative_3,
                            'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['price'],
                            'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['weight'],
                            'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['folding_method'],
                            'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['speed'],
                            'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_3))->row_array()['wheel_size']
                        ),
                        array(
                            'id' => $this->db->get_where('alternatives_selected', array('id_user' => $data['user']['id'], 'name' => $prev_a4))->row_array()['id'],
                            'name' => $alternative_4,
                            'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['price'],
                            'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['weight'],
                            'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['folding_method'],
                            'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['speed'],
                            'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_4))->row_array()['wheel_size']
                        ),
                        array(
                            'id' => $this->db->get_where('alternatives_selected', array('id_user' => $data['user']['id'], 'name' => $prev_a5))->row_array()['id'],
                            'name' => $alternative_5,
                            'price' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['price'],
                            'bike_weight' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['weight'],
                            'folding_method' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['folding_method'],
                            'speed' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['speed'],
                            'wheel_size' => $this->db->get_where('list_alternatives', array('name' => $alternative_5))->row_array()['wheel_size']
                        )

                    );

                    $this->db->update_batch('alternatives_selected', $alternatives_selected_2, 'id');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your selected bikes have been updated.</div>');
                }
                redirect('design/compare');
            }
        }
    }
}
