<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of School_fees_item
 *
 * @author Wakeel Ogunsanya
 */
class School_fees_item extends My_Model {
   
    
    public $item_id;
    
    
    public $name;
    
    public $type;
        
    public $description;
    
    protected $table = 'school_fees_item';
    
    
    protected $primary = 'item_id';
    
    protected $columns = array(
         'item_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'name' => array(
                'type' => 'varchar',
                'constraint' => '250'
        ),
        'type' => array(
                   'type' => 'tinyint',
                    'constraint' => '11'
        ),
        'description' => array(
                   'type' => 'varchar',
                    'constraint' => '1000'
        )
    );
}
