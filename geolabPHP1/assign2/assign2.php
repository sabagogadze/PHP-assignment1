<?php

include('../index.php');


 if(isset($_POST['click'])){
     $_POST['click'] = $_POST['click']+ 1;
  }else{
     $_POST['click'] =0 ;
  }

  
	


?>
<div class="container-fluid"><?php echo '<p3>Total button click: </p3>'.$_POST['click'];  ?>

<form action="assign2.php" method="post">
  <input type="hidden" name="click" value="<?=$_POST['click'] ?>">
  <input type="submit" value="Cick" class="btn btn-primary">
</form> <br>
<form action="reset.php" method="post">
  
  <input type="submit" class="btn btn-secondary" value="Reset">
</form>
</div>