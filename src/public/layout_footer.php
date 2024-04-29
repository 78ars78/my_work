


<hr width="99.8%" align="center" color="#ffffff"><font color="#FFFFFF"><center>Designed by Arsen. 2024</center></font><hr width="99.8%"  align="center" color="#ffffff">











 <script type="text/javascript">
 function doShowHide(popupmenu) {
 if (popupmenu=="menu1") {document.getElementById("menu1").style.visibility="visible"}
 if (popupmenu=="menu2") {document.getElementById("menu2").style.visibility="visible"}
 if (popupmenu=="menu3") {document.getElementById("menu3").style.visibility="visible"}
 }
 function doHide(popupmenu){document.getElementById(popupmenu).style.visibility="hidden"}
 </script>






<div id="menu1" onMouseOver="doShowHide('menu1')" onMouseOut="doHide('menu1')" style="z-index: 9; position:absolute; top:100px; left:500px; visibility:hidden"><div id="coolmenu7" style="position: relative; ">
<table width="200px" border="1" cellspacing="0" cellpadding="0">
 <? $sql1='SELECT * FROM vmenu WHERE parent=1 ORDER BY sort'; $result1=mysqli_query($link,$sql1); $myrow1 = mysqli_fetch_array($result1); 

	do {  printf( "<tr><td scope='row'><p align=left><a href='#'>%s</a></p></td></tr>",$myrow1["menu"]);
		
		} while ($myrow1=mysqli_fetch_array($result1)); 
		
	?>
  
</table>
</div>
</div>


<div id="menu2" onMouseOver="doShowHide('menu2')" onMouseOut="doHide('menu2')" style="z-index: 9; position:absolute; top: 100px; left:600px; visibility:hidden"><div id="coolmenu7" style="position: relative; ">

	<table width="200" border="1" cellspacing="0" cellpadding="0">
  <?  $sql1='SELECT * FROM vmenu WHERE parent=2 ORDER BY sort'; $result1=mysqli_query($link,$sql1); $myrow1 = mysqli_fetch_array($result1); 

	do {  printf( "<tr><td scope='row'><p align=left><a href='#'>%s</a></p></td></tr>",$myrow1["menu"]);
		
		} while ($myrow1=mysqli_fetch_array($result1)); 
		
	?>
</table>
</div></div>




<div id="menu3" onMouseOver="doShowHide('menu3')" onMouseOut="doHide('menu3')" style="z-index: 9; position:absolute; top:100px; left:700px; visibility:hidden"><div id="coolmenu7" style="position: relative; ">
<table width="200" border="1" cellspacing="0" cellpadding="0">
  <? $sql1='SELECT * FROM vmenu WHERE parent=3 ORDER BY sort'; $result1=mysqli_query($link,$sql1); $myrow1 = mysqli_fetch_array($result1);  

	do {  printf( "<tr><td scope='row'><p align=left><a href='#'>%s</a></p></td></tr>",$myrow1["menu"]);
		
		} while ($myrow1=mysqli_fetch_array($result1)); 
		
	?>
</table>

</div></div>


<table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div id="coolmenu6" style="position: absolute; left: 500px; top: 80px; ">
 <div style="position: relative; "><a href="#" style="color: aqua"  onClick ="doShowHide('menu1')" onMouseOut="doHide('menu1')">Дебет</a></div></div></td>
    <td><div id="coolmenu6" style="position: absolute; left: 600px; top: 80px; ">
 <div style="position: relative; "><a href="#" style="color:red" onMouseOver="doShowHide('menu2')" onMouseOut="doHide('menu2')">Кредит</a></div></div></td>
    <td><div id="coolmenu6" style="position: absolute; left: 700px; top: 80px; ">
 <div style="position: relative; "><a href="#" onMouseOver="doShowHide('menu3')" onMouseOut="doHide('menu3')">Баланс</a></div></div></td>
  </tr>
  
</table>



</div>












<!-- /container -->

<!-- jQuery (необходим для Bootstrap JavaScript) -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->

<!-- bootstrap JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<!-- bootbox JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script> -->



</body>

</html>