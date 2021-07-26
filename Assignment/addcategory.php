<?php
   include 'Controllers/categorycontroller.php';
   include 'admin_header.php';
?>
<div class="center">
<h5 class = "text-danger"><?php echo $err_db; ?></h5>
<form action = "" method = "post" class = "form-group" "form-material">
<div class = "form-group">
<h4 class = "text">Name</h4>
<input type = "text" name = "name" class = "from-control">
</div>

<div class = "form-group text-center">
<input type = "submit" name = "add_category" class = "btn btn-success" value = "Add Category" class = "form-control">
</div>
</form>
</div>
<?php include 'admin_footer.php';?>