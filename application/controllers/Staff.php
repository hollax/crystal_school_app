<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Staff
 *
 * @author Wakeel Ogunsanya
 */
class Staff extends MY_Controller {



    public function add_staff()
    {

       // $this->load->model('department');


        $this->_view('staff/add_staff' , array(
               // 'departments'  => $this->department->getAll(),
                'states' => array(
                    'Lagos State',
                    'Ogun State',
                )
           ));

    }

    public function edit_staff( $id = '')
    {
        $this->_view('staff/edit_staff' , array(

         ));

    }


    public function view_staff($id = '')
    {
        $this->_view('staff/view_staff', array(

        ));
    }


    public function delete_staff( $id = '')
    {
      $this->_view('staff/delete_staff' , array(

         ));
    }

    public function all_staff( $id = '')
    {
        $this->_view('staff/all_staff' , array(

         ));

    }

    public function add_bank( $id = '')
    {
        $this->_view('staff/add_bank' , array(

         ));
    }

    public function view_bank($id = '')
    {
        $this->_view('staff/view_bank' , array(

         ));
        //$this->page_title = "view_bank";

    }

    public function delete_bank( $id = '')
    {
        $this->_view('staff/delete_staff' , array(

           ));
    }

    public function edit_bank( $id = '')
    {
        $this->_view('staff/edit_bank' , array(

         ));
    }

    public function all_bank( $id = '')
    {
        $this->_view('staff/all_bank' , array(

         ));
    }
}
