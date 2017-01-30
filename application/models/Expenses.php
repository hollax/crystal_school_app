<?php 

class Expense extends My_Model {
    
    
    public $expenses_id;
    
    public $expenses_reason;
    
    public $expenses_amount;
    
    public $expenses_datetime;
    
    public $expensestype_id;
    
    public $staff_id;
    
    public $user_id;
 
    public $expenses_status;
    
    public $expenses_dateadded;


    protected $table = 'expenses';

    protected $primary = 'expenses_id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'expenses_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'expenses_reason' => array(
            'type' => 'varchar',
            'constraint' => 120,
            'null'=>true,
        ),
        'expenses_amount' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                ),
        'expenses_datetime' => array(
                    'type' => 'date',
                ),
        'expensestype_id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                ),
        'staff_id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'null'=>true,
                ),
        'user_id' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                ),
        'expenses_status' => array(
            'type' => 'INT',
            'constraint' => 2,
            'default'=>0
        ),
        'expenses_dateadded' => array(
            'type' => 'date',
        ),

);
}