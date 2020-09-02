<?php
include_once 'config/init.php';
require_once 'lib/Job.php';
require_once 'lib/DataBase.php';

$template = new Template('templates/front.php');
$template->title="qdqffgsdfg";
echo $template;
$job=new Job;
$template->jobs=$job->fetchAll();

?>