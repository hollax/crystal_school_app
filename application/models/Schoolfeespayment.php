<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Wakeel Ogunsanya
 */
class Schoolfeespayment extends My_Model {


    public $schoolfeespayment_id;

    public $student_id;

    public $schoolfeespayment_datetime;

    public $amount;

    public $session_id;

    public $term_id;

    public $paymentmode_id;

    public $user_id;

    public $tellerno;

    public $activation;

    public $tellername;

    public $bank_id;

    public $schoolfeespayment_collectedby;

    public $note;

    public $create_time;

    public $edit_time;


    protected $table = 'schoolfeespayment';

    protected $primary = 'schoolfeespayment_id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'schoolfeespayment_id' => array(
            'type' => 'INT',
            'constraint' => 50,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),

        'student_id' => array(
            'type' => 'int',
            'constraint' => '50',
        ),

        'schoolfeespayment_datetime' => array(
            'type' => 'datetime',
        ),

        'amount' => array(
            'type' => 'int',
            'constraint' => '20',
        ),

        'session_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true,
        ),

        'term_id' => array(
            'type' => 'int',
            'constraint' => '11',
        ),

        'payment_id' => array(
            'type' => 'int',
            'constraint' => '11',
        ),

        'user_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true,
        ),

        'tellerno' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true,
        ),

        'activation' => array(
            'type' => 'int',
            'constraint' => '2',
            'default' => '0',
        ),

        'tellername' => array(
            'type' => 'text',
        ),

        'bank_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true,
        ),

        'schoolfeespayment_collectedby' => array(
            'type' => 'text',
        ),

        'note' => array(
            'type' => 'text',
        ),

        'create_time' => array(
            'type' => 'datetime',
            //'default' => 'CURRENT_TIMESTAMP'
        ),
        'edit_time' => array(
            'type' => 'datetime',
        ),

    );


}
