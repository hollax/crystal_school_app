<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {




    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{



            $data = array(
                array(
                    'name' => "Samson" , 'age' => 20
                ),
                array(
                    'name' => "Bola" , 'age' => 44
                ),
                array(
                    'name' => "Taiye" , 'age' => 27
                ),
                array(
                    'name' => "Timi" , 'age' => 17
                ),
            );

            $action_view = $this->load->view('welcome_message' , array(
                'users' => $data,
                'message' => "Hello World"
            ), true );

            // load the layout and pass the action content
            $this->load->view('layouts/page' , array(
                'action_view' => $action_view
            ) );

	}


        public function login()
        {
            $this->load->model('user');


           $user = new User();

           $user->firstname = 'Ola';
           $user->lastname = 'Oguns';

           $user->save();


            $this->load->library('smartytpl');

             $data = array(
                array(
                    'name' => "Samson" , 'age' => 20
                ),
                array(
                    'name' => "Bola" , 'age' => 44
                ),
                array(
                    'name' => "Taiye" , 'age' => 27
                ),
                array(
                    'name' => "Timi" , 'age' => 17
                ),
            );

            $action_view = $this->smartytpl->show('login' , array(
                'users' => $data,
                'id' => 1
            ), true);

            // load the layout and pass the action content
            $this->load->view('layouts/page' , array(
                'action_view' => $action_view
            ) );

        }
}
