<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment
 *
 * @author Wakeel Ogunsanya
 */
class Payment extends My_Model{
    
    public $payment_id;
    
    public $payment_tellerno;
    
    public $payment_amount;
    
    public $payment_payer;
    
    public $payment_dateadded;
    
    public $payment_dateedited;
    
    
    public $bank_id;
    
    public $USER_id;
    
    public $status_id;
    
    public $payment_total;
    
    protected $table  = 'payment';
    
    protected $primary = 'payment_id';
    
    protected $columns = array(
        'payment_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
         'payment_tellerno' => array(
            'type' => 'int',
            'constraint' => '11',
        ),
         'payment_amount' => array(
                'type' => 'int',
                'constraint' => '11',
        ),
        'payment_payer' => array(
                   'type' => 'int',
                   'constraint' => '11',
        ),
        'payment_dateadded' => array(
                   'type' => 'datetime',
        ),
        'payment_dateedited' => array(
                   'type' => 'datetime',
        ),
        'bank_id' => array(
                   'type' => 'int',
                    'constraint' => '11',
        ),
        'USER_id' => array(
                   'type' => 'int',
                    'constraint' => '11',
        ),
        'status_id' => array(
                   'type' => 'int',
                    'constraint' => '11',
        ),
        'payment_total' => array(
                   'type' => 'int',
                    'constraint' => '11',
        )
    );
    
}

