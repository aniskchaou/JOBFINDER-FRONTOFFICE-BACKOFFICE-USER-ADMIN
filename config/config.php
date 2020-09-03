<?php

//constants
define("DB_HOST","ec2-54-211-169-227.compute-1.amazonaws.com");
define("DB_USER","wpistqbvrnqvdf");
define("DB_PASS","e9b2abb1511eb28e2d41dc1d41a5219573648192df780f0a4c4c5ff842187491");
define("DB_NAME","d47mjt3lklud2g");
define("SITE_TITLE","JOBFINDER");



//redirect
function redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}



?>
