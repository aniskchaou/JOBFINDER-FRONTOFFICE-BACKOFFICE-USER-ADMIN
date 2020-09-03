<?php
//show alert

if ( isset($_SESSION['msg'] )) { ?>
    <div class="alert alert-success alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    
    <?php 
    print $_SESSION['msg'];
    unset( $_SESSION['msg']);
    ?>
    </div>

<?php
    }
  ?>

<script>
$(".alert").delay(4000).slideUp(200, function() {
    $(this).alert('close');
});
</script>