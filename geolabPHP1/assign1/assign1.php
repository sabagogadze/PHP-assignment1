
<?PHP
session_start();
include('../index.php');
  
 
  if(isset($_SESSION['refresh'])){
     $_SESSION['refresh'] = $_SESSION['refresh']+ 1;
  }else{
     $_SESSION['refresh'] = 0;
  }
  echo "Total page refresh = ". $_SESSION['refresh'];

 
?>




<a href="reset.php" class="btn btn-primary">reset</a>