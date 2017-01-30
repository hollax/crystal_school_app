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
class Parent_model extends My_Model {


    /**
     * User id's
     * @var int
     */
    public $id;

    /**
     * Dates
     * @var date/timestamp
     */

    public $create_time;

    public $edit_time;

    public $parent_fdob;

    public $parent_mdob;


    /**
     * Other infos
     * @var string
     */

    public $first_name;

    public $mid_name;

    public $parent_fullname;

    public $relation;

    public $parent_fathersocc;

    public $parent_address;

    public $address2;

    public $city;

    public $state;

    public $country;

    public $parent_phone;

    public $parent_phone2;

    public $parent_email;

    public $parent_alias;

    public $parent_mothersocc;

    public $user_id;

    public $parent_mothersemail;

    public $parent_mothersphone;


    protected $table = 'parent';

    protected $primary = 'id';


    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'id' => array(
            'type' => 'int',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        'first_name' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 100
        ),
        'mid_name' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 100
        ),
        'parent_fullname' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 300
        ),
        'parent_fdob' => array(
            'type' => 'date',
            'null' => true
        ),
        'relation' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 50
        ),
        'parent_fathersocc' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 500
        ),
        'parent_address' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 500
        ),
        'address2' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 500
        ),
        'city' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 100
        ),
        'state' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 50
        ),
        'country' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 50
        ),
        'parent_phone' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 20
        ),
        'parent_phone2' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 20
        ),
        'parent_email' => array(
            'type' => 'varchar',
            'DEFAULT' => 'NULL',
            'constraint' => 100
        ),
        'parent_alias' => array(
            'type' => 'varchar',
            'DEFAULT' => 'Mr and Mrs',
            'constraint' => 11
        ),
        'parent_mothersocc' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 500
        ),
        'parent_mdob' => array(
            'type' => 'date',
            'null' => true,
        ),
        'user_id' => array(
            'type' => 'int',
            'null' => true, 
            'constraint' => 11,
        ),
        'parent_mothersemail' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 100
        ),
        'parent_mothersphone' => array(
            'type' => 'varchar',
            'null' => true, 
            'constraint' => 100
        ),
        'create_time' => array(
            'type' => 'datetime',
            //'default' => 'CURRENT_TIMESTAMP'
        ),
        'edit_time' => array(
            'type' => 'datetime',
        )


    );


}
