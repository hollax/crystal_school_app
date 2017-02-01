<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of My_Model
 *
 * @author Mario
 */
class My_Model extends CI_Model{


//
//    public $id;
//
//    public $modified;
//
//    public $live = 1;
//
//    public $created;
//

    protected $table ;

    protected $columns = array();

    protected $primary = 'id';


    protected $_defaultColumns = array(
//        'id' => array(
//                'type' => 'INT',
//                'constraint' => 5,
//                'unsigned' => TRUE,
//                'auto_increment' => TRUE
//        ),
//        'live' => array(
//                'type' =>'TINYINT'
//        ),
//        'created' => array(
//                'type' =>'DATETIME'
//        ),
//        'modified' => array(
//                'type' =>'DATETIME',
//                'null' => true ,
//      )
    );

    /**
     *
     * @param type $data
     */
    public function __construct($data = null) {
        parent::__construct();
        $this->setProperties($data);
    }


    /**
     * Set object properties
     * @param array $data
     * @param array $list Avoid setting specific properties or allow setting specific
     */
    public function setProperties($data = null , Array $list = null , $disallow_list = true)
    {
        if(is_array($data))
        {
            foreach ($data as $key => $value)
            {
                if($list && $disallow_list && in_array($key , $list))
                {
                    continue;;
                }
                else if($list && !$disallow_list && !in_array($key, $list))
                {
                    continue;
                }

                if (property_exists($this, $key))
                {
                    $this->{$key} = $value;
                }
            }
        }
    }


    /**
     *
     * @param array $where
     * @return type
     */
    public function count($where = '')
    {
        if($where) $this->db->where( $where );

        $total = $this->db->count_all_results( $this->getTable() ) ;

        return $total;
    }


    /**
     *
     * @param type $where
     * @param type $fields
     * @return \class
     */
    public function getOne( $where = null, $fields = null)
    {

        if ( $where )
        {
            $this->db->where($where);
        }
        if ( $fields )
        {
           $this->db->select( join(',' ,$fields));
        }

        $this->db->limit(1);

        $query =  $this->db->get( $this->getTable() );
        // initialze the data
        $data = $query->row_array();
        $class  = get_class($this) ;
        return new $class( $data );
    }


    /**
     * Fetch multiple record from the model table based on the specified query
     * criterias
     *
     * @param array $where Index array used to generate WHERE statement (optional)
     * @param array $fields Fields to select from the table (optional)
     * @param int $page For paginating record (optional)
     * @param int $limit Limit records (optional)
     * @param int $order The name of column to use to order record (optional)
     * @param string $direction The direction for the ORDER statement (optional)
     * @return array Each element of the array is an instance of the current model
     */
    public function getAll($where = '' , $fields = '', $page = '' ,$limit = '', $order = '' , $direction = '' )
    {
        $objects = array();
        // select fields
         if ( $where )
        {
            $this->db->where($where);
        }
        if ( $fields )
        {
           $this->db->select( join(',' ,$fields));
        }

        // order results
        if ( $order )
        {
            $this->db->order_by($order, $direction);
        }

        $offset = '';
        // limit results
        if ( $limit && is_int($page)  )
        {
            $offset = ( $page - 1 ) * $limit;
        }
        if ( $limit )
        {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get( $this->getTable() );
        $class = get_class($this);
        // is  table created
        foreach ( $query->result_array() as $row )
        {
            // create + populate user
            $object = new $class($row);
            array_push( $objects , $object );
        }

	return $objects;
    }


    /**
     * Delete record from the model table using the model $primary column and
     * the current value
     */
    public function delete()
    {
        $where = array(
           $this->primary => $this->{$this->primary}
        );
        $this->db->delete( $this->getTable()  ,$where );
    }


    /**
     * Save data
     * @return int Last insert id if insert operation is done
     */
    public function save()
    {
        $data = array();
        $primary = $this->primary;

        foreach ($this->getColumns() as $name => $meta)
        {
            switch (strtoupper($meta['type']))
            {
                case 'INT':
                $this->{$name} = (int) $this->{$name} ;
            }

            $data[$name] = $this->{$name} ;
        }

        if($this->{$primary})
        {
            $where = array(
                $primary => $this->{$primary}
            );

            if(property_exists($this, 'edit_time')) $data['edit_time'] = date('Y-m-d H:i:s');

            $this->db->update(  $this->getTable(), $data,$where );
        }
        else
        {
            if(property_exists($this, 'create_time')) $data['create_time'] = date('Y-m-d H:i:s');

            $this->db->insert(  $this->getTable(), $data);
            $id = $this->db->insert_id();
            $this->{$primary} = $id ;

            return $id ;
        }
    }


    /**
     *  Get the specified primary column
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->primary;
    }

    /**
     * Get the model table
     *
     * It checks the $table property
     * @return string
     */
    public function getTable()
    {

        if(!$this->table)
        {
            show_error("Table name not set for model: ". get_class($this));
        }
        return $this->table;
    }

    /**
     * Create the model table
     * The columns should be defined with $columns property of the model
     *
     * @see the codeigniter dbforge class for what can be added
     */
    public function createTable()
    {
        $this->load->dbforge();

        $primary = $this->getPrimaryKey();

        if($primary)
        {
            $this->dbforge->add_key( $primary , TRUE );
        }

        $this->dbforge->add_field($this->getColumns());

        $this->dbforge->create_table($this->getTable() , TRUE);
    }

    /**
     * Drops the table from the database
     */
    public function dropTable()
    {
        $this->load->dbforge();

        $this->dbforge->drop_table($this->getTable() , TRUE);
    }

    /**
     * Get the column degfinition
     *
     * The columm definition must be set in with the $columns property
     * or oviride this method in the derived class and return array of columns
     * definition
     *
     * @see the codeignier db forge class for examples
     * @return array
     */
    public function getColumns()
    {
        $columns = array_merge($this->columns , $this->_defaultColumns);

        return $columns;
    }



}
