<?
include("blocks/bd.php");

if (isset($_GET['id'])) {$id=$_GET['id'];}
$sql01="SELECT itog FROM moto WHERE id='$id'";
$result01=mysqli_query($link,$sql01);
$row01=mysqli_fetch_array($result01);
?>
<img src="img/moto/<? echo $row01['itog']; ?>" width="100%">