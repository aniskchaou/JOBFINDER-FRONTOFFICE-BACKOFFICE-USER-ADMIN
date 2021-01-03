
<?php include_once 'include/header.php' ?>
<body>
  <?php include_once 'include/nav.php'; ?>


<section class="profile-detail">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="basic-information">
						<div class="col-md-3 col-sm-3">
						 <img src="templates/dist/img/microsoft.png" alt="" class="img-responsive">
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="profile-content">
									<h2><?php echo $job->job_title;?> 
                  <span><?php echo $job->location;?></span>
                  </h2>
								
									<ul class="information">
										<li><span>Salary:</span><?php echo $job->salary;  ?></li>
										<li><span> Company :</span> <?php echo $job->company;   ?></li>
										<li><span>Employee:</span>Email : <?php echo $job->email;   ?></li>
										<li><span>Mail:</span>Posted By <?php echo $job->job_user; ?></li>
									</ul>
								</div>
							</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-user fa-fw"></i> About
							</div>
												<!-- /.panel-heading -->
							<div class="panel-body">
							<p><?php echo $job->description; ?></p>	
							</div>
						</div>
						
					
						
					
						
					
						
            <div class="card-footer text-muted">
             <a class="btn btn-info" href="index.php">Back</a>
             <a class="btn btn-warning" href="edit.php?id=<?php echo $job->id; ?>">Edit</a>
             <a class="btn btn-danger" href="index.php?del_id=<?php echo $job->id; ?>">Delete</a>
             </div>
					</div>
				</div>
			</div>
		</div>
	</section>
