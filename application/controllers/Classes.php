<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Classes
 * 
 * @note The previoius school app named the class table as department
 * so dont get confused . The class table is meant for colass section
 *
 * @author Wakeel Ogunsanya
 */
class Classes extends MY_Controller {
    
    
    public $autoload = array(
        'model' => array(
            'class_model', 
            'class_section',
            'school_arm'
        )
    );

            
    public function index()
    {
        $this->page_title = 'Add Class';
        
        if($this->input->post('submit'))
        {
            $class = new Class_model($this->input->post());
            $class->save();
        }
        
        $this->_view('classes/all' , array(
          'classes' => $this->class_model->getAll(),
          'school_arms' => $this->school_arm->getAll(),
       ));
    }


    public function edit( $id = '')
    {
        $this->_view('classes/edit' , array(

         ));

    }


    public function view($id = '')
    {
        $this->_view('classes/view', array(

        ));
    }


    public function add_section( $class_id = '')
    {
        $this->page_title = 'Add Class Section';

        $this->_view('classes/add_section' , array(
          
       ));
    }


    public function edit_section( $class_id = '')
    {
        
        $this->_view('classes/edit_section' , array(

         ));

    }




    public function all_section( $id = '')
    {
        $this->_view('classes/all' , array(

         ));

    }

   
}
