<?php 
/**
* 
*/
class paymentmode extends My_Model{

    public $paymentmode_id;

    public $paymentmode_name;

    public $user_id;
    
    protected $table = 'paymentmode';
    
    protected $primary = 'paymentmode_id';
    
    protected $columns = array(
         'paymentmode_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
         'paymentmode_name' => array(
            'type' => 'varchar',
            'constraint' => '255',
        ),
         'user_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true 
        ),
    );
        
}

