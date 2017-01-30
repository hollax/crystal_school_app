<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Subject
 *
 * @author Wakeel Ogunsanya
 */
class Subject extends My_Model {
    
    
    
    public $subject_id;
    
    public $subject_name;
    
    
    public $subject_desc;
    
    
    public $smsname;


    public $compilsory;
    
    
    public $user_id;
    
    
    protected $primary = 'subject_id';
    
    
    protected $table = 'subject';
     
    
    protected $columns = array(
        'subject_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
         'subject_name' => array(
            'type' => 'varchar',
            'constraint' => '255',
        ),
         'subject_desc' => array(
            'type' => 'varchar',
            'constraint' => '255',
        ),
         'smsname' => array(
            'type' => 'varchar',
            'constraint' => '255',
        ),
         'compilsory' => array(
            'type' => 'tinyint',
            'constraint' => '2',
        ),
        'user_id' => array(
                   'type' => 'int',
                   'constraint' => '11',
        )
    );
  
   
}
