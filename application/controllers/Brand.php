<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brand extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function compare()
    {
        $data['title'] = 'Compare the brands of the bikes';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['criteria'] = $this->db->get('criteria')->result_array();
        $user_id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()['id'];
        $data['alternatives'] = $this->db->get_where('alternatives_selected', array('id_user' => $user_id))->result_array();

        $alternatives = $this->db->get_where('alternatives_selected', array('id_user' => $user_id))->result_array();

        $data['bikes'] = array(
            $this->db->get_where('list_alternatives', array('name' => $alternatives[0]['name']))->row_array(),
            $this->db->get_where('list_alternatives', array('name' => $alternatives[1]['name']))->row_array(),
            $this->db->get_where('list_alternatives', array('name' => $alternatives[2]['name']))->row_array(),
            $this->db->get_where('list_alternatives', array('name' => $alternatives[3]['name']))->row_array(),
            $this->db->get_where('list_alternatives', array('name' => $alternatives[4]['name']))->row_array(),
        );

        $this->form_validation->set_rules('cl01', 'Criteria 1', 'required');
        $this->form_validation->set_rules('v00', 'Value', 'required');
        $this->form_validation->set_rules('cr01', 'Criteria 2', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('brand/brand_input', $data);
            $this->load->view('templates/footer');
        } else {

            $data = array(
                // ALTERNATIVE 1
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl01'),
                    'value' => $this->input->post('v00'),
                    'alternative_2' => $this->input->post('cr01')
                ),
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl02'),
                    'value' =>  $this->input->post('v01'),
                    'alternative_2' => $this->input->post('cr12'),
                ),
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl03'),
                    'value' =>  $this->input->post('v02'),
                    'alternative_2' => $this->input->post('cr23'),
                ),
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl04'),
                    'value' =>  $this->input->post('v03'),
                    'alternative_2' => $this->input->post('cr34'),
                ),
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl05'),
                    'value' =>  $this->input->post('v04'),
                    'alternative_2' => $this->input->post('cr45'),
                ),

                // ALTERNATIVE 2
                // nilai perbandingan terbalik 
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr12'),
                    'value' => (1 / $this->input->post('v01')),
                    'alternative_2' => $this->input->post('cl02'),
                ),

                // input from user
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl16'),
                    'value' =>  $this->input->post('v11'),
                    'alternative_2' => $this->input->post('cr16'),
                ),
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl17'),
                    'value' =>  $this->input->post('v12'),
                    'alternative_2' => $this->input->post('cr27'),
                ),
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl18'),
                    'value' =>  $this->input->post('v13'),
                    'alternative_2' => $this->input->post('cr38'),
                ),
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl19'),
                    'value' =>  $this->input->post('v14'),
                    'alternative_2' => $this->input->post('cr49'),
                ),

                // ALTERNATIVE 3
                // nilai perbandingan terbalik
                # folding method vs price 
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr23'),
                    'value' => (1 / $this->input->post('v02')),
                    'alternative_2' => $this->input->post('cl03'),
                ),
                # folding method vs bike weight
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr27'),
                    'value' => (1 / $this->input->post('v12')),
                    'alternative_2' => $this->input->post('cl17'),
                ),

                // input from user
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl210'),
                    'value' =>  $this->input->post('v22'),
                    'alternative_2' => $this->input->post('cr210'),
                ),
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl211'),
                    'value' =>  $this->input->post('v23'),
                    'alternative_2' => $this->input->post('cr311'),
                ),
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl212'),
                    'value' =>  $this->input->post('v24'),
                    'alternative_2' => $this->input->post('cr412'),
                ),

                // ALTERNATIVE 4 
                // nilai perbandingan terbalik
                # speed vs price 
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr34'),
                    'value' => (1 / $this->input->post('v03')),
                    'alternative_2' => $this->input->post('cl04'),
                ),
                # speed vs bike weight
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr38'),
                    'value' => (1 / $this->input->post('v13')),
                    'alternative_2' => $this->input->post('cl18'),
                ),
                # speed vs folding method
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr311'),
                    'value' => (1 / $this->input->post('v23')),
                    'alternative_2' => $this->input->post('cl211'),
                ),

                // input from user
                # [3] vs [3]
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl313'),
                    'value' =>  $this->input->post('v33'),
                    'alternative_2' => $this->input->post('cr313'),
                ),
                # [3] vs [4]
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl314'),
                    'value' =>  $this->input->post('v34'),
                    'alternative_2' => $this->input->post('cr414'),
                ),

                // ALTERNATIVE 5
                // nilai perbandingan terbalik
                # wheel size vs price 
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr45'),
                    'value' => (1 / $this->input->post('v04')),
                    'alternative_2' => $this->input->post('cl05'),
                ),
                # wheel size vs bike weight
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr49'),
                    'value' => (1 / $this->input->post('v14')),
                    'alternative_2' => $this->input->post('cl19'),
                ),
                # wheel size vs folding method
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr412'),
                    'value' => (1 / $this->input->post('v24')),
                    'alternative_2' => $this->input->post('cl212'),
                ),
                # wheel size vs speed
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cr414'),
                    'value' => (1 / $this->input->post('v34')),
                    'alternative_2' => $this->input->post('cl314'),
                ),

                // input from user
                # [4] vs [4]
                array(
                    'id_user' => $data['user']['id'],
                    'alternative_1' => $this->input->post('cl415'),
                    'value' =>  $this->input->post('v44'),
                    'alternative_2' => $this->input->post('cr415'),
                ),
            );

            $query = $this->db->get_where('brand_comparison', array('id_user' => $user_id));

            if ($query->num_rows() < 1) {
                $this->db->insert_batch('brand_comparison', $data);
            } else {
                $delete_query = "DELETE FROM `brand_comparison` WHERE `id_user` = $user_id";
                $this->db->query($delete_query);

                $this->db->insert_batch('brand_comparison', $data);
            }

            redirect('brand/comparison_result');
        }
    }

    public function comparison_result()
    {
        $data['title'] = 'Pairwise Comparison of Brand Result';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $user_id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()['id'];

        $data['alternatives'] = $this->db->get_where('alternatives_selected', array('id_user' => $user_id))->result_array();

        $query_comparison = "SELECT * FROM `brand_comparison` WHERE `id_user`='$user_id' ORDER BY `id` ASC";
        $data['comparison'] = $this->db->query($query_comparison)->result_array();

        $alternatives = $this->db->get_where('alternatives_selected', array('id_user' => $user_id))->result_array();

        $alternative_1 = $alternatives[0]['name'];
        $alternative_2 = $alternatives[1]['name'];
        $alternative_3 = $alternatives[2]['name'];
        $alternative_4 = $alternatives[3]['name'];
        $alternative_5 = $alternatives[4]['name'];

        // SUM OF THE CRITERIA

        $query_a1 = "SELECT SUM(`value`) AS 'sum' from `brand_comparison` WHERE `alternative_2`= '$alternative_1' AND `id_user`= '$user_id'";
        $query_a2 = "SELECT SUM(`value`) AS 'sum' from `brand_comparison` WHERE `alternative_2`= '$alternative_2' AND `id_user`= '$user_id'";
        $query_a3 = "SELECT SUM(`value`) AS 'sum' from `brand_comparison` WHERE `alternative_2`= '$alternative_3' AND `id_user`= '$user_id'";
        $query_a4 = "SELECT SUM(`value`) AS 'sum' from `brand_comparison` WHERE `alternative_2`= '$alternative_4' AND `id_user`= '$user_id'";
        $query_a5 = "SELECT SUM(`value`) AS 'sum' from `brand_comparison` WHERE `alternative_2`= '$alternative_5' AND `id_user`= '$user_id'";

        $sum_a1 = $this->db->query($query_a1)->result_array()[0]['sum'];
        $sum_a2 = $this->db->query($query_a2)->result_array()[0]['sum'];
        $sum_a3 = $this->db->query($query_a3)->result_array()[0]['sum'];
        $sum_a4 = $this->db->query($query_a4)->result_array()[0]['sum'];
        $sum_a5 = $this->db->query($query_a5)->result_array()[0]['sum'];

        if ($sum_a1 == null or $sum_a2 == null or $sum_a3 == null or $sum_a4 == null or $sum_a5 == null) {
            redirect('brand/error');
        } else {

            $data['sum'] = array(
                $sum_a1,
                $sum_a2,
                $sum_a3,
                $sum_a4,
                $sum_a5
            );

            // INSERT NORMALIZED DATA TO DB

            $data['normalized_a1'] = array();
            $data['normalized_a2'] = array();
            $data['normalized_a3'] = array();
            $data['normalized_a4'] = array();
            $data['normalized_a5'] = array();

            for ($i = 0; $i < 5; $i++) {
                $data['normalized_a1'][] = array(
                    'id' => $this->db->get_where('brand_comparison', array(
                        'id_user' => $user_id,
                        'alternative_1' => $alternative_1,
                        'alternative_2' => $alternatives[$i]['name']
                    ))->row_array()['id'],
                    'value' => $data['comparison'][$i]['value'] / $data['sum'][$i]
                );
                $data['normalized_a2'][] = array(
                    'id' => $this->db->get_where('brand_comparison', array(
                        'id_user' => $user_id,
                        'alternative_1' => $alternative_2,
                        'alternative_2' => $alternatives[$i]['name']
                    ))->row_array()['id'],
                    'value' => $data['comparison'][$i + 5]['value'] / $data['sum'][$i]
                );
                $data['normalized_a3'][] = array(
                    'id' => $this->db->get_where('brand_comparison', array(
                        'id_user' => $user_id,
                        'alternative_1' => $alternative_3,
                        'alternative_2' => $alternatives[$i]['name']
                    ))->row_array()['id'],
                    'value' => $data['comparison'][$i + 10]['value'] / $data['sum'][$i]
                );
                $data['normalized_a4'][] = array(
                    'id' => $this->db->get_where('brand_comparison', array(
                        'id_user' => $user_id,
                        'alternative_1' => $alternative_4,
                        'alternative_2' => $alternatives[$i]['name']
                    ))->row_array()['id'],
                    'value' => $data['comparison'][$i + 15]['value'] / $data['sum'][$i]
                );
                $data['normalized_a5'][] = array(
                    'id' => $this->db->get_where('brand_comparison', array(
                        'id_user' => $user_id,
                        'alternative_1' => $alternative_5,
                        'alternative_2' => $alternatives[$i]['name']
                    ))->row_array()['id'],
                    'value' => $data['comparison'][$i + 20]['value'] / $data['sum'][$i]
                );
            }

            $nsum_a1 = ($data['normalized_a1'][0]['value'] + $data['normalized_a2'][0]['value'] + $data['normalized_a3'][0]['value'] + $data['normalized_a4'][0]['value'] + $data['normalized_a5'][0]['value']);
            $nsum_a2 = ($data['normalized_a1'][1]['value'] + $data['normalized_a2'][1]['value'] + $data['normalized_a3'][1]['value'] + $data['normalized_a4'][1]['value'] + $data['normalized_a5'][1]['value']);
            $nsum_a3 = ($data['normalized_a1'][2]['value'] + $data['normalized_a2'][2]['value'] + $data['normalized_a3'][2]['value'] + $data['normalized_a4'][2]['value'] + $data['normalized_a5'][2]['value']);
            $nsum_a4 = ($data['normalized_a1'][3]['value'] + $data['normalized_a2'][3]['value'] + $data['normalized_a3'][3]['value'] + $data['normalized_a4'][3]['value'] + $data['normalized_a5'][3]['value']);
            $nsum_a5 = ($data['normalized_a1'][4]['value'] + $data['normalized_a2'][4]['value'] + $data['normalized_a3'][4]['value'] + $data['normalized_a4'][4]['value'] + $data['normalized_a5'][4]['value']);

            $data['norm_sum'] = array(
                'a1' => round($nsum_a1),
                'a2' => round($nsum_a2),
                'a3' => round($nsum_a3),
                'a4' => round($nsum_a4),
                'a5' => round($nsum_a5)
            );

            $weight_a1 = 0;
            $weight_a2 = 0;
            $weight_a3 = 0;
            $weight_a4 = 0;
            $weight_a5 = 0;

            for ($i = 0; $i < sizeof($data['alternatives']); $i++) {
                $weight_a1 += $data['normalized_a1'][$i]['value'];
                $weight_a2 += $data['normalized_a2'][$i]['value'];
                $weight_a3 += $data['normalized_a3'][$i]['value'];
                $weight_a4 += $data['normalized_a4'][$i]['value'];
                $weight_a5 += $data['normalized_a5'][$i]['value'];
            }

            $data['weight'] = array(
                ($weight_a1 / sizeof($data['alternatives'])),
                ($weight_a2 / sizeof($data['alternatives'])),
                ($weight_a3 / sizeof($data['alternatives'])),
                ($weight_a4 / sizeof($data['alternatives'])),
                ($weight_a5 / sizeof($data['alternatives']))
            );

            // CALCULATING THE WSV 
            $wsv_a1 = 0;
            $wsv_a2 = 0;
            $wsv_a3 = 0;
            $wsv_a4 = 0;
            $wsv_a5 = 0;

            for ($i = 0; $i < sizeof($data['alternatives']); $i++) {
                $wsv_a1 += ($data['comparison'][$i]['value'] * $data['weight'][$i]);
                $wsv_a2 += ($data['comparison'][$i + 5]['value'] * $data['weight'][$i]);
                $wsv_a3 += ($data['comparison'][$i + 10]['value'] * $data['weight'][$i]);
                $wsv_a4 += ($data['comparison'][$i + 15]['value'] * $data['weight'][$i]);
                $wsv_a5 += ($data['comparison'][$i + 20]['value'] * $data['weight'][$i]);
            }

            $data_wsv = array(
                $wsv_a1,
                $wsv_a2,
                $wsv_a3,
                $wsv_a4,
                $wsv_a5
            );

            // CALCULATING THE CV
            $consistency_vector = array();
            for ($i = 0; $i < 5; $i++) {
                $consistency_vector[$i] = $data_wsv[$i] / $data['weight'][$i];
            }

            // CALCULATING LAMBDA MAX, 5 IS NUMBER OF ELEMENTS
            $lambda_max = array_sum($consistency_vector) / sizeof($data['alternatives']);

            // CALCULATING CONSISTENCY INDEX
            $consistency_index = ($lambda_max - sizeof($data['alternatives'])) / (sizeof($data['alternatives']) - 1);

            // CALCULATING CONSISTENCY RATIO, 1.32 is the RC where number of element is 5.
            $consistency_ratio = $consistency_index / 1.12;

            $brand_weight = array();
            for ($i = 0; $i < 5; $i++) {
                $brand_weight[] = array(
                    'id' => $this->db->get_where('alternatives_selected', array('id_user' => $user_id, 'name' => $data['alternatives'][$i]['name']))->row_array()['id'],
                    'brand' => $data['weight'][$i]
                );
            }

            if ($consistency_ratio >= 0 and $consistency_ratio <= (1 / 10)) {
                $this->db->update_batch('alternatives_selected', $brand_weight, 'id');
            }

            $data['consistency'] = array(
                'lambda_max' => $lambda_max,
                'consistency_index' => $consistency_index,
                'consistency_ratio' => $consistency_ratio
            );

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('brand/brand_result', $data);
            $this->load->view('templates/footer');
        }
    }

    // called when user changes the alternatives and has not set
    // the pairwise comparison, but access result page
    public function error()
    {
        $data['title'] = 'Brand Comparisons Result';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['criteria'] = $this->db->get('criteria')->result_array();
        $user_id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()['id'];
        $data['alternatives'] = $this->db->get_where('alternatives_selected', array('id_user' => $user_id))->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('brand/error', $data);
        $this->load->view('templates/footer');
    }
}
