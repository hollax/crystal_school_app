<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author Wakeel Ogunsanya
 */
class MY_Controller extends CI_Controller {

    /**
     * used to specify stuffs to autoload
     * @var array
     */
    public $autoload ;

    /**
     * This is the layout file that will be loaded for dialogues (modals)
     *
     * @var string
     */
    protected $dialogue_layout_view = 'layouts/dialogue';
    /**
     * Regular layout view
     * @var string
     */
    protected $layout_view = 'layouts/page';
    /**
     * name of the file to load for the action view
     * This is loaded when $this->_view() is called
     * @var string
     */
    protected $action_view;
    /**
     * Current page title
     * @var string
     */
    protected $page_title ;

    /**
     * Controllers can
     * @var array
     */
    protected $alerts = array(

    );
    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('smartytpl');

        if(config_item('display_benchmark'))
        {
            $this->output->enable_profiler(TRUE);
        }

        $this->_autoLoad('helper');
        $this->_autoLoad('model');
        $this->_autoLoad('library');
    }

    /**
     *
     * @param string $type librray|model|helper
     * @param array $data
     */
    protected function _autoLoad($type)
    {
        if(!is_array($this->autoload))
        {
            return;
        }

        $data = element($type, $this->autoload);

        if(is_array($data) && count($data))
        {
            foreach ($data as $d)
            {
                $this->load->{$type}($d);
            }
        }
    }

    /**
     * Call this method in controller action which should be displayed as dialogue
     * This method switch the layout view to dialogue layout
     * The dialogue layout does not have a navigation
     */
    protected function _isDialogue()
    {
        $this->layout_view = $this->dialogue_layout_view;
    }

    protected function _alert($message , $type = 'info')
    {
        $this->alerts[] = array('type'=> $type , 'message' => $message);
    }

    public function _view(string $file, Array $data = null  )
    {


        $view = $this->smartytpl->show($file , $data , true);


        if($this->layout_view)
        {
             $this->smartytpl->show($this->layout_view , array(
                 'action_view' => $view ,
                 'page_title' => $this->page_title,
                 'alerts' => $this->alerts
            ) );
        }
        else
        {
             echo $view;
        }


    }


}
