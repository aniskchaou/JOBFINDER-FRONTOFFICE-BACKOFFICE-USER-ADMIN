<?php
class DataBase 
{
    private $host=DB_HOST;
    private $user=DB_USER;
    private $pass=DB_PASS;
    private $dbname=DB_NAME;

    private $dbh;
    private $error;
    private $stmt;
    
    
    public function __construct()
    {
         $dsn='pgsql:host='.$this->host.';dbname='.$this->dbname;
         $options=array(PDO::ATTR_PERSISTENT=>true,
         PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
         $this->connect($dsn,$options);      
         $this->createTables();
         $this->insertData();
         
    
    }


    function connect($dsn,$options)
    {
        try{
         $this->dbh=new PDO($dsn,$this->user,$this->pass,$options);
        }catch(PDOException $e){
         $this->error=$e->getMessage();
         echo $this->error;
        } 
    }

    function query($query)
    {
        $this->stmt=$this->dbh->prepare($query);
    }
    
    function bind($param,$value)
    {
        $this->stmt->bindValue($param,$value);
    }

    function execute()
    {
        return $this->stmt->execute();
    }

    function resultSet()
    {
        $this->execute();
       return  $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function getOne()
    {
        $this->execute();
       return  $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    function insertData()
    { 
        
            if($this->isDBEmpty())
            {
                $this->query('INSERT INTO public.categories( name)VALUES (   \'Project Management \');');
                $this->execute();
                $this->query('INSERT INTO public.categories(name) VALUES (   \'Devops \');');
                $this->execute();
                $this->query('INSERT INTO public.categories(name)VALUES (   \'Software Engineering \');');    
                $this->execute();
                
                $this->query('INSERT INTO public.jobs(
                    job_user, salary, job_title,description, company,email, category_id, location)
                    VALUES (\'admin\', \'90.000 $ \', \'Project Manager\',  \'As a Covance employee dedicated to an FSP project, you will bring your specialized discipline to a core team working directly with one sponsor. 
                    \', \'Covance\',\'ceo@covance.com\', 1, \'Florida\')
                     ');        
                     $this->execute();
                 $this->query('INSERT INTO public.jobs(
                    job_user, salary, job_title,description, company,email, category_id, location)
                    VALUES (\'admin\', \'130.000 $ \', \'DevOps Engineer\',  \'Your Software Development Team works on state-of-the art supply chain planning and optimization software. Our Supply Chain Consultants will customize the software to the specific needs of the customer. 
                    \', \'OMP\',\'ceo@omp.com\', 2, \'California\')
                     '); 
                $this->execute();
                $this->query('INSERT INTO public.jobs(
                    job_user, salary, job_title,description, company,email, category_id, location)
                    VALUES (\'admin\', \'80.000 $ \', \'Software Engineer\',  \'Software Engineers at Citadel create next generation software solutions that help produce systems that power our investment research, trading, risk management, and funding & settlement systems. 
                    \', \'Citadel\',\'ceo@citadel.com\', 3, \'Illinois \')
                     '); 
               $this->execute();

            }
                
    }

    function isDBEmpty()
    {
        $stmt = $this->dbh->query('SELECT * FROM public.jobs
        ORDER BY id ASC ');
       
        $row_count = $stmt->rowCount();

        if($row_count==0){
          return true;
        }else
        {
          return false;
        }
    }


    function createTables()
    {
        $this->dbh->exec('CREATE TABLE IF NOT EXISTS public.jobs 
        (
            job_user character varying(255),
            salary character varying(255),
            job_title character varying(255),
            id serial,
            description character varying(255),
            company character varying(255),
            email character varying(255),
            category_id bigint,
            location character varying(255),
            PRIMARY KEY (id)
        );
        ALTER TABLE public.jobs
        OWNER to '.$this->user.';
        ');

        $this->dbh->exec('CREATE TABLE IF NOT EXISTS public.categories
        (
            id serial,
            name character varying(255),
            PRIMARY KEY (id)
        );
        
        ALTER TABLE public.categories
            OWNER to '.$this->user.';
        ');

        
    }

    function deleteTables()
    {
        $this->dbh->exec('DROP TABLE IF  EXISTS public.jobs');
        $this->dbh->exec('DROP TABLE IF  EXISTS public.categories');
    }


    
}
