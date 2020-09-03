<?php
class Category{

    private $db;

    public function  __construct()
    {
        $this->db=new DataBase;
    }
    
    //get all
    public function fetchAll()
    {
      $this->db->query('SELECT * FROM public.categories ORDER BY id ASC');
      $results=$this->db->resultSet(); 
      return $results;
    }
    

}