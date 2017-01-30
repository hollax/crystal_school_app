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
class Attendance extends My_Model {


    public $attendance_id;

    public $attendance_date;

    public $student_id;

    public $attendance_value;

    public $create_time;

    public $edit_time;


    protected $table = 'attendance';

    protected $primary = 'attendance_id';

    /**
     * Column definition
     *
     * @var array
     */
    protected $columns = array(
        'attendance_id' => array(
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'attendance_date' => array(
            'type' => 'datetime',
            'null' => true,
        ),
        'student_id' => array(
            'type' => 'int',
            'constraint' => '11',
           'null' => true
        ),
        'attendance_value' => array(
            'type' => 'int',
            'constraint' => 2,
            'null' => true
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
