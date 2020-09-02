<?php

class Job 
{
    private $db;

    public function  __construct()
    {
        $this->db=new DataBase;
    }

    public function fetchAll()
    {
      $this->db->query('SELECT * FROM public.jobs
      ORDER BY id ASC');
      $results=$this->db->resultSet();

      return $results;
    }

    function getByCategory($category_param)
    {
        $this->db->query('SELECT * FROM public.jobs
       WHERE category_id ='.$category_param.' ORDER BY id ASC');
      $results=$this->db->resultSet();

      return $results;
    }

}
