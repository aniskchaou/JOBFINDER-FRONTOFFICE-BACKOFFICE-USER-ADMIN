<?php
include_once 'config/init.php';
require_once 'lib/Job.php';
require_once 'lib/Category.php';
require_once 'lib/DataBase.php';

$template = new Template('templates/edit-job.php');
$job=new Job;
$id=isset($_GET['id'])?$_GET['id']:null;
$template->job=$job->getJobById($id);


if(isset($_POST['submit']))
{
    $data=array();
    $data['job_title']=$_POST['jobtitle'];
    $data['company']=$_POST['company'];
    $data['category_id']=$_POST['category'];
    $data['description']=$_POST['description'];
    $data['location']=$_POST['location'];
    $data['salary']=$_POST['salary'];
    $data['job_user']=$_POST['jobuser'];
    $data['email']=$_POST['email'];

    $job->update($id,$data);
    $_SESSION['msg']="Your job has been added !";
    redirect("index.php", false);
   
}


$category=new Category;
$template->categories=$category->fetchAll();



echo $template;

?>