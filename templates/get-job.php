
<?php include_once 'include/header.php' ?>
<body>
  <?php include_once 'include/nav.php'; ?>
 <br><br><br><br>
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  
  <div class="container">

   <div class="card">
  <div class="card-header">
    <?php echo $job->job_title;?> (<?php echo $job->location;?>)
  </div>
  <div class="card-body">
    <p class="lead"><?php echo $job->description; ?>
    <h5 class="card-title"><i class="fas fa-building"></i> Company : <?php echo $job->company;   ?></h5>
    <h5 class="card-title"><i class="fas fa-dollar-sign"></i> Salary :<?php echo $job->salary;  ?></h5>
    <h5 class="card-title"><i class="fas fa-envelope"></i> Email : <?php echo $job->email;   ?></h5>
    
    <small><i class="fas fa-pen"></i> Posted By <?php echo $job->job_user; ?></small>
    <br><br>
    <div class="well">
  <a class="btn btn-warning" href="edit.php?id=<?php echo $job->id; ?>">Edit</a>
  <a class="btn btn-danger" href="index.php?del_id=<?php echo $job->id; ?>">Delete</a>
  </div>
  </div>
  <div class="card-footer text-muted">
  <a href="index.php">Back</a>
  </div>
</div>
</div>


</main>
</body>
