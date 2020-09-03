<?php

class Job 
{
    private $db;

    public function  __construct()
    {  if($this->db==null){
        $this->db=new DataBase;
      }
        
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
        $this->db->query('SELECT DISTINCT * FROM public.jobs
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
    
        try{
            $this->db->query('INSERT INTO public.jobs(
                job_user, salary, job_title, 
                description, company,email, category_id, location)
                VALUES (:job_user, :salary, :job_title, :description, :company,:email, :category_id, :location);');        
            $this->db->bind(":job_user",$data['job_user']);
            $this->db->bind(":salary",$data['salary']);
            $this->db->bind(":job_title",$data['job_title']);
            $this->db->bind(":description",$data['description']);
            $this->db->bind(":company",$data['company']);
            $this->db->bind(":email",$data['email']);
            $this->db->bind(":category_id",$data['category_id']);
            $this->db->bind(":location",$data['location']);
            $this->db->execute();
        }catch(PDOEXception $e)
        {
           echo $e->getMessage();
        }
            
    }


    function delete($id)
    {
        $this->db->query('DELETE FROM public.jobs WHERE id=:id;');
        $this->db->bind(":id",$id);
        $this->db->execute();
    }


    function update($id,$data)
    {
        
          
                $this->db->query('UPDATE public.jobs
                SET job_user=:job_user, salary=:salary, job_title=:job_title,  description=:description, company=:company,
                 email=:email, category_id=:category_id, location=:location
                WHERE id=:id;');        
           $this->db->bind(":job_user",$data['job_user']);
           $this->db->bind(":salary",$data['salary']);
           $this->db->bind(":job_title",$data['job_title']);
           $this->db->bind(":description",$data['description']);
           $this->db->bind(":company",$data['company']);
           $this->db->bind(":email",$data['email']);
           $this->db->bind(":category_id",$data['category_id']);
           $this->db->bind(":location",$data['location']);
           $this->db->bind(":id",$id);
           $this->db->execute();
    }

}
