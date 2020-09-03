
<?php include_once 'include/header.php' ?>
<body>
  <?php include_once 'include/nav.php'; ?>
 <br><br><br><br>
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  
  <div class="container">
  <h2 class="page-header"><?php echo $job->job_title;?> (<?php echo $job->location;?>) </h2>
  <small>Posted By <?php echo $job->job_user; ?></small>
  <p class="lead"><?php echo $job->description; ?>
  <ul class="list-group">
  <li>Company : <?php echo $job->company;   ?></li>
  <li>Slaray :<?php echo $job->salary;  ?></li>
  <li>Email : <?php echo $job->email;   ?></li>
  </ul>
  <br><br>
  <div class="well">
  <a href="edit.php?id=<?php echo $job->id; ?>">Edit</a>
  <a href="index.php?del_id=<?php echo $job->id; ?>">Delete</a>
  </div>
  <a href="index.php">Back</a>
  </div> <!-- /container -->

</main>
</body>
