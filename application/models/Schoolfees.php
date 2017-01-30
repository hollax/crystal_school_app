<?php

/**
* 
*/
class schoolfees extends My_Model{
	
	public $schoolfees_id;
	
	public $department_id;
	
	public $schoolfees_amount;
	
	public $term_id;
	
	public $user_id;


 protected $table = 'schoolfees';

    protected $primary = 'schoolfees_id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'schoolfees_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'department_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            
        ),
'schoolfees_amount' => array(
            'type' => 'INT',
            'constraint' => 11,
            
        ),
'term_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            
        ),
'user_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'default'=>7
        ),

    );


}





