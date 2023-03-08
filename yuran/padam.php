<?PHP 
include ('config.php'); 
$id_pelajar=$_GET['id_pelajar'];
 $result=mysqli_query($connect,"delete from pelajar where
id_pelajar='$id_pelajar'");
 $result=mysqli_query($result);
 
header("location:index.php");
?>