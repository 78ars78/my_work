<? 
$k = isset($_GET['k']) ? $_GET['k'] : 0;
$i = isset($_GET['i']) ? $_GET['i'] : '';
$j = isset($_GET['j']) ? $_GET['j'] : 0;
$l = isset($_GET['l']) ? $_GET['l'] : 0;
$order= isset($_GET['order']) ? $_GET['order'] : 'marka';
$f= isset($_GET['f']) ? $_GET['f'] : 1;
$d= isset($_GET['d']) ? $_GET['d'] : 0; 

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
		<?	include_once "layout_header.php"; ?>

		
		
		
		<!-- <div  style="position:absolute; left:225px; top: 264px; z-index: 2;"><img name="mainpic" src="2.jpg" width=370 height=280 border=0></div> -->
		
		
		</td></tr><tr><td  >


    
<table style="border-bottom: none; border-left:none; border-right:none; border-top: none;" border="0px" topmargin="0" leftmargin="0"  cellpadding="0" cellspacing="0" 
bordercolor="black" width="100%" align= "center">
</td></tr><tr align="left" width="100%" >
<td valign="top" width="205" bgcolor=" #cdcdcd"><? $n=$l; include_once "lefttd.php"; ?>
</td><td  valign="top" style="background:white">




<center><br>
    <font color=black style="background-color: white ">&nbsp; сортировка по: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		

		



        <a style="<? if ($d==1) {echo "color:#C15E5F";} else {echo "color:#2C7CE9";} ?>; text-decoration: none; " href="auto_min1.php?order=marka&f=1&d=1<? echo "&j=$j&i=$i"; ?>">
        марка(возр) </a>	&nbsp;&nbsp;&nbsp;	
                
                
            
        <a style="<? if ($d==2) {echo "color:#C15E5F";} else {echo "color:#2C7CE9";} ?>; text-decoration: none" href="auto_min1.php?order=marka&f=2&d=2<? echo "&j=$j&i=$i"; ?>"> марка(убыв) </a>	&nbsp;&nbsp;&nbsp;
                
                
                
         <a style="<? if ($d==3) {echo "color:#C15E5F";} else {echo "color:#2C7CE9";} ?>; text-decoration: none" href="auto_min1.php?order=model&f=1&d=3<? echo "&j=$j&i=$i"; ?>"> модель </a>&nbsp;
        
            </font><br></center>





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







/* 
             if ($f==1) {  $stmt7 = $product->order1($j,$order,$from_record_num,$records_per_page); 
  
           
           }
               else {$stmt7 = $product->orderDesc1($j,$order,$from_record_num,$records_per_page);
            
            
            }	
    
                
                
                if (!$stmt7) { include_once "end.php"; exit();}
    

                
                while ($row7 = $stmt7->fetch(PDO::FETCH_ASSOC)) {
                extract($row7);


             


         
             printf("<table align='right' style='z-index: 3; position: relative;' class='lesson'>
         <tr align='center' >
        <td ><p   class='lesson_name'>
        <a href='autopost.php?id=%s'><img src='img/auto/%s' ></a>
        </p><p class='lesson_adds'>%s</p></td>
         </tr>  <tr align='center'><td style='color: yellow;'>%s</td></tr>
      </table>", $row7['id'], $row7['itog_0'], $row7['marka'], $row7['model']);  	
              
             
       }  */








    // здесь будет пагинация
// страница, на которой используется пагинация
$page_url = "auto_min1.php?i=1&j=$j&order=$order&f=$f&d=$d&";

// подсчёт всех товаров в базе данных, чтобы подсчитать общее количество страниц
$total_rows = $product->countAll1($j);

// пагинация
include "paging.php";







// отображаем товары, если они есть
if ($num > 0 && $total_rows > 0) {

    echo "<table class='table table-hover table-responsive table-bordered'><br>";
        echo "<tr>";
            echo "<th>Товар</th>";
            echo "<th>Цена</th>";
            echo "<th>Описание</th>";
            echo "<th>Категория</th>";
            echo "<th>Действия</th>";
        echo "</tr>";

        if ($f==1) {  $stmt7 = $product->order1($j,$order,$from_record_num,$records_per_page); 
  
           
        }
            else {$stmt7 = $product->orderDesc1($j,$order,$from_record_num,$records_per_page);
         
         
         }	
 
             
             
             if (!$stmt7) { include_once "end.php"; exit();}



        while ($row7 = $stmt7->fetch(PDO::FETCH_ASSOC)) {

            extract($row7);

            echo "<tr>";
                echo "<td><img src='img/auto/".$row7['itog_0']."'></td>";
                echo "<td>{$marka}</td>";
                echo "<td>".$row7['model']."</td>";
                echo "<td>";
                    
                echo "</td>";
  
                echo "<td>";
                    // здесь будут кнопки для просмотра, редактирования и удаления
// ссылки/кнопки для просмотра, редактирования и удаления товара
echo "<a href='read_product.php?id={$id}' class='btn btn-primary left-margin'>
     В корзину
</a>

";
                echo "</td>";

            echo "</tr>";

        }

    echo "</table>";







}

// сообщим пользователю, что товаров нет
else {
    echo "<div class='alert alert-info'>&nbsp Товары не найдены.</div>";
} ?>



<? include "paging.php"; ?>










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
	 
		 
		 <? require_once("layout_footer.php"); ?></center><br><br><br><br><br><br><br><br>






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





let a=0, filterBox, b0=0, b1=0, b2=0, c0=0, c1=0, c2=0, b, c, arr=[], arr1=[];
            if(a==0) {  for (let h=1; h<f; h++) {
		                        filterBox = document.querySelectorAll('.box'+h); 
		                     	filterBox.forEach( elem => { 
		                     	elem.style.display ="inline-block" ;} );  } }
function myFunction(myCheck) { <? echo "kgv"; ?> let checkBox = document.getElementById(myCheck);
       if (checkBox.checked){	 a=a+1; 
          for (let h=1; h<f; h=h+1) {
          filterBox = document.querySelectorAll('.box'+h); 
          filterBox.forEach( elem => { 
          elem.style.display ="none" ;} );   }    							
					
			let	m0='m'+0;			
	    if (myCheck==m0 || arr['0']==1 ) { arr['0']=1;
		filterBox = document.querySelectorAll('.box1');
		filterBox.forEach( elem => { 
		elem.style.display ="inline-block" ;} ); arr1['0']=0; }		
		
		




		
					
		if (checkBox==m1 || arr['1']==1 ) { arr['1']=1;
			filterBox = document.querySelectorAll('.box2');
			filterBox.forEach( elem => { 
		elem.style.display ="inline-block" ;} ); arr1['1']=0;
 		 }					
	
		if (checkBox==m2 || arr['2']==1 ) { arr['2']=1;
   	    filterBox= document.querySelectorAll('.box3');
		filterBox.forEach( elem => { 
		elem.style.display ="inline-block" ;} ); arr1['2']=0;
    		}	
		if (checkBox==m3 || arr['3']==1 ) { arr['3']=1;
   	    filterBox= document.querySelectorAll('.box4');
		filterBox.forEach( elem => { 
		elem.style.display ="inline-block" ;} ); arr1['3']=0;
    		}
								
    /* let arr={myFirstName:'John'};for(key in arr) alert(key+':'+arr[key]);y=arr[key];alert(y);*/					
		
		} 
	 else {   a=a-1;    
		   
		   
	/*for (let h=0; h<f; h=h+1) {
		     filterBox = document.querySelectorAll('.box'+h); 
				filterBox.forEach( elem => { 
					elem.style.display ="inline-block" ;} );  
			 	  }
		*/
			   
		 
		         
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
					elem.style.display ="inline-block" ;} );  
			 	  }
				
				}
 
 
 
 }


	
	/*
		
	
 function myFunction(myCheck,text) { 
  // Get the checkbox
  var checkBox = document.getElementById(myCheck);
  // Get the output text
  var text = document.getElementById(text);
	  // If the checkbox is checked, display the output text
 if (checkBox.checked == true ){	b=b+1; 
    text.style.display = "inline-block";
  } 
	 else {   b=b-1;
    text.style.display = "none";
  } 
	
	
	
	*/
	
	
	
	
	
	
	







</script>


</body>
</html>