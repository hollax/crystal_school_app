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
class Expensestype extends My_Model {


    /**
     * User id's
     * @var int
     */
    public $expensestype_id;

    public $user_id;

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

    public $expensestype_name;


    protected $table = 'expensestype';

    protected $primary = 'expensestype_id';


    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'expensestype_id' => array(
            'type' => 'int',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        'expensestype_name' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 225
        ),
        'user_id' => array(
            'type' => 'int',
            'null' => true, 
            'constraint' => 11
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
