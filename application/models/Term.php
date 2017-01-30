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
class Term extends My_Model {


    public $term_id;

    public $session_id;

    public $term_name;

    public $def;

    public $create_id;

    public $term_start;

    public $term_end;

    public $user_id;

    public $term_order;

    public $create_time;

    public $edit_time;


    protected $table = 'term';

    protected $primary = 'term_id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'term_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),

        'session_id' => array(
            'type' => 'varchar',
            'constraint' => '25',
        ),

        'term_name' => array(
            'type' => 'varchar',
            'constraint' => '25',
        ),

        'def' => array(
            'type' => 'tinyint',
            'constraint' => 1,
            'null' => true,
        ),

        'create_id' => array(
            'type' => 'varchar',
            'constraint' => '255',
        ),

        'term_start' => array(
            'type' => 'datetime',
            'null' => true,
        ),

        'term_end' => array(
            'type' => 'datetime',
            'null' => true,
        ),

        'user_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'default' => '7',
        ),

        'term_order' => array(
            'type' => 'int',
            'constraint' => '11',
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
