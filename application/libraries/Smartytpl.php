<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Smartytpl library. Extends default Smarty class
 * for easy integration into CodeIgniter.
 *
 * @author  Eric 'Aken' Roberts <eric@cryode.com>
 * @link    https://github.com/cryode/CodeIgniter_Smarty
 * @version 1.1.0
 * @license MIT
 */

// Require the Smarty class from our third_party directory.
require_once APPPATH . 'third_party/Smarty/Smarty.class.php';

class Smartytpl extends Smarty {


        protected $_loadedTemplates = array();

        protected $_plugins_registered = false;


        protected $_cache = false ;
    /**
	 * Constructor!
	 *
	 * @access	public
	 * @return	void
	 */
	public function __construct()
	{
            parent::__construct();

            // Get CodeIgniter super object.
            $CI =& get_instance();

            // Get Smarty config items.
            $CI->load->config('smarty_settings');

            // caching this should be set once

            $this->_cache = $CI->config->item('smarty_enable_cachng');

            // should incase a whitespace present
            $this->auto_literal = $CI->config->item('smarty_auto_literal');
            //$this->setCompileCheck($CI->config->item('smarty_compile_check'));
            $this->debugging_ctrl = ($CI->input->server('SERVER_NAME') == 'localhost') ? 'URL' : 'NONE';
            // Set appropriate paths.
            $this->setTemplateDir($CI->config->item('smarty_template_dir'));
            $this->setCompileDir($CI->config->item('smarty_compile_dir'));

            // Auto-escape variables?
            if ($CI->config->item('smarty_auto_escape_vars'))
            {
                $this->escape_html = TRUE;
            }

            // Assign CI instance to be available in templates as $ci
            $this->assignByRef('CI', $CI);

	}

	// ------------------------------------------------------------------------------
	/**
	 * Takes the data array passed as the second parameter of
	 * CodeIgniter's $this->load->view() function, and assigns
	 * data to Smarty.
	 */
	public function assign_variables($variables = array())
	{
            if (is_array($variables))
            {
                    $this->assign($variables);
            }
	}


        /**
         * This method must be used to load all smarty template
         *
         * @param string $view
         * @param array $data
         * @param boolean $return
         * @param mixed $cache_id
         * @param boolean $add_ext Add file extension automatically
         * @return compiled html
         */
        public function show( $view = '' ,  $data = array() , $return = false , $cache_id = null , $add_ext = true)
        {
            $output = '' ;


            if(!$data)
            {
                $data = [];
            }

            if($add_ext)
            {
                $view.= '.tpl' ;
            }


            $this->assign_variables($data ) ;
            //  get previous caching settings
            $previos_cache_settings = $this->getCaching();

            if($this->_cache && $cache_id   )
            {
              // set caching
              $this->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
            }
            try
            {
                $output = $this->fetch( $view , $cache_id );
                // return caching back to previouse setings
                $this->setCaching($previos_cache_settings);
            }
            catch (Exception $e)
            {
                if( ENVIRONMENT == 'development')
                {
                    show_error(htmlspecialchars_decode($e->getMessage()), 500, 'Smarty Exception');
                }  else {
                    log_message('error', 'Smarty Exception :' .  htmlspecialchars_decode($e->getMessage()));
                }
            }

            if( $return )
            {
                return $output ;
            }
            echo  $output ;
        }


        /**
         *
         * @param string $template
         */
        public function addToLoadedTemplates( $template = '' , $assigned_vars = '' , $note = '')
        {
            $this->_loadedTemplates[] = array(
                'file' => $template,
                'variables' => $assigned_vars ,
                );
        }

        /**
         *
         * @return string
         */
        public function getLoadedTemplates()
        {
            return $this->_loadedTemplates;
        }

        public function isPluginsRegistered()
        {
            return $this->_plugins_registered;
        }

        public function markPluginsRegistered()
        {
            $this->_plugins_registered = true;
        }
}


/* End of file Smartytpl.php */
/* Location: ./application/libraries/Smartytpl.php */
