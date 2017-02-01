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
class School_arm extends My_Model {


    public $schoolarm_id;

    public $name;
    
    protected $table = 'schoolarm';

    protected $primary = 'schoolarm_id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'schoolarm_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'name' => array(
            'type' => 'varchar',
            'constraint' => '40',
        ),
    );

}
