<?php
include_once 'config/init.php';
require_once 'lib/Job.php';
require_once 'lib/Category.php';
require_once 'lib/DataBase.php';

$template = new Template('templates/new-job.php');
$job=new Job;

if(isset($_POST['submit']))
{
    $data=array();
    $data['job_title']=$_POST['job_title'];
    $data['company']=$_POST['company'];
    $data['category_id']=$_POST['category'];
    $data['description']=$_POST['description'];
    $data['location']=$_POST['location'];
    $data['salary']=$_POST['salary'];
    $data['job_user']=$_POST['job_user'];
    $data['email']=$_POST['email'];

    $job->create($data)
   
}


$category=new Category;
$template->categories=$category->fetchAll();



echo $template;

?>