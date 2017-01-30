<?php



class Bank extends My_Model {
    
    
    public $bank_id;
    
    public $bank_name;
    
    public $bank_acc;
    
    public $bank_dateadded;
    
    public $bank_datedeleted;
    
    public $bank_accname;
    
    public $user_id;


     protected $table = 'bank';

    protected $primary = 'bank_id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'bank_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'bank_name' => array(
                    'type' => 'varchar',
                    'constraint' => 40,
        ),
        'bank_acc' => array(
                    'type' => 'INT',
                    'constraint' => 20,
        ),
        'bank_dateadded' => array(
                    'type' => 'datetime',
                ),
        'bank_datedeleted' => array(
                    'type' => 'datetime',
                ),
        'user_id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                     'default' =>1,
                ),
         );
    }





 