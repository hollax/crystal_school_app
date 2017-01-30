<?php 
/**
* 
*/
class Session extends My_Model{

    public $session_id;

    public $session_name;

    public $user_id;
    
    protected $table = 'session';
    
    protected $primary = 'session_id';
    
    protected $columns = array(
         'session_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
         'session_name' => array(
            'type' => 'varchar',
            'constraint' => '100',
            'null' => true 
        ),
         'user_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true 
        ),
    );
        
}
