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
class Messages extends My_Model {


    public $id;

    public $type;

    public $subject;

    public $message;

    public $create_time;

    public $edit_time;


    protected $table = 'message';

    protected $primary = 'id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),

        'type' => array(
            'type' => 'enum',
            'constraint' => 'TEXT', 'EMAIL',
        ),

        'subject' => array(
            'type' => 'varchar',
            'constraint' => '255',
        ),

        'message' => array(
            'type' => 'longtext',
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
