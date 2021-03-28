<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Result extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Final Result';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user_id = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()['id'];
        $data['criteria'] = $this->db->get('criteria')->result_array();
        $data['alternatives'] = $this->db->get_where('alternatives_selected', array('id_user' => $user_id))->result_array();
        $criteria_weight = $this->db->get_where('criteria_weight', array('id_user' => $user_id))->row_array();

        $data['bikes'] = $this->db->get_where('alternatives_selected', array('id_user' => $user_id));
        $data['design'] = $this->db->get_where('design_comparison', array('id_user' => $user_id));
        $data['brand'] = $this->db->get_where('brand_comparison', array('id_user' => $user_id));

        // var_dump($data['bikes']->num_rows());

        if ($data['bikes']->num_rows() < 1 or $data['design']->num_rows() < 1 or $data['brand']->num_rows() < 1) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('result/error', $data);
            $this->load->view('templates/footer');
        } else {
            $price_all = array();
            $bw_all = array();
            $folding_all = array();
            $speed_all = array();
            $wheel_all = array();

            for ($i = 0; $i < sizeof($data['alternatives']); $i++) {
                $price_all[] = $data['alternatives'][$i]['price'];
                $bw_all[] = $data['alternatives'][$i]['bike_weight'];
                $folding_all[] = $data['alternatives'][$i]['folding_method'];
                $speed_all[] = $data['alternatives'][$i]['speed'];
                $wheel_all[] = $data['alternatives'][$i]['wheel_size'];
            }

            $min_price = min($price_all);
            $min_bw = min($bw_all);
            $min_wheel = min($wheel_all);
            $max_speed = max($speed_all);
            $max_folding = max($folding_all);

            $score = array();
            foreach ($data['alternatives'] as $a) {
                $score[] = (($min_price / $a['price']) * $criteria_weight['price']) +
                    (($min_bw / $a['bike_weight']) * $criteria_weight['bike_weight']) +
                    (($a['folding_method'] / $max_folding) * $criteria_weight['folding_method']) +
                    (($a['speed'] / $max_speed) * $criteria_weight['speed']) +
                    (($min_wheel / $a['wheel_size']) * $criteria_weight['wheel_size']) +
                    ($a['design'] * $criteria_weight['design']) +
                    ($a['brand'] * $criteria_weight['brand']);
            }

            $score_survey = array();
            for ($i = 0; $i < 5; $i++) {
                $score_survey[] = (($min_price / $data['alternatives'][$i]['price']) * $data['criteria'][0]['weight']) +
                    (($min_bw / $data['alternatives'][$i]['bike_weight']) * $data['criteria'][1]['weight']) +
                    (($data['alternatives'][$i]['folding_method'] / $max_folding) * $data['criteria'][2]['weight']) +
                    (($data['alternatives'][$i]['speed'] / $max_speed) * $data['criteria'][3]['weight']) +
                    (($min_wheel / $data['alternatives'][$i]['wheel_size']) * $data['criteria'][4]['weight']) +
                    ($data['alternatives'][$i]['design'] * $data['criteria'][5]['weight']) +
                    ($data['alternatives'][$i]['brand'] * $data['criteria'][6]['weight']);
            }

            $data['result'] = array(
                array(
                    'id_user' => $user_id,
                    'alternative' => $data['alternatives'][0]['name'],
                    'with_assessment' => $score[0],
                    'with_survey' => $score_survey[0]
                ),
                array(
                    'id_user' => $user_id,
                    'alternative' => $data['alternatives'][1]['name'],
                    'with_assessment' => $score[1],
                    'with_survey' => $score_survey[1]
                ),
                array(
                    'id_user' => $user_id,
                    'alternative' => $data['alternatives'][2]['name'],
                    'with_assessment' => $score[2],
                    'with_survey' => $score_survey[2]
                ),
                array(
                    'id_user' => $user_id,
                    'alternative' => $data['alternatives'][3]['name'],
                    'with_assessment' => $score[3],
                    'with_survey' => $score_survey[3]
                ),
                array(
                    'id_user' => $user_id,
                    'alternative' => $data['alternatives'][4]['name'],
                    'with_assessment' => $score[4],
                    'with_survey' => $score_survey[4]
                ),
            );

            $query_result = $this->db->get_where('result', array('id_user' => $user_id));
            if ($query_result->num_rows() < 1) {
                $this->db->insert_batch('result', $data['result']);
            } else {
                $data['result_2'] = array(
                    array(
                        'id' => $this->db->get_where('result', array(
                            'id_user' => $user_id,
                            'alternative' => $data['alternatives'][0]['name'],
                        ))->row_array()['id'],
                        'id_user' => $user_id,
                        'alternative' => $data['alternatives'][0]['name'],
                        'with_assessment' => $score[0],
                        'with_survey' => $score_survey[0]
                    ),
                    array(
                        'id' => $this->db->get_where('result', array(
                            'id_user' => $user_id,
                            'alternative' => $data['alternatives'][1]['name'],
                        ))->row_array()['id'],
                        'id_user' => $user_id,
                        'alternative' => $data['alternatives'][1]['name'],
                        'with_assessment' => $score[1],
                        'with_survey' => $score_survey[1]
                    ),
                    array(
                        'id' => $this->db->get_where('result', array(
                            'id_user' => $user_id,
                            'alternative' => $data['alternatives'][2]['name'],
                        ))->row_array()['id'],
                        'id_user' => $user_id,
                        'alternative' => $data['alternatives'][2]['name'],
                        'with_assessment' => $score[2],
                        'with_survey' => $score_survey[2]
                    ),
                    array(
                        'id' => $this->db->get_where('result', array(
                            'id_user' => $user_id,
                            'alternative' => $data['alternatives'][3]['name'],
                        ))->row_array()['id'],
                        'id_user' => $user_id,
                        'alternative' => $data['alternatives'][3]['name'],
                        'with_assessment' => $score[3],
                        'with_survey' => $score_survey[3]
                    ),
                    array(
                        'id' => $this->db->get_where('result', array(
                            'id_user' => $user_id,
                            'alternative' => $data['alternatives'][4]['name'],
                        ))->row_array()['id'],
                        'id_user' => $user_id,
                        'alternative' => $data['alternatives'][4]['name'],
                        'with_assessment' => $score[4],
                        'with_survey' => $score_survey[4]
                    ),
                );
                $this->db->update_batch('result', $data['result_2'], 'id');
            }

            $this->db->order_by('with_assessment', 'DESC');
            $data['final_score'] = $this->db->get_where('result', array('id_user' => $user_id))->result_array();

            $this->db->order_by('with_survey', 'DESC');
            $data['final_score_survey'] = $this->db->get_where('result', array('id_user' => $user_id))->result_array();

            $data['winner'] = array(
                'assessment' => $this->db->get_where('list_alternatives', array('name' => $data['final_score'][0]['alternative']))->row_array(),
                'survey' => $this->db->get_where('list_alternatives', array('name' => $data['final_score_survey'][0]['alternative']))->row_array(),
            );

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('result/index', $data);
            $this->load->view('templates/footer');
        }
    }
}
