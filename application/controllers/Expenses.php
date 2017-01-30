<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Expenses
 *
 * @author Wakeel Ogunsanya
 */
class Expenses extends MY_Controller {


    public function add()
    {
        $this->load->model('expenses_model');
        $this->load->model('expensestype');
        $success = false ;
        
        $this->load->library('smartytpl');
        
        $types = $this->expensestype->getAll();
        
        if($this->input->post('submit'))
        {
            $expense = new Expenses_model($this->input->post());
            $expense->expenses_dateadded = date('y m d');
            $expense->save();
            $success = true;
        }
        
        $this->smartytpl->show('expenses/add' , array(
            'expense_types' => $types,
            'success' => $success
        ));
    }

    public function edit($edit = '')
    {

    }

    public function add_type()
    {

    }

    public function edit_type($id = '')
    {

    }

    public function manage_type()
    {

    }



}
