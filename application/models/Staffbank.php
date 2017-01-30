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
class Staffbank extends My_Model {


    /**
     * User id's
     * @var int
     */
    public $staffbank_id;

    public $bank_id;

    public $staff_id;

    /**
     * Dates
     * @var date/timestamp
     */

    public $create_time;

    public $edit_time;


    /**
     * Other infos
     * @var string
     */

    public $bank_Acc;

    public $bank_Accno;




    protected $table = 'staffbank';

    protected $primary = 'staffbank_id';


    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'staffbank_id' => array(
            'type' => 'int',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        'bank_id' => array(
            'type' => 'int', 
            'constraint' => 11
        ),
        'bank_Acc' => array(
            'type' => 'text',
            'constraint' => 100
        ),
        'staff_id' => array(
            'type' => 'int', 
            'constraint' => 11
        ),
        'bank_Accno' => array(
            'type' => 'text',
            'constraint' => 100
        ),
        'create_time' => array(
            'type' => 'datetime',
            //'default' => 'CURRENT_TIMESTAMP'
        ),
        'edit_time' => array(
            'type' => 'datetime'
        )


    );


}
