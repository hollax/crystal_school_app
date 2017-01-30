<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Installer
 *
 * @author Wakeel Ogunsanya
 */
class Installer extends MY_Controller{

    public $site_installed = true;

    public function __construct() {
        parent::__construct();
        $this->config->load('app');

        $this->site_installed = config_item('site_installed');

    }



    public function setup()
    {


        if($this->site_installed)
        {
            //redirect();
        }
        
        $tables = array(
            'attendance',
            'bank',
            'class_model',
            'department',
            'expenses', 
            'expensestype', 
            'messages', 
            'payment', 
            'parent_model', 
            'period', 
            'paymentmode', 
            'schoolfees',
            'school_fees_item',
            'schoolfeespayment',
            'session',
            'staff',
            'staffbank',
            'subject',
            'setup',
            'term',
            'user'
        );
        
        
        $c = [];
        $dup = [];
        foreach ($tables as $table)
        {
            $this->load->model($table);
            $this->$table->createTable();
            
            $t =  $this->$table->getTable() ;
            
             if(in_array($t , $c)){
                 $dup[$table] = $t;
             }
            $c[] = $t;
            
           
        }
        
        //print_r($dup);

    }

   

    public function _view() {

        // load the layout and pass the action content
        $this->load->view('layouts/page' , array(
            'action_view' => 'Installing tables'
        ) );
    }


}
