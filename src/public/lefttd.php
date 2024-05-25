<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title></title></head>
<body cellspacing="0" cellpadding="0" topmargin="0" leftmargin="0" >
	
	<table width="205px" bgcolor="white">
	<tr><td><a href="index.php" style="text-decoration: none; color: green" >Главная страница<font color="gray"> / </font></a>
	</td></tr>
	</table>
			
	<? include_once("menu.php");  ?>
	
<div id="coolmenu4"><a href="index.php"></a></div><br>
	

<strong><center>---Обои---</center></strong>
<div id="coolmenu1"><a href="auto_min2.php?i=1"></a></div>


<? 


include_once "config/database.php";
include_once "product.php";
	
// создаём экземпляры классов БД и объектов
$database = new Database();
$db = $database->getConnection();
	
$product = new Product($db);

if ($i==1) {
	 
$k=1;
	$stmt1 = $product->auto(); 
	while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) { 
	extract($row1); 
	
	 
  printf( "<p align=left>&nbsp&nbsp&nbsp&nbsp<a style='color:#424242; text-decoration: none;' href='auto_min1.php?i=1&j=$k'>%s</a></p>",$row1["razr"]);
	  
		if (isset($j) && $j ==$k) {   
		$m=1;
			$stmt2 = $product->autoRazr($j); 
			while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
			extract($row2);	 
	 if($m==$n) { printf( "<p align=left><a style='margin-left:30px; background-color:grey; color:white; text-decoration: none;' href='auto_min.php?i=1&j=$k&l=$m'>%s</a></p>",$row2["razr"]); } else {
	printf( "<p align=left><a style='margin-left:30px; color:green; text-decoration: none;' href='auto_min.php?i=1&j=$k&l=$m'>%s</a></p>",$row2["razr"]); 	}
		
		   $m=$m+1; 
	   } }
	$k=$k+1; 
	   }  }
  ?>

<div id="coolmenu2"><a href="moto_min.php?i=3"></a></div>

<? if ($i==3) { ?>
<center><font color="red">фирма</font></center>
<div style='user-select:none'>
<input type="checkbox" id="m0" onclick="myFunction('m0');"><label for='m0'>рибок</label><br>
<input type="checkbox" id="m1" onclick="myFunction('m1');"><label for='m1' >адидас</label><br> 
<input type="checkbox" id="m2" onclick="myFunction('m2');"><label for='m2' >найк</label><br>
<input type="checkbox" id="m3" onclick="myFunction('m3');"><label for='m3' >пума</label><br>
  </div>
	
	       <!-- <center><font color="red">обувь</font></center>
<input type="checkbox" id="k0" onclick="myFunction('k0');"><label for='k0' >сапоги</label><br>
<input type="checkbox" id="k1" onclick="myFunction('k1');" ><label for='k1' >тапки</label><br>
<input type="checkbox" id="k2" onclick="myFunction('k2');" ><label for='k2' >туфли</label><br>	 -->			


<? } ?>
	


</body></html>