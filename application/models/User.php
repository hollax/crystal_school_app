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
class User extends My_Model {


    /**
     * User id's
     * @var int
     */
    public $user_id;

    public $staff_id;

    public $setup_id;

    /**
     * Dates
     * @var date/timestamp
     */

    public $create_time;

    public $edit_time;

    public $user_lastloggedin;


    /**
     * Other infos
     * @var string
     */

    public $user_name;

    public $user_password;

    public $user_priveledge;


    protected $table = 'user';

    protected $primary = 'user_id';


    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'user_id' => array(
            'type' => 'int',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        'user_name' => array(
            'type' => 'varchar',
            'constraint' => 30
        ),
        'user_password' => array(
            'type' => 'varchar',
            'constraint' => 30
        ),
        'user_lastloggedin' => array(
            'type' => 'datetime'
        ),
        'user_privilege' => array(
            'type' => 'varchar',
            'constraint' => 20
        ),
        'staff_id' => array(
            'type' => 'int',
            'null' => true, 
            'constraint' => 11
        ),
        'setup_id' => array(
            'type' => 'int',
            'default' => '1', 
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
