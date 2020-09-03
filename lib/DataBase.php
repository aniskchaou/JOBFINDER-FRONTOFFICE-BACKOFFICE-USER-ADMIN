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
         $this->deleteTables();
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
        $this->query('INSERT INTO public.categories(
            id, name)
            VALUES (1,   \'Developement \');');
            $this->execute();
                $this->query('INSERT INTO public.jobs(
                    job_user, salary, job_title, id, 
                    description, company,email, category_id, location)
                    VALUES (\'d\', \'d\', \'d\', 1, \'d\', \'d\',\'d\', 1, \'d\');');        
            $this->execute();
    }
    function createTables()
    {
        $this->dbh->exec('CREATE TABLE IF NOT EXISTS public.jobs 
        (
            job_user character varying(255),
            salary character varying(255),
            job_title character varying(255),
            id bigint AUTO_INCREMENT,
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
            id bigint,
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
