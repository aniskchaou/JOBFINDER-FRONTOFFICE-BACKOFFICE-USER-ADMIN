<?php
include_once 'config/init.php';
require_once 'lib/Job.php';
require_once 'lib/Category.php';
require_once 'lib/DataBase.php';

$template = new Template('templates/get-job.php');
$job=new Job;
$id=isset($_GET['id'])?$_GET['id']:null;

    $template->title="All Jobs";
    $template->job=$job->getJobById($id);

if(isset($_GET['del_id']))
{
$job->delete($_GET['del_id']);
}

$category=new Category;
$template->categories=$category->fetchAll();



echo $template;

?>