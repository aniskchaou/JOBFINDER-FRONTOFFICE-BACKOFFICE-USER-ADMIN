<!--<div class="jumbotron">
    <div class="container">
      <h4 class="display-3"><i class="fas fa-search"></i>  Find A Job </h4>
      <form action="index.php">
      <select name="category" class="form-control">
        <option value="-1">Choose Category</option>
        <?php   foreach($categories as $category): ?>
        <option value="<?php echo $category->id  ?>"><?php echo $category->name  ?></option>
        <?php   endforeach;          ?>
        </select>
        <br/>
        <button type="submit" class="btn btn-primary btn-lg" > Find </button>
      </form>
    </div>
</div>-->

<section class="main-banner" style="background:#242c36 url(templates/dist/img/slider-01.jpg) no-repeat">
			<div class="container">
				<div class="caption">
					<h2>Build Your Career</h2>
					<form action="index.php">
						<fieldset>
							<div class="col-md-4 col-sm-4 no-pad">
								<input type="text" class="form-control border-right" placeholder="Skills, Designation, Companies">
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<select class="selectpicker border-right">
								  <option>Experience</option>
								  <option>0 Year</option>
								  <option>1 Year</option>
								  <option>2 Year</option>
								  <option>3 Year</option>
								  <option>4 Year</option>
								  <option>5 Year</option>
								  <option>6 Year</option>
								  <option>7 Year</option>
								  <option>8 Year</option>
								  <option>9 Year</option>
								 <option>10 Year</option>
								</select>
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<select class="selectpicker" name="category">
								  <option value="-1" name="category" >Select Category</option>
                
                  <?php   foreach($categories as $category): ?>
                  <option value="<?php echo $category->id  ?>"><?php echo $category->name  ?></option>
                  <?php   endforeach;          ?>
								
                </select>
							</div>
							<div class="col-md-2 col-sm-2 no-pad">
								<input type="submit" class="btn seub-btn" value="submit">
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</section>