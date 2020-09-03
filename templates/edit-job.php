<?php include_once 'include/header.php' ?>
<body>
  <?php include_once 'include/nav.php'; ?>
 <br><br><br><br>
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  
  <div class="container">
  <h2 class="page-header">Edit A Job </h2>
  
  <form action="edit.php?id=<?php echo $job->id;   ?>" method="post">

  <div class="form-group">
    <label >Company</label>
    <input type="text" class="form-control" name="company" value="<?php echo $job->company;   ?>" >
  </div>


  <div class="form-group">
    <label >Job Title</label>
    <input type="text" class="form-control" name="jobtitle"  value="<?php echo $job->job_title;   ?>" >
  </div>
  
  <div class="form-group">
  <label >Category</label>
  <select name="category" class="form-control">
        <option value="-1">Choose Category</option>
        <?php   foreach($categories as $category): ?>
        <option value="<?php echo $category->id  ?>"><?php echo $category->name  ?></option>
        <?php   endforeach;          ?>
  </select>
  </div>

  <div class="form-group">
    <label >Description</label>
    <textarea type="text" class="form-control" name="description" > <?php echo $job->description;   ?>"</textarea>
  </div>
  
  <div class="form-group">
    <label >Location</label>
    <input type="text" class="form-control" name="location"  value="<?php echo $job->location;   ?>" />
  </div>
  
  <div class="form-group">
    <label >Salary</label>
    <input type="text" class="form-control" name="salary"  value="<?php echo $job->salary;   ?>" >
  </div>

    <div class="form-group">
    <label >User</label>
    <input type="text" class="form-control" name="jobuser"  value="<?php echo $job->job_user;   ?>" >
  </div>

 
  <div class="form-group">
    <label >Contact</label>
    <input type="text" class="form-control" name="email"  value="<?php echo $job->email;   ?>" >
  </div>

  <button name="submit" type="submit" class="btn btn-primary">Edit</button>
</form>

  <br><br>
  <a href="index.php">Back</a>
  </div> <!-- /container -->

</main>
</body>