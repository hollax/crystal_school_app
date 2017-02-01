<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Class
 *
 * @author Wakeel Ogunsanya
 */
class Class_section extends My_Model {

    public $class_id;
    
    
    public $class_name;
    
    /**
     * FOreign key of department.deparment_id
     * @var int 
     */
    public $department_id;
    
    public $staffstatus_id;
    
    public $user_id;
    
    public $teacher_id;

    
    protected $table = 'class';
    
    protected $primary = 'class_id';


    protected $columns = array(
        'class_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'class_name' => array(
            'type' => 'varchar',
            'constraint' => '255',
        ),
         'department_id' => array(
                'type' => 'int',
                'constraint' => '11',
        ),
         'staffstatus_id' => array(
                'type' => 'varchar',
                'constraint' => '255',
        ),
        'user_id' => array(
                'type' => 'int',
                'constraint' => '11',
        ),
        'teacher_id' => array(
                'type' => 'int',
                'constraint' => '5',
        ),
    );
    
   
}
