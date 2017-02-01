<?php

/**
* Description of School
*/
class School extends MY_Controller
{

    public $autoload = array(
      'model' => array(
          'school_session',
          'term',
          'school_arm'
      )

    );



    /**
     *
     */
    public function index()
     {
           $this->_view('school/dashboard' , array(

        ));

     }
    /**
        SCHOOL Sessions

    */
    public function sessions()
    {
        $this->page_title = 'School Sessions';

        if($this->input->post('submit'))
        {
            $school_session = new School_session($this->input->post());
            $school_session->save();
        }


        $this->_view('school/sessions' , array(
            'sessions' => $this->school_session->getAll()
        ));


    }

    public function edit_session()
    {
    	$this->page_title = 'Edit Session';

    	$this->_view('school/edit_session' , array(

        ));
    }

    public function view_session($id = '')
    {
        $this->page_title = 'View Session';

        $this->_view('school/view_session' , array(

        ));
    }


    public function delete_session( $id = '')
    {
        $this->page_title = 'Delete Session';

        $this->_view('school/delete_session' , array(

        ));
    }


    public function all_session()
    {
        $this->page_title = 'All Sessions';

        $this->_view('school/all_session' , array(

        ));
    }



    /**
        SCHOOL Terms

    */


    public function terms()
    {
        $this->page_title = 'School Terms';

        if($this->input->post('submit'))
        {
            $term = new Term($this->input->post());
            $term->save();
        }


        $this->_view('school/terms' , array(
            'terms' => $this->term->getAll()
        ));

    }

    public function edit_term()
    {
    	$this->page_title = 'Edit Term';

    	$this->_view('school/edit_term' , array(

        ));
    }


    public function delete_term( $id = '')
    {
        $this->page_title = 'Delete Term';

        $this->_view('school/delete_term' , array(

        ));
    }


    /**
        SCHOOL ARMS

    */

    public function arms()
    {
        $this->page_title = 'School Arm';

        if($this->input->post('submit'))
        {
            $arm = new School_arm($this->input->post());
            $arm->save();
            $this->_alert("Arm added successfully!" , 'success' );
        }



        $this->_view('school/arms' , array(
            'school_arms' => $this->school_arm->getAll()
        ));

    }

    /**
     *
     * @param int $id
     */
    public function edit_arm($id = '')
    {
    	$this->page_title = 'Edit Arm';
        $this->_isDialogue();

        $arm = $this->school_arm->getOne(array(
            'schoolarm_id' => $id
        ));

        if($this->input->post('submit'))
        {
            $arm->setProperties($this->input->post());
            $arm->save();
            $this->_alert("Arm updated successfully!" , 'success' );
        }

    	$this->_view('school/edit_arm' , array(
               'arm' => $arm
        ));
    }


    public function delete_arm( $id = '')
    {
         $arm = $this->school_arm->getOne(array(
            'schoolarm_id' => $id
        ));

         if($arm->schoolarm_id)
         {
             $arm->delete();
         }

         redirect(site_url('school/arms'));

    }

}
