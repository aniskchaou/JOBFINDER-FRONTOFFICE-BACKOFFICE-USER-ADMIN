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
    
    function getJobById($id)
    {
        $this->db->query('SELECT * FROM public.jobs
       WHERE id =:id ORDER BY id ASC');
       $this->db->bind(":id",$id);
       $result=$this->db->getOne();

      return $result;
    }

    function create($data)
    {
        $this->query('INSERT INTO public.categories(
            id, name)
            VALUES (1,   \'Developement \');');
            $this->execute();
                $this->query('INSERT INTO public.jobs(
                    job_user, salary, job_title, id, 
                    description, company,email, category_id, location)
                    VALUES (:job_user, :salary, :job_title, \'\', :description, :company,:email, :category_id, :location);');        
           $this->db->bind(":job_user",$data['job_user']);
           $this->db->bind(":salary",$data['salary']);
           $this->db->bind(":job_title",$data['job_title']);
           $this->db->bind(":description",$data['description']);
           $this->db->bind(":company",$data['company']);
           $this->db->bind(":email",$data['email']);
           $this->db->bind(":category_id",$data['category_id']);
           $this->db->bind(":location",$data['location']);
           $this->execute();
    }

}
