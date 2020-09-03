<?php

//initialisations
include_once 'config/init.php';
require_once 'lib/Job.php';
require_once 'lib/Category.php';
require_once 'lib/DataBase.php';

$template = new Template('templates/get-job.php');
$job=new Job;

//get job by id
$id=isset($_GET['id'])?$_GET['id']:null;
$template->title=$job->getJobById($id)->job_title;
$template->job=$job->getJobById($id);

//get all categories
$category=new Category;
$template->categories=$category->fetchAll();

echo $template;

?>