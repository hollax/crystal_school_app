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

    public $autoload = array(
        'model' => array(
            'expenses_model',
            'expensestype'
        )

    );

    public function add()
    {
        $this->page_title = 'Add Expense';
        $success = false ;

        $types = $this->expensestype->getAll();

        if($this->input->post('submit'))
        {
            $expense = new Expenses_model($this->input->post());
            $expense->expenses_dateadded = date('y m d');
            $expense->save();
            $success = true;
        }

        $this->_view('expenses/add' , array(
            'expense_types' => $types,
            'success' => $success
        ));
    }

    public function edit($edit = '')
    {
          $this->load->model('expenses_model');

           $this->_view('expenses/edit' , array(

            ));
    }

    public function expense_types()
    {

        $this->page_title = 'Expense Type';

        if($this->input->post('submit'))
        {
            $expense_type = new Expensestype($this->input->post());
            $expense_type->user_id = 1;
            $expense_type->save();
            $this->_alert("Expense type added successfully");
        }

        $this->_view('expenses/expense_types', array(
            'expense_types' => $this->expensestype->getAll()
        ));
    }

    public function edit_type($id = '')
    {

        $this->_isDialogue();

        $expense_type = $this->expensestype->getOne(array(
            'expensestype_id' => $id
        ));

        if(!$expense_type->expensestype_id)
        {
            show_error("Expense type doesnt exists!");
        }
        if($this->input->post('submit'))
        {
            $expense_type->setProperties($this->input->post());
            $expense_type->save();
            $this->_alert("Expense type updated!");
        }

        $this->_view('expenses/edit_type' , array(
            'expense_type' => $expense_type
        ));
    }

    public function manage_type()
    {

    }



    public function manage_expenses()
    {
        $this->page_title = 'Manage Expense Type';

        $types = $this->expenses_model->getAll();

        if($this->input->post('submit'))
        {
            $expense = new Expenses_model($this->input->post());
            $expense->expenses_dateadded = date('y m d');
            $expense->save();
            $this->_alert("Expense successfully managed");
        }

        $this->_view('expenses/manage_expenses' , array(
            'expenses' => $this->expenses_model->getAll(),
            'expense_types' => $this->expensestype->getAll()
        ));


    }


    public function edit_expenses($id = '')
    {

        $this->_isDialogue();

        $expenses_model = $this->expenses_model->getOne(array(
            'expenses_id' => $id
        ));

        if(!$expenses_model->expenses_id)
        {
            show_error("Expense does not exist!");
        }
        if($this->input->post('submit'))
        {
            $expenses_model->setProperties($this->input->post());
            $expenses_model->save();
            $this->_alert("Expense updated!");
        }

        $this->_view('expenses/edit_expenses' , array(
            'expenses' => $expenses,
            'expense_type' => $expense_type
        ));
    }




}
