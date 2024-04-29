
<?
include("blocks/bd.php");

if (isset($_GET['id'])) {$id=$_GET['id'];}



$sql4= "SELECT * FROM auto WHERE id='$id'"; $result4=mysqli_query($link,$sql4);
		$row4 = mysqli_fetch_array($result4); 



?>
<img src="img/auto/<? echo $row4['itog']; ?>" width="100%">






	
	
	
	