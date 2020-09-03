<?php
include_once 'config/init.php';
require_once 'lib/Job.php';
require_once 'lib/Category.php';
require_once 'lib/DataBase.php';

$template = new Template('templates/list-job.php');
$job=new Job;
$category_param=isset($_GET['category'])?$_GET['category']:null;
if($category_param)
{
    $template->jobs=$job->getByCategory($category_param);
}else
{
    $template->title="All Jobs";
    $template->jobs=$job->fetchAll();
}

$del_id=isset($_GET['del_id'])?$_GET['del_id']:null;
if($del_id)
{
    $job->delete($del_id);
    redirect("index.php", false);
}






$category=new Category;
$template->categories=$category->fetchAll();



echo $template;

?>