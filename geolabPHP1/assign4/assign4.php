<?php

 session_start();
include('../index.php');

if (isset($_SESSION['even']) && !is_array($_SESSION['even'])) {
	$_SESSION['even'] = array();
		
}

if(isset($_POST['submit']) && is_numeric($_POST['number']) && $_POST['number'] % 2 ==0 && !empty($_POST['number'])) {
	 $_SESSION['even'][] = $_POST['number'];
}


if (isset($_SESSION['odd']) && !is_array($_SESSION['odd'])) {
	$_SESSION['odd'] = array();
		
}

if(isset($_POST['submit']) && is_numeric($_POST['number']) && $_POST['number'] % 2 ==1 && !empty($_POST['number'])) {
	 $_SESSION['odd'][] = $_POST['number'];
}



$evenArray = @($_SESSION['even']);
@sort($evenArray);	
$oddArray = @($_SESSION['odd']);
@sort($oddArray);
error_reporting(0);




?>

<div class="container-fluid">
<form action="" method="post" class="form-group">
	<hr>
	
	<input type="text"  name="number" value="" /><br><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Submit" />

</form>
	
<form method="post" action="reset.php" class="form-group">
	<div>
		<input type="submit" class="btn btn-secondary" value="Reset">
	</div>
</form>

<ul  class="list-group col-md-2">
	<h3>Even Numbers</h3>
	<?php foreach ($evenArray as $even):?>
	<li class="list-group-item"><?php echo $even; ?></li>
<?php endforeach; ?>
</ul>

<ul class="list-group col-md-2">
	<h3>Odd Numbers</h3>
	<?php foreach ($oddArray as $odd):?>
	<li class="list-group-item"><?php echo $odd; ?></li>
<?php endforeach; ?>
</ul>
</div>