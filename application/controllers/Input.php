<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function criteria()
    {
        $data['title'] = 'Compare the criteria';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['criteria'] = $this->db->get('criteria')->result_array();
        $user_id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()['id'];

        $this->form_validation->set_rules('cl01', 'Criteria 1', 'required');
        $this->form_validation->set_rules('v00', 'Value', 'required');
        $this->form_validation->set_rules('cr01', 'Criteria 2', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('input/criteria_1', $data);
            $this->load->view('templates/footer');
        } else {
            $query = $this->db->get_where('criteria_comparison', array('id_user' => $data['user']['id']));

            $data = array(
                // PRICE
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl01'),
                    'value' => $this->input->post('v00'),
                    'criteria_2' => $this->input->post('cr01')
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl02'),
                    'value' =>  $this->input->post('v01'),
                    'criteria_2' => $this->input->post('cr12'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl03'),
                    'value' =>  $this->input->post('v02'),
                    'criteria_2' => $this->input->post('cr23'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl04'),
                    'value' =>  $this->input->post('v03'),
                    'criteria_2' => $this->input->post('cr34'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl05'),
                    'value' =>  $this->input->post('v04'),
                    'criteria_2' => $this->input->post('cr45'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl06'),
                    'value' =>  $this->input->post('v05'),
                    'criteria_2' => $this->input->post('cr56'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl07'),
                    'value' =>  $this->input->post('v06'),
                    'criteria_2' => $this->input->post('cr67'),
                ),

                // BIKE WEIGHT

                // nilai perbandingan terbalik 
                # weight vs price
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr12'),
                    'value' => (1 / $this->input->post('v01')),
                    'criteria_2' => $this->input->post('cl02'),
                ),

                // input from user
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl18'),
                    'value' =>  $this->input->post('v11'),
                    'criteria_2' => $this->input->post('cr18'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl19'),
                    'value' =>  $this->input->post('v12'),
                    'criteria_2' => $this->input->post('cr29'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl110'),
                    'value' =>  $this->input->post('v13'),
                    'criteria_2' => $this->input->post('cr310'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl111'),
                    'value' =>  $this->input->post('v14'),
                    'criteria_2' => $this->input->post('cr411'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl112'),
                    'value' =>  $this->input->post('v15'),
                    'criteria_2' => $this->input->post('cr512'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl113'),
                    'value' =>  $this->input->post('v16'),
                    'criteria_2' => $this->input->post('cr613'),
                ),

                // FOLDING METHOD

                // nilai perbandingan terbalik
                # folding method vs price 
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr23'),
                    'value' => (1 / $this->input->post('v02')),
                    'criteria_2' => $this->input->post('cl03'),
                ),
                # folding method vs bike weight
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr29'),
                    'value' => (1 / $this->input->post('v12')),
                    'criteria_2' => $this->input->post('cl19'),
                ),

                // input from user
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl214'),
                    'value' =>  $this->input->post('v22'),
                    'criteria_2' => $this->input->post('cr214'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl215'),
                    'value' =>  $this->input->post('v23'),
                    'criteria_2' => $this->input->post('cr315'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl216'),
                    'value' =>  $this->input->post('v24'),
                    'criteria_2' => $this->input->post('cr416'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl217'),
                    'value' =>  $this->input->post('v25'),
                    'criteria_2' => $this->input->post('cr517'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl218'),
                    'value' =>  $this->input->post('v26'),
                    'criteria_2' => $this->input->post('cr618'),
                ),

                // SPEED    
                // nilai perbandingan terbalik
                # speed vs price 
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr34'),
                    'value' => (1 / $this->input->post('v03')),
                    'criteria_2' => $this->input->post('cl04'),
                ),
                # speed vs bike weight
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr310'),
                    'value' => (1 / $this->input->post('v13')),
                    'criteria_2' => $this->input->post('cl110'),
                ),
                # speed vs folding method
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr315'),
                    'value' => (1 / $this->input->post('v23')),
                    'criteria_2' => $this->input->post('cl215'),
                ),

                // input from user
                # [3] vs [3]
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl319'),
                    'value' =>  $this->input->post('v33'),
                    'criteria_2' => $this->input->post('cr319'),
                ),
                # [3] vs [4]
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl320'),
                    'value' =>  $this->input->post('v34'),
                    'criteria_2' => $this->input->post('cr420'),
                ),
                # [3] vs [5]
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl321'),
                    'value' =>  $this->input->post('v35'),
                    'criteria_2' => $this->input->post('cr521'),
                ),
                # [3] vs [6]
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl322'),
                    'value' =>  $this->input->post('v36'),
                    'criteria_2' => $this->input->post('cr622'),
                ),

                // WHEEL SIZE
                // nilai perbandingan terbalik
                # wheel size vs price 
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr45'),
                    'value' => (1 / $this->input->post('v04')),
                    'criteria_2' => $this->input->post('cl05'),
                ),
                # wheel size vs bike weight
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr411'),
                    'value' => (1 / $this->input->post('v14')),
                    'criteria_2' => $this->input->post('cl111'),
                ),
                # wheel size vs folding method
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr416'),
                    'value' => (1 / $this->input->post('v24')),
                    'criteria_2' => $this->input->post('cl216'),
                ),
                # wheel size vs speed
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr420'),
                    'value' => (1 / $this->input->post('v34')),
                    'criteria_2' => $this->input->post('cl320'),
                ),

                // input from user
                # [4] vs [4]
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl423'),
                    'value' =>  $this->input->post('v44'),
                    'criteria_2' => $this->input->post('cr423'),
                ),
                # [4] vs [5]
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl424'),
                    'value' =>  $this->input->post('v45'),
                    'criteria_2' => $this->input->post('cr524'),
                ),
                # [4] vs [6]
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl425'),
                    'value' =>  $this->input->post('v46'),
                    'criteria_2' => $this->input->post('cr625'),
                ),


                // DESIGN

                // nilai perbandingan terbalik
                # design vs price
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr56'),
                    'value' => (1 / $this->input->post('v05')),
                    'criteria_2' => $this->input->post('cl06'),
                ),
                # design vs bike weight
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr512'),
                    'value' => (1 / $this->input->post('v15')),
                    'criteria_2' => $this->input->post('cl112'),
                ),
                # design vs folding method
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr517'),
                    'value' => (1 / $this->input->post('v25')),
                    'criteria_2' => $this->input->post('cl217'),
                ),
                # design vs speed
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr521'),
                    'value' => (1 / $this->input->post('v35')),
                    'criteria_2' => $this->input->post('cl321'),
                ),
                # design vs wheel size
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr524'),
                    'value' => (1 / $this->input->post('v45')),
                    'criteria_2' => $this->input->post('cl424'),
                ),

                // input from user
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl526'),
                    'value' =>  $this->input->post('v55'),
                    'criteria_2' => $this->input->post('cr526'),
                ),
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl527'),
                    'value' =>  $this->input->post('v56'),
                    'criteria_2' => $this->input->post('cr627'),
                ),

                // BRAND

                // nilai perbandingan terbalik
                # brand vs price
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr67'),
                    'value' => (1 / $this->input->post('v06')),
                    'criteria_2' => $this->input->post('cl07'),
                ),
                # brand vs bike weight
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr613'),
                    'value' => (1 / $this->input->post('v16')),
                    'criteria_2' => $this->input->post('cl113'),
                ),
                # brand vs folding method
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr618'),
                    'value' => (1 / $this->input->post('v26')),
                    'criteria_2' => $this->input->post('cl218'),
                ),
                # brand vs speed
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr622'),
                    'value' => (1 / $this->input->post('v36')),
                    'criteria_2' => $this->input->post('cl322'),
                ),
                # brand vs wheel size
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr625'),
                    'value' => (1 / $this->input->post('v46')),
                    'criteria_2' => $this->input->post('cl425'),
                ),
                # brand vs design
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cr627'),
                    'value' => (1 / $this->input->post('v56')),
                    'criteria_2' => $this->input->post('cl527'),
                ),

                // input from user
                array(
                    'id' => '',
                    'id_user' => $data['user']['id'],
                    'criteria_1' => $this->input->post('cl628'),
                    'value' =>  $this->input->post('v66'),
                    'criteria_2' => $this->input->post('cr628'),
                )
            );

            if ($query->num_rows() < 1) {
                $this->db->insert_batch('criteria_comparison', $data);
            } else {
                $data_2 = array(
                    // PRICE
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'price', 'criteria_2' => 'price'))->row_array()['id'],
                        'value' => $this->input->post('v00'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'price', 'criteria_2' => 'bike_weight'))->row_array()['id'],
                        'value' =>  $this->input->post('v01'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'price', 'criteria_2' => 'folding_method'))->row_array()['id'],
                        'value' =>  $this->input->post('v02'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'price', 'criteria_2' => 'speed'))->row_array()['id'],
                        'value' =>  $this->input->post('v03'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'price', 'criteria_2' => 'wheel_size'))->row_array()['id'],
                        'value' =>  $this->input->post('v04'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'price', 'criteria_2' => 'design'))->row_array()['id'],
                        'value' =>  $this->input->post('v05'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'price', 'criteria_2' => 'brand'))->row_array()['id'],
                        'value' =>  $this->input->post('v06'),
                    ),

                    // BIKE WEIGHT

                    // nilai perbandingan terbalik 
                    # weight vs price
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'bike_weight', 'criteria_2' => 'price'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v01')),
                    ),

                    // input from user
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'bike_weight', 'criteria_2' => 'bike_weight'))->row_array()['id'],
                        'value' =>  $this->input->post('v11'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'bike_weight', 'criteria_2' => 'folding_method'))->row_array()['id'],
                        'value' =>  $this->input->post('v12'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'bike_weight', 'criteria_2' => 'speed'))->row_array()['id'],
                        'value' =>  $this->input->post('v13'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'bike_weight', 'criteria_2' => 'wheel_size'))->row_array()['id'],
                        'value' =>  $this->input->post('v14'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'bike_weight', 'criteria_2' => 'design'))->row_array()['id'],
                        'value' =>  $this->input->post('v15'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'bike_weight', 'criteria_2' => 'brand'))->row_array()['id'],
                        'value' =>  $this->input->post('v16'),
                    ),

                    // FOLDING METHOD

                    // nilai perbandingan terbalik
                    # folding method vs price 
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'folding_method', 'criteria_2' => 'price'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v02')),
                    ),
                    # folding method vs bike weight
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'folding_method', 'criteria_2' => 'bike_weight'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v12')),
                    ),

                    // input from user
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'folding_method', 'criteria_2' => 'folding_method'))->row_array()['id'],
                        'value' =>  $this->input->post('v22'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'folding_method', 'criteria_2' => 'speed'))->row_array()['id'],
                        'value' =>  $this->input->post('v23'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'folding_method', 'criteria_2' => 'wheel_size'))->row_array()['id'],
                        'value' =>  $this->input->post('v24'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'folding_method', 'criteria_2' => 'design'))->row_array()['id'],
                        'value' =>  $this->input->post('v25'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'folding_method', 'criteria_2' => 'brand'))->row_array()['id'],
                        'value' =>  $this->input->post('v26'),
                    ),

                    // SPEED

                    // nilai perbandingan terbalik
                    # speed vs price 
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'speed', 'criteria_2' => 'price'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v03')),
                    ),
                    # speed vs bike weight
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'speed', 'criteria_2' => 'bike_weight'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v13')),
                    ),
                    # speed vs folding method
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'speed', 'criteria_2' => 'folding_method'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v23')),
                    ),

                    // input from user
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'speed', 'criteria_2' => 'speed'))->row_array()['id'],
                        'value' =>  $this->input->post('v33'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'speed', 'criteria_2' => 'wheel_size'))->row_array()['id'],
                        'value' =>  $this->input->post('v34'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'speed', 'criteria_2' => 'design'))->row_array()['id'],
                        'value' =>  $this->input->post('v35'),
                    ),
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'speed', 'criteria_2' => 'brand'))->row_array()['id'],
                        'value' =>  $this->input->post('v36'),
                    ),

                    // WHEEL SIZE

                    // nilai perbandingan terbalik
                    # wheel size vs price 
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'wheel_size', 'criteria_2' => 'price'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v04')),
                    ),
                    # wheel size vs bike weight
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'wheel_size', 'criteria_2' => 'bike_weight'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v14')),
                    ),
                    # wheel size vs folding method
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'wheel_size', 'criteria_2' => 'folding_method'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v24')),
                    ),
                    # wheel size vs speed
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'wheel_size', 'criteria_2' => 'speed'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v34')),
                    ),
                    # wheel size vs wheel size
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'wheel_size', 'criteria_2' => 'wheel_size'))->row_array()['id'],
                        'value' =>  $this->input->post('v44'),
                    ),
                    # wheel size vs design
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'wheel_size', 'criteria_2' => 'design'))->row_array()['id'],
                        'value' =>  $this->input->post('v45'),
                    ),
                    # wheel size vs brand
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'wheel_size', 'criteria_2' => 'brand'))->row_array()['id'],
                        'value' =>  $this->input->post('v46'),
                    ),

                    // DESIGN
                    // nilai perbandingan terbalik
                    # design vs price
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'design', 'criteria_2' => 'price'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v05')),
                    ),
                    # design vs bike weight
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'design', 'criteria_2' => 'bike_weight'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v15')),

                    ),
                    # design vs folding method
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'design', 'criteria_2' => 'folding_method'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v25')),

                    ),
                    # design vs speed
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'design', 'criteria_2' => 'speed'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v35')),

                    ),
                    # design vs wheel size
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'design', 'criteria_2' => 'wheel_size'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v45')),

                    ),
                    # design vs design
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'design', 'criteria_2' => 'design'))->row_array()['id'],
                        'value' =>  $this->input->post('v55'),
                    ),
                    # design vs brand
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'design', 'criteria_2' => 'brand'))->row_array()['id'],
                        'value' =>  $this->input->post('v56'),

                    ),
                    // BRAND

                    // nilai perbandingan terbalik
                    # brand vs price
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'brand', 'criteria_2' => 'price'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v06')),
                    ),
                    # brand vs bike weight
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'brand', 'criteria_2' => 'bike_weight'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v16')),
                    ),
                    # brand vs folding method
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'brand', 'criteria_2' => 'folding_method'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v26')),
                    ),
                    # brand vs speed
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'brand', 'criteria_2' => 'speed'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v36')),
                    ),
                    # brand vs wheel size
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'brand', 'criteria_2' => 'wheel_size'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v46')),
                    ),
                    # brand vs design
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'brand', 'criteria_2' => 'design'))->row_array()['id'],
                        'value' => (1 / $this->input->post('v56')),
                    ),
                    # brand vs brand
                    array(
                        'id' => $this->db->get_where('criteria_comparison', array('id_user' => $user_id, 'criteria_1' => 'brand', 'criteria_2' => 'brand'))->row_array()['id'],
                        'value' =>  $this->input->post('v66'),
                    )
                );
                $this->db->update_batch('criteria_comparison', $data_2, 'id');
            }
            redirect('input/criteria_result');
        }
    }

    public function criteria_result()
    {
        $data['title'] = 'Input Criteria Comparison Value';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $user_id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()['id'];

        $data['criteria'] = $this->db->get('criteria')->result_array();
        $data['analysis'] =  $this->db->get_where('criteria_comparison', array('id_user' => $user_id))->result_array();


        // SUM OF THE CRITERIA
        $query_price = "SELECT SUM(`value`) AS 'sum_price' from `criteria_comparison` WHERE `criteria_2`='price' AND `id_user`= '$user_id'";
        $query_weight = "SELECT SUM(`value`) AS 'sum_weight' from `criteria_comparison` WHERE `criteria_2`='bike_weight' AND `id_user`= '$user_id'";
        $query_folding = "SELECT SUM(`value`) AS 'sum_folding' from `criteria_comparison` WHERE `criteria_2`='folding_method' AND `id_user`= '$user_id'";
        $query_speed = "SELECT SUM(`value`) AS 'sum_speed' from `criteria_comparison` WHERE `criteria_2`='speed' AND `id_user`= '$user_id'";
        $query_wheel_size = "SELECT SUM(`value`) AS 'sum_wheel_size' from `criteria_comparison` WHERE `criteria_2`='wheel_size' AND `id_user`= '$user_id'";
        $query_design = "SELECT SUM(`value`) AS 'sum_design' from `criteria_comparison` WHERE `criteria_2`='design' AND `id_user`= '$user_id'";
        $query_brand = "SELECT SUM(`value`) AS 'sum_brand' from `criteria_comparison` WHERE `criteria_2`='brand' AND `id_user`= '$user_id'";

        $sum_price = $this->db->query($query_price)->result_array()[0]['sum_price'];
        $sum_weight = $this->db->query($query_weight)->result_array()[0]['sum_weight'];
        $sum_folding = $this->db->query($query_folding)->result_array()[0]['sum_folding'];
        $sum_speed = $this->db->query($query_speed)->result_array()[0]['sum_speed'];
        $sum_wheel_size = $this->db->query($query_wheel_size)->result_array()[0]['sum_wheel_size'];
        $sum_design = $this->db->query($query_design)->result_array()[0]['sum_design'];
        $sum_brand = $this->db->query($query_brand)->result_array()[0]['sum_brand'];

        if ($sum_price == null or $sum_weight == null or $sum_folding == null or $sum_speed == null or $sum_wheel_size == null or $sum_design == null or $sum_brand == null) {
            redirect('input/error');
        } else {
            $data['sum'] = array(
                $sum_price,
                $sum_weight,
                $sum_folding,
                $sum_speed,
                $sum_wheel_size,
                $sum_design,
                $sum_brand
            );

            // INSERT NORMALIZED DATA TO DB
            $criteria = $this->db->get_where('criteria_comparison', array('id_user' => $user_id))->result_array();

            $data['normalized_price'] = array();
            $data['normalized_bw'] = array();
            $data['normalized_folding'] = array();
            $data['normalized_speed'] = array();
            $data['normalized_wheel'] = array();
            $data['normalized_design'] = array();
            $data['normalized_brand'] = array();

            for ($i = 0; $i < sizeof($data['criteria']); $i++) {
                $data['normalized_price'][] = array(
                    'id' => $this->db->get_where('criteria_comparison', array(
                        'id_user' => $user_id,
                        'criteria_1' => $data['criteria'][0]['name'], 'criteria_2' => $data['criteria'][$i]['name']
                    ))->row_array()['id'],
                    'value' => $criteria[$i]['value'] / $data['sum'][$i]
                );

                $data['normalized_bw'][] = array(
                    'id' => $this->db->get_where('criteria_comparison', array(
                        'id_user' => $user_id,
                        'criteria_1' => $data['criteria'][1]['name'], 'criteria_2' => $data['criteria'][$i]['name']
                    ))->row_array()['id'],
                    'value' => $criteria[$i + 7]['value'] / $data['sum'][$i]
                );
                $data['normalized_folding'][] = array(
                    'id' => $this->db->get_where('criteria_comparison', array(
                        'id_user' => $user_id,
                        'criteria_1' => $data['criteria'][2]['name'], 'criteria_2' => $data['criteria'][$i]['name']
                    ))->row_array()['id'],
                    'value' => $criteria[$i + 14]['value'] / $data['sum'][$i]
                );
                $data['normalized_speed'][] = array(
                    'id' => $this->db->get_where('criteria_comparison', array(
                        'id_user' => $user_id,
                        'criteria_1' => $data['criteria'][3]['name'], 'criteria_2' => $data['criteria'][$i]['name']
                    ))->row_array()['id'],
                    'value' => $criteria[$i + 21]['value'] / $data['sum'][$i]
                );
                $data['normalized_wheel'][] = array(
                    'id' => $this->db->get_where('criteria_comparison', array(
                        'id_user' => $user_id,
                        'criteria_1' => $data['criteria'][4]['name'], 'criteria_2' => $data['criteria'][$i]['name']
                    ))->row_array()['id'],
                    'value' => $criteria[$i + 28]['value'] / $data['sum'][$i]
                );
                $data['normalized_design'][] = array(
                    'id' => $this->db->get_where('criteria_comparison', array(
                        'id_user' => $user_id,
                        'criteria_1' => $data['criteria'][5]['name'], 'criteria_2' => $data['criteria'][$i]['name']
                    ))->row_array()['id'],
                    'value' => $criteria[$i + 35]['value'] / $data['sum'][$i]
                );
                $data['normalized_brand'][] = array(
                    'id' => $this->db->get_where('criteria_comparison', array(
                        'id_user' => $user_id,
                        'criteria_1' => $data['criteria'][6]['name'], 'criteria_2' => $data['criteria'][$i]['name']
                    ))->row_array()['id'],
                    'value' => $criteria[$i + 42]['value'] / $data['sum'][$i]
                );
            }


            $nsum_c1 = ($data['normalized_price'][0]['value'] + $data['normalized_bw'][0]['value'] + $data['normalized_folding'][0]['value'] + $data['normalized_speed'][0]['value'] + $data['normalized_wheel'][0]['value'] + $data['normalized_design'][0]['value'] + $data['normalized_brand'][0]['value']);
            $nsum_c2 = ($data['normalized_price'][1]['value'] + $data['normalized_bw'][1]['value'] + $data['normalized_folding'][1]['value'] + $data['normalized_speed'][1]['value'] + $data['normalized_wheel'][1]['value'] + $data['normalized_design'][1]['value'] + $data['normalized_brand'][1]['value']);
            $nsum_c3 = ($data['normalized_price'][2]['value'] + $data['normalized_bw'][2]['value'] + $data['normalized_folding'][2]['value'] + $data['normalized_speed'][2]['value'] + $data['normalized_wheel'][2]['value'] + $data['normalized_design'][2]['value'] + $data['normalized_brand'][2]['value']);
            $nsum_c4 = ($data['normalized_price'][3]['value'] + $data['normalized_bw'][3]['value'] + $data['normalized_folding'][3]['value'] + $data['normalized_speed'][3]['value'] + $data['normalized_wheel'][3]['value'] + $data['normalized_design'][3]['value'] + $data['normalized_brand'][3]['value']);
            $nsum_c5 = ($data['normalized_price'][4]['value'] + $data['normalized_bw'][4]['value'] + $data['normalized_folding'][4]['value'] + $data['normalized_speed'][4]['value'] + $data['normalized_wheel'][4]['value'] + $data['normalized_design'][4]['value'] + $data['normalized_brand'][4]['value']);
            $nsum_c6 = ($data['normalized_price'][5]['value'] + $data['normalized_bw'][5]['value'] + $data['normalized_folding'][5]['value'] + $data['normalized_speed'][5]['value'] + $data['normalized_wheel'][5]['value'] + $data['normalized_design'][5]['value'] + $data['normalized_brand'][5]['value']);
            $nsum_c7 = ($data['normalized_price'][6]['value'] + $data['normalized_bw'][6]['value'] + $data['normalized_folding'][6]['value'] + $data['normalized_speed'][6]['value'] + $data['normalized_wheel'][6]['value'] + $data['normalized_design'][6]['value'] + $data['normalized_brand'][6]['value']);

            $data['norm_sum'] = array(
                'c1' => round($nsum_c1),
                'c2' => round($nsum_c2),
                'c3' => round($nsum_c3),
                'c4' => round($nsum_c4),
                'c5' => round($nsum_c5),
                'c6' => round($nsum_c6),
                'c7' => round($nsum_c7)
            );

            $weight_c1 = 0;
            $weight_c2 = 0;
            $weight_c3 = 0;
            $weight_c4 = 0;
            $weight_c5 = 0;
            $weight_c6 = 0;
            $weight_c7 = 0;

            for ($i = 0; $i < sizeof($data['criteria']); $i++) {
                $weight_c1 += $data['normalized_price'][$i]['value'];
                $weight_c2 += $data['normalized_bw'][$i]['value'];
                $weight_c3 += $data['normalized_folding'][$i]['value'];
                $weight_c4 += $data['normalized_speed'][$i]['value'];
                $weight_c5 += $data['normalized_wheel'][$i]['value'];
                $weight_c6 += $data['normalized_design'][$i]['value'];
                $weight_c7 += $data['normalized_brand'][$i]['value'];
            }

            $data['weight'] = array(
                ($weight_c1 / sizeof($data['criteria'])),
                ($weight_c2 / sizeof($data['criteria'])),
                ($weight_c3 / sizeof($data['criteria'])),
                ($weight_c4 / sizeof($data['criteria'])),
                ($weight_c5 / sizeof($data['criteria'])),
                ($weight_c6 / sizeof($data['criteria'])),
                ($weight_c7 / sizeof($data['criteria']))
            );

            // CALCULATING THE WSV 
            $wsv_c1 = 0;
            $wsv_c2 = 0;
            $wsv_c3 = 0;
            $wsv_c4 = 0;
            $wsv_c5 = 0;
            $wsv_c6 = 0;
            $wsv_c7 = 0;

            for ($i = 0; $i < sizeof($data['criteria']); $i++) {
                $wsv_c1 += ($data['analysis'][$i]['value'] * $data['weight'][$i]);
                $wsv_c2 += ($data['analysis'][$i + sizeof($data['criteria'])]['value'] * $data['weight'][$i]);
                $wsv_c3 += ($data['analysis'][$i + (2 * sizeof($data['criteria']))]['value'] * $data['weight'][$i]);
                $wsv_c4 += ($data['analysis'][$i + (3 * sizeof($data['criteria']))]['value'] * $data['weight'][$i]);
                $wsv_c5 += ($data['analysis'][$i + (4 * sizeof($data['criteria']))]['value'] * $data['weight'][$i]);
                $wsv_c6 += ($data['analysis'][$i + (5 * sizeof($data['criteria']))]['value'] * $data['weight'][$i]);
                $wsv_c7 += ($data['analysis'][$i + (6 * sizeof($data['criteria']))]['value'] * $data['weight'][$i]);
            }

            $data_wsv = array(
                $wsv_c1,
                $wsv_c2,
                $wsv_c3,
                $wsv_c4,
                $wsv_c5,
                $wsv_c6,
                $wsv_c7
            );

            // CALCULATING THE CV
            $consistency_vector = array();
            for ($i = 0; $i < sizeof($data['criteria']); $i++) {
                $consistency_vector[$i] = $data_wsv[$i] / $data['weight'][$i];
            }

            // CALCULATING LAMBDA MAX
            $lambda_max = array_sum($consistency_vector) / sizeof($data['criteria']);

            // CALCULATING CONSISTENCY INDEX
            $consistency_index = ($lambda_max - sizeof($data['criteria'])) / (sizeof($data['criteria']) - 1);

            // CALCULATING CONSISTENCY RATIO, 1.32 is the RC where number of element is 5.
            $consistency_ratio = $consistency_index / 1.32;

            $weight = array(
                'id_user' => $user_id,
                'price' => $data['weight'][0],
                'bike_weight' => $data['weight'][1],
                'folding_method' => $data['weight'][2],
                'speed' => $data['weight'][3],
                'wheel_size' => $data['weight'][4],
                'design' => $data['weight'][5],
                'brand' => $data['weight'][6],
            );

            $query_weight_all = $this->db->get_where('criteria_weight', array('id_user' => $user_id));

            if ($consistency_ratio >= 0 and $consistency_ratio <= (1 / 10)) {
                if ($query_weight_all->num_rows() < 1) {
                    $this->db->insert('criteria_weight', $weight);
                } else {
                    $this->db->where('id_user', $user_id);
                    $this->db->update('criteria_weight', $weight);
                }
            }

            $data['consistency'] = array(
                'lambda_max' => $lambda_max,
                'consistency_index' => $consistency_index,
                'consistency_ratio' => $consistency_ratio
            );

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('input/criteria_result', $data);
            $this->load->view('templates/footer');
        }
    }

    public function error()
    {
        $data['title'] = 'Criteria Comparisons Result';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['criteria'] = $this->db->get('criteria')->result_array();
        $user_id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()['id'];
        $data['alternatives'] = $this->db->get_where('alternatives_selected', array('id_user' => $user_id))->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('input/error', $data);
        $this->load->view('templates/footer');
    }
}
