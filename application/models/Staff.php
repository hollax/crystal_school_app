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
class Staff extends My_Model {


    public $staff_id;

    public $staff_fname;

    public $staff_mname;

    public $staff_sname;

    public $staff_sex;

    public $staff_dept;

    public $staff_tel;

    public $staff_dob;

    public $staff_state;

    public $staff_lga;

    public $staff_nationality;

    public $staff_image;

    public $staff_email;

    public $Staff_address;

    public $staff_mstatus;

    public $Staff_employ_name;

    public $staff_employ_address;

    public $staff_exit_reason;

    public $staff_employ_from;

    public $staff_employ_to;

    public $best_food;

    public $hobby;

    public $other;

    public $primary_attend;

    public $primary_from;

    public $primary_to;

    public $primary_certificate;

    public $secondary_attend;

    public $secondary_from;

    public $secondary_to;

    public $secondary_certificate;

    public $university_attend;

    public $university_from;

    public $university_to;

    public $university_certificate;

    public $staff_salary;

    public $user_id;

    public $staff_qua;

    public $staff_Year_Joined_Establishment;

    public $bank_id;

    public $staff_bankno;

    public $staff_bankname;

    public $create_time;

    public $edit_time;


    protected $table = 'staff';

    protected $primary = 'staff_id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'staff_id' => array(
            'type' => 'INT',
            'constraint' => 50,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),

        'staff_fname' => array(
            'type' => 'varchar',
            'constraint' => '50',
        ),

        'staff_mname' => array(
            'type' => 'varchar',
            'constraint' => '50',
            'null' => true,
        ),

        'staff_sname' => array(
            'type' => 'varchar',
            'constraint' => '50',
        ),

        'staff_sex' => array(
            'type' => 'varchar',
            'constraint' => '50',
        ),

        'staff_dept' => array(
            'type' => 'int',
            'constraint' => '11',
        ),

        'staff_tel' => array(
            'type' => 'varchar',
            'constraint' => '11',
        ),

        'staff_dob' => array(
            'type' => 'date',
        ),

        'staff_state' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'staff_lga' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'staff_nationality' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null'=> true,
        ),

        'staff_image' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'staff_email' => array(
            'type' => 'varchar',
            'constraint' => '255',
        ),

        'Staff_address' => array(
            'type' => 'longtext',
        ),

        'staff_mstatus' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'staff_employ_name' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'staff_employ_address' => array(
            'type' => 'text',
            'null' => true,
        ),

        'staff_exit_reason' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'staff_employ_from' => array(
            'type' => 'date',
            'null' => true,
        ),

        'staff_employ_to' => array(
            'type' => 'date',
            'null' => true,
        ),

        'best_food' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'hobby' => array(
            'type' => 'text'
        ),

        'other' => array(
            'type' => 'text',
        ),

        'primary_attend' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'primary_from' => array(
            'type' => 'date',
            'null' => true,
        ),

        'primary_to' => array(
            'type' => 'date',
            'null' => true,
        ),

        'primary_certificate' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'secondary_attend' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'secondary_from' => array(
            'type' => 'date',
            'null' => true,
        ),

        'secondary_to' => array(
            'type' => 'date',
            'null' => true,
        ),

        'secondary_certificate' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'university_attend' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'university_from' => array(
            'type' => 'date',
            'null' => true,
        ),

        'university_to' => array(
            'type' => 'date',
            'null' => true,
        ),

        'university_certificate' => array(
            'type' => 'varchar',
            'constraint' => '255',
            'null' => true,
        ),

        'staff_salary' => array(
            'type' => 'int',
            'constraint' => '11',
        ),

        'user_id' => array(
            'type' => 'int',
            'constraint' => '11',
        ),

        'period_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'default' => '3',
        ),

        'staff_qua' => array(
            'type' => 'text',
        ),

        'staff_Year_Joined_Establishment' => array(
            'type' => 'varchar',
            'constraint' => '150',
            'null' => true,
        ),

        'bank_id' => array(
            'type' => 'int',
            'constraint' => '11',
            'null' => true,

        ),

        'staff_bankno' => array(
            'type' => 'varchar',
            'constraint' => '200',
            'null' => true,
        ),

        'staff_bankname' => array(
            'type' => 'varchar',
            'constraint' => '150',
            'null' => true,
        ),

        'create_time' => array(

            'type' => 'datetime',
            //'default' => 'CURRENT_TIMESTAMP'
        ),

        'edit_time' => array(
            'type' => 'datetime',
        ),

    );


}
