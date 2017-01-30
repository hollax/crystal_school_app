<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Students
 *
 * @author Wakeel Ogunsanya
 */
class Students extends MY_Controller {
    
    
    
    public function add()
    {
        
        $this->load->library('smartytpl');
        
        
        $this->smartytpl->show('students/add');
        
    }
    
    public function edit( $id = '')
    {
        
        
    }
    
    
    public function view($id = '')
    {
        
    }
    
    
    public function delete( $id = '')
    {
        
    }
}
