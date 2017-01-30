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
class Setup extends My_Model {


    /**
     * User id's
     * @var int
     */
    public $setup_id;

    public $term_id;

    public $sms_id;

    /**
     * Dates
     * @var date/timestamp
     */

    public $create_time;

    public $edit_time;

    public $setup_bday_batch;

    public $setup_sms_batchfile;


    /**
     * Other infos
     * @var string
     */

    public $setup_name;

    public $setup_value;

    public $setup_logo;

    public $setup_smsname;

    public $setup_phone;

    public $client_id;

    public $pack_id;

    public $setup_address;

    public $setup_slogan;

    public $setup_senderid;

    public $setup_smsusername;

    public $setup_smspassword;

    public $setup_dbusername;

    public $setup_bstaff;

    public $setup_bstudent;



    protected $table = 'setup';

    protected $primary = 'setup_id';


    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'setup_id' => array(
            'type' => 'int',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
        'term_id' => array(
            'type' => 'int', 
            'constraint' => 11,
        ),
        'sms_id' => array(
            'type' => 'int',
            'constraint' => 11
        ),
        'setup_name' => array(
            'type' => 'varchar',
            'constraint' => 225
        ),
        'setup_value' => array(
            'type' => 'varchar',
            'constraint' => 225
        ),
        'setup_logo' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 225
        ),
        'setup_smsname' => array(
            'type' => 'varchar',
            'constraint' => 225
        ),
        'setup_phone' => array(
            'type' => 'varchar',
            'constraint' => 225
        ),
        'client_id' => array(
            'type' => 'varchar',
            'constraint' => 225
        ),
        'pack_id' => array(
            'type' => 'varchar',
            'constraint' => 225
        ),
        'setup_address' => array(
            'type' => 'text'
        ),
        'setup_slogan' => array(
            'type' => 'text'
        ),
        'setup_senderid' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 100
        ),
        'setup_smsusername' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 100
        ),
        'setup_smspassword' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 100
        ),
        'setup_dbusername' => array(
            'type' => 'varchar',
            'null' => true,
            'constraint' => 100
        ),
        'setup_bstaff' => array(
            'type' => 'text'
        ),
        'setup_bstudent' => array(
            'type' => 'text'
        ),
        'setup_bday_batch' => array(
            'type' => 'datetime',
            'null' => true
        ),
        'setup_sms_batchfile' => array(
            'type' => 'datetime',
            'null' => true
        ),
        'create_time' => array(
            'type' => 'datetime',
            //'default' => 'CURRENT_TIMESTAMP'
        ),
        'edit_time' => array(
            'type' => 'datetime'
        )


    );


}
