<?php include_once 'include/header.php' ?>
<body>
  <?php include_once 'include/nav.php'; ?>
 
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  
  <div class="container">

  <div class="jumbotron">
    <div class="container">
      <h2 class="display-3">Find A Job </h2>
      <form action="index.php">
      <select name="category" class="form-control">
        <option value="-1">Choose Category</option>
        <?php   foreach($categories as $category): ?>
        <option value="<?php echo $category->id  ?>"><?php echo $category->name  ?></option>
        <?php   endforeach;          ?>
        </select>
        <br/>
        <input type="submit" class="btn btn-primary btn-lg" value="Find"/>
      </form>
     
    </div>
  </div>




    <!-- Example row of columns -->
    <?php   foreach($jobs as $job): ?>
    <div class="row">
      <div class="col-md-4">
        <h2><?php echo $job->job_title; ?></h2>
        <p><?php echo $job->description; ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
     
    </div>
<?php   endforeach;          ?>
    <hr>

  </div> <!-- /container -->

</main>
</body>
<?php include_once 'include/footer.php' ?>