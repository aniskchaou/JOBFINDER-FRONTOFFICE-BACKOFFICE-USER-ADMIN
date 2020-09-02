<?php

class Template 
{
    //link template
    protected $template;
    //vars
    protected $vars;

    

   public  function __construct($template)
    {
       $this->template=$template;
    }

    public function __get($key)
    {
       return $this->vars[$key];
    }

    public function __set($key,$value)
    {
        $this->vars[$key]=$value;
    }

    public function __toString()
    {
       if(!is_null($this->vars))
       {
        extract($this->vars);
       } 
        
        chdir(dirname($this->template));


        ob_start();
        include basename($this->template);
        return ob_get_clean();
    }
}




?>