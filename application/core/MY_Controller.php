<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author Wakeel Ogunsanya
 */
class MY_Controller extends CI_Controller {


    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        
        if(config_item('display_benchmark'))
        {   
            $this->output->enable_profiler(TRUE);
        }
    }


}
