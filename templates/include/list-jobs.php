<div class="row">
    <?php   foreach($jobs as $job): ?>
      <div class="col-md-4">
        <h2><?php echo $job->job_title; ?></h2>
        <p><i class="fas fa-map-marker"></i> <?php echo $job->location; ?></p>
        <p><i class="fas fa-building"></i> <?php echo $job->company; ?> </p>
        <p><?php echo $job->description; ?></p>
        <p><a class="btn btn-success" href="job.php?id=<?php echo $job->id;  ?>" role="button"><i class="fas fa-eye"></i></a></p>
      </div>
      <?php   endforeach;          ?>
</div>