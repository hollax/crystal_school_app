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
class Period extends My_Model {


    public $period_id;

    public $period_name;

    public $Duration;

    public $create_time;

    public $edit_time;


    protected $table = 'period';

    protected $primary = 'period_id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'period_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),

        'period_name' => array(
            'type' => 'varchar',
            'constraint' => '100',
        ),

        'Duration' => array(
            'type' => 'int',
            'constraint' => '4',
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
