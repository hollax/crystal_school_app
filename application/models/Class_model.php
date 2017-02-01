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
class Class_model extends My_Model {


    public $id;

    public $name;

    public $SCHOOLARM_ID;

    public $user_id;

    public $create_time;

    public $edit_time;


    protected $table = 'department';

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

        'name' => array(
            'type' => 'varchar',
            'constraint' => '40',
        ),

        'SCHOOLARM_ID' => array(
            'type' => 'varchar',
            'constraint' => '20',
        ),

        'user_id' => array(
            'type' => 'int',
            'constraint' => '5',
            'default' => '7',
        ),

        'create_time' => array(
            'type' => 'datetime',
            //'default' => 'CURRENT_TIMESTAMP'
        ),
        'edit_time' => array(
            'type' => 'datetime',
            'null' => true
        ),

    );
    
    
    public function getArmName()
    {
        $this->load->model('school_arm' , 'school_arm_model');
        return $this->school_arm_model->getOne(array('schoolarm_id' => $this->SCHOOLARM_ID))->name ;
    }


}
