<?php 
 session_start();
include('../index.php');
  if(isset($_SESSION['refresh'])){
     $_SESSION['refresh'] = $_SESSION['refresh']+ 1;
  }else{
     $_SESSION['refresh'] = 0;
  }
  


$myArray = array('one', 'two', 'three');
if ($_SESSION['refresh']>=count($myArray)) {
	$_SESSION['refresh']=0;
	} 
	



 ?>
 <form method="post" action="assign3.php">
 	<input type="submit" name="submit" class="btn btn-primary" value="Display array elements">

 </form>
 <div class="container-fluid">
   <?php echo 'array elements are: '.$myArray[$_SESSION['refresh']];
 ?>
 </div>