<!--<div class="row">
    <?php   foreach($jobs as $job): ?>
      <div class="col-md-4">
        <h2><?php echo $job->job_title; ?></h2>
        <p><i class="fas fa-map-marker"></i> <?php echo $job->location; ?></p>
        <p><i class="fas fa-building"></i> <?php echo $job->company; ?> </p>
        <p><?php echo $job->description; ?></p>
        <p><a class="btn btn-success" href="job.php?id=<?php echo $job->id;  ?>" role="button"><i class="fas fa-eye"></i></a></p>
      </div>
      <?php   endforeach;          ?>
</div>-->

<section class="jobs">
			<div class="container">
				<div class="row heading">
					<h2>Find Popular Jobs</h2>
				</div>
				<div class="companies">

        <?php   foreach($jobs as $job): ?>
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
                <?php echo $job->company; ?>
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3><?php echo $job->job_title; ?><span class="full-time"><a href="job.php?id=<?php echo $job->id;  ?>" style="color:white">SHOW MORE </a></span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Full Time</span><span class="company-location"><i class="fa fa-map-marker"></i> <?php echo $job->location; ?></span><span class="package"></p>
								</div>
							</div>
						</div>
					</div>
          <?php   endforeach;          ?>
				
					
				
				</div>
				<div class="row">
					<input type="button" class="btn brows-btn" value="Brows All Jobs">
				</div>
			</div>
		</section>