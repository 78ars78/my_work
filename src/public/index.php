<? 
$k = isset($_GET['k']) ? $_GET['k'] : 0;
$i = isset($_GET['i']) ? $_GET['i'] : '';
$j = isset($_GET['j']) ? $_GET['j'] : 0;
$l = isset($_GET['l']) ? $_GET['l'] : 0;
$vertic = isset($_GET['vertic']) ? $_GET['vertic'] : 'inline-block';
$gg = isset($_GET['gg']) ? $_GET['gg'] : 1;

 // страница, указанная в параметре URL, страница по умолчанию - 1
$page = isset($_GET["page"]) ? $_GET["page"] : 1;

// устанавливаем ограничение количества записей на странице
$records_per_page = 2;

// подсчитываем лимит запроса
$from_record_num = ($records_per_page * $page) - $records_per_page;
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><head>
	<title>Выпадающее меню</title>

	<link rel="stylesheet" href="libs/css/custom.css">
	<link rel="stylesheet" href="style.css">
  <style>
  body,td,th {	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; }  
  </style>

</head>

  


<body cellspacing="0" cellpadding="0" topmargin="0" leftmargin="0" align="left" background="img/Wooden.jpg">
	<table topmargin="0" width="100%" leftmargin="0"   border="0" cellpadding="0" cellspacing="0" align="center" >
	<tr><td>	
		<?	include_once("layout_header.php"); ?>

		
		
		
		<!-- <div  style="position:absolute; left:225px; top: 264px; z-index: 2;"><img name="mainpic" src="2.jpg" width=370 height=280 border=0></div> -->
		
		
		</td></tr><tr><td  >


    
		<table style="border-bottom: none; border-left:none; border-right:none; border-top: none;" border="0px" topmargin="0" leftmargin="0"  cellpadding="0" cellspacing="0" 
	   bordercolor="black" width="100%" align= "center">
		</td></tr><tr width="100%" >
		<td valign="top" width="205" bgcolor=" #cdcdcd"><?  include_once("lefttd.php"); ?>
	</td><td  valign="top" style="background:white">



    <?
include_once "config/database.php";
include_once "product.php";

// создаём экземпляры классов БД и объектов
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

// запрос товаров
$stmt = $product->readAll($from_record_num, $records_per_page); 
$num = $stmt->rowCount(); 

// установка заголовка страницы
$page_title = "Вывод товаров";




 // здесь будет пагинация
// страница, на которой используется пагинация
$page_url = "index.php?";

// подсчёт всех товаров в базе данных, чтобы подсчитать общее количество страниц
$total_rows = $product->countAll2();







echo "<center><div class='order'><font color=white style='background-color: black '>&nbsp; сортировка:&nbsp;&nbsp;</font>&nbsp;&nbsp;&nbsp;"; 
 if ($gg==1) { echo "<a href='?gg=1' style='color:#C15E5F; text-decoration:none'>по id&nbsp;&nbsp;&nbsp;</a>";}  else 
 { echo "<a href='?gg=1' style='color:#2C7CE9;text-decoration:none'>по id&nbsp;&nbsp;&nbsp;</a>";} 
 if ($gg==2) { echo "<a href='?gg=2' style='color:#C15E5F; text-decoration:none'>по марке&nbsp;&nbsp;&nbsp;</a>";}  else 
 { echo "<a href='?gg=2' style='color:#2C7CE9;text-decoration:none'>по марке&nbsp;&nbsp;&nbsp;</a>";} 
 if ($gg==3) { echo "<a href='?gg=3' style='color:#C15E5F; text-decoration:none'>по модели&nbsp;&nbsp;&nbsp;</a>";}  else 
 { echo "<a href='?gg=3' style='color:#2C7CE9;text-decoration:none'>по модели&nbsp;&nbsp;&nbsp;</a>";} 

echo "</div></center><br>";


// пагинация
/* include_once "paging.php";  */



 







echo "<div class='row_col'><a href=index.php?vertic=inline-block><img style='border:  1px solid gray;' src='blocki.jpg'></a>&nbsp";
				 echo "<a href=index.php?vertic=block><img style='border:  1px solid gray;'  src='stroki.jpg'></a></div>";










/* 	$l=0; $n=0;     
$stmt11 = $product->auto1();
while ($row11 = $stmt11->fetch(PDO::FETCH_ASSOC)) {
extract($row11);
    //  if($row1["firm"]==$n) {$l=$l-1;}

 printf( "<a href='#'  style='color:red;display:none' class='box%s bux%s'> <p style='color:red;'> %s</p> <p style='color:blue;'> %s</p> <p style='color:green;'> %s</p> </a>",$row11["фирма"],$row11["shoes"], $row11["text"],$row11["model"],$row11["marka"]); 
 
 $boxa[]=$row11["фирма"]; $boxb[]=$row11["shoes"];
 $l=20;}  
                 foreach($boxa as $bb)  { echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$bb;  } echo "<br>";
                 foreach($boxb as $bb2) { echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$bb2; } echo "<br>"; */ 







				

// отображаем товары, если они есть
if ($num > 0) {



            if ($gg==1) {$g="ORDER BY id";}
			if ($gg==2) {$g="ORDER BY marka";}
			if ($gg==3) {$g="ORDER BY model";}
			
			$l=100;      
            $stmt11 = $product->auto1($g);
            while ($row11 = $stmt11->fetch(PDO::FETCH_ASSOC)) {
            extract($row11);


			echo "<table align='center' id='idd' class='box{$фирма} lesson'>
			<tr align='center'>
		   <td><p  class='lesson_name'>
		   <a href='motopost.php?id={$id}'><img height=133 src='img/auto/{$itog_0}'></a>
		   </p><p class='lesson_adds'>{$marka}</p></td>
			</tr>  <tr align='center'><td style='color: yellow;' align=left><a  href='read_product.php?id={$id}' class='btn btn-primary left-margin'>
     В корзину
</a>{$model}</td></tr>
</table>"; 

?>
<script>


/* let cl = getComputedStyle(document.querySelector('.lesson')).display;
if (cl == vert) {alert(cl);} else {alert('no vert!');} */

/* function myCl() {
	
	if (cl == vert) {alert('vert!');} else {alert('no vert!');}
	  }

myCl();
 */
	


</script>		
<?

		
		  } 	
				 

/* 
            echo "<table ><tr class='box{$фирма}'><td><a href='index.php' > 
            <img src='img/auto/{$itog_0v}'></td>
            <td>{$marka}</td><td>{$model}</td><td></td><td>
 <p style='color:red;'></p> <p style='color:blue;'>вами</p> <p style='color:green;'></p></td>"; */

                    // здесь будут кнопки для просмотра, редактирования и удаления
// ссылки/кнопки для просмотра, редактирования и удаления товара

/* echo "<a href='read_product.php?id={$id}' class='btn btn-primary left-margin'>
     Просмотр
</a>";
  */   /* $l=20;   echo "</a></tr>"; echo "</table>"; } */
   }

// сообщим пользователю, что товаров нет
else {
    echo "<div class='alert alert-info'>Товары не найдены.</div>";
} ?>



<? /* include "paging.php"; */ ?> 

		<!-- <table style="margin-top: 43px; margin-left: 20px" width=360 border=0 cellspacing=0 cellpadding=0>
<tr>
<td><a onMouseOver ="javascript:doPic('2.jpg');" href="#"><img src="2.jpg" width=90  border=0></a></td>
<td><a href="javascript:doPic('3.jpg');"><img src="3.jpg" width=90 border=0></a></td>
<td><a href="javascript:doPic('1.jpg');"><img src="1.jpg" width=90 border=0></a></td>
<td><a href="javascript:doPic('4.jpg');"><img src="4.jpg" width=90 border=0></a></td>
</tr>
</table> -->



<? /* if ($i==1) {echo "<div style='position:absolute; left:225px; top: 264px; z-index: 2;'>автообои</div>";}
		if ($i==2) {echo "мотообои";} if ($i==3) {echo "музыка";}  */
		?> 
	</td></tr></table></table>
	 <center>
<? require_once("layout_footer.php");  ?></center><br><br><br><br><br><br><br><br>


		 
<SCRIPT>







let id1= <? echo json_encode($boxa); ?>; 
 let id2= <? echo json_encode($boxb); ?>;
/*  id1.forEach( elem => { 
			alert(elem);}); */
let f=<? echo $l; ?>+1;  



/* function doPic(imgName) {
imgOn = ("" + imgName);
document.mainpic.src = imgOn;
} */
</script>
<script>




let vert='<? echo $vertic;  ?>'; 


let al;

function myCl() { al=0; 
let cl = document.querySelectorAll('.lesson');
cl.forEach( elem => { 
 if (elem.style.display == vert) {al++;}  if (al>7) {elem.style.display="none";}
//  if (elem.style.display !== vert) {al--;} 
//  if (al>2) {elem.style.display="none"}   
}   ); }

	 


let a=0, filterBox, b0=0, b1=0, b2=0, c0=0, c1=0, c2=0, b, c, arr=[], arr1=[];
            if(a==0) { for (let h=1; h<f; h++) {
		                        filterBox = document.querySelectorAll('.box'+h); 
		                     	filterBox.forEach( elem => { 
		                     	elem.style.display =vert ;} );  } 
								 
							}
myCl(); 
function myFunction(myCheck) {

let checkBox = document.getElementById(myCheck);
   // если чекбокс нажат
if (checkBox.checked) {	 a=a+1; 
          for (let h=1; h<f; h=h+1) {
          filterBox = document.querySelectorAll('.box'+h); 
          filterBox.forEach( elem => { 
          elem.style.display ="none" ;} );   }    							
		
		  



			let	m0='m'+0;			
	    if (myCheck==m0 || arr['0']==1 ) { arr['0']=1;
		filterBox = document.querySelectorAll('.box1');
		filterBox.forEach( elem => { 
		elem.style.display =vert ;} ); arr1['0']=0; }		
		
					
		if (checkBox==m1 || arr['1']==1 ) { arr['1']=1;
			filterBox = document.querySelectorAll('.box2');
			filterBox.forEach( elem => { 
		elem.style.display =vert ;} ); arr1['1']=0;
 		 }					
	
		if (checkBox==m2 || arr['2']==1 ) { arr['2']=1;
   	    filterBox= document.querySelectorAll('.box3');
		filterBox.forEach( elem => { 
		elem.style.display =vert ;} ); arr1['2']=0;
    		}	
		if (checkBox==m3 || arr['3']==1 ) { arr['3']=1;
   	    filterBox= document.querySelectorAll('.box4');
		filterBox.forEach( elem => { 
		elem.style.display =vert ;} ); arr1['3']=0;
    		}
								
    /* let arr={myFirstName:'John'};for(key in arr) alert(key+':'+arr[key]);y=arr[key];alert(y);*/					
		
		} 
	 else {   a=a-1;    
		   
		   
	/*for (let h=0; h<f; h=h+1) {
		     filterBox = document.querySelectorAll('.box'+h); 
				filterBox.forEach( elem => { 
					elem.style.display ="block" ;} );  
			 	  }
		*/
			   
		 
		        //  если отменить отмеченный чекбокс или он не нажат 
		   if (checkBox==m0 || arr1['0']==1  || arr['0']==0) { arr1['0']=1;
			filterBox= document.querySelectorAll('.box1');
			filterBox.forEach( elem => { 
		elem.style.display ="none" ;} ); arr['0']=0;
       	 }	     
			if (checkBox==m1 || arr1['1']==1  || arr['1']==0) { arr1['1']=1;
			filterBox= document.querySelectorAll('.box2');
			filterBox.forEach( elem => { 
		elem.style.display ="none" ;} ); arr['1']=0;
       	 }		  
			if (checkBox==m2 || arr1['2']==1 || arr['2']==0) { arr1['2']=1;
   	    filterBox = document.querySelectorAll('.box3');
		filterBox.forEach( elem => { 
		elem.style.display ="none" ;} ); arr['2']=0;
		}
		   
		   
		  if (checkBox==m3 || arr1['3']==1 || arr['3']==0) { arr1['3']=1;
   	    filterBox = document.querySelectorAll('.box4');
		filterBox.forEach( elem => { 
		elem.style.display ="none" ;} ); arr['3']=0;
		} 
  
		   
      }
		   

	 

if(a==0) {   for (let h=1; h<f; h=h+1) {
		     filterBox = document.querySelectorAll('.box'+h); 
				filterBox.forEach( elem => { 
					elem.style.display =vert ;} );  
			 	  }
				
				}
 
 
 myCl();			

	


 }

 
 


	
	/*
		
	
 function myFunction(myCheck,text) { 
  // Get the checkbox
  var checkBox = document.getElementById(myCheck);
  // Get the output text
  var text = document.getElementById(text);
	  // If the checkbox is checked, display the output text
 if (checkBox.checked == true ){	b=b+1; 
    text.style.display = "block";
  } 
	 else {   b=b-1;
    text.style.display = "none";
  } 
	
	
	
	*/
	
	
	
	
	
	
	



</script>








</body>
</html>
