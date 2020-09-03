<?php

define("DB_HOST","localhost");
define("DB_USER","postgres");
define("DB_PASS","root");
define("DB_NAME","jobs");
define("SITE_TITLE","JOBFINDER");




function redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}



?>