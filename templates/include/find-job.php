<div class="jumbotron">
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
</div>