

<? 
$i= isset($_GET['i']) ? $_GET['i'] : 0;
$j= isset($_GET['j']) ? $_GET['j'] : 0;
$l= isset($_GET['l']) ? $_GET['l'] : '';
$order= isset($_GET['order']) ? $_GET['order'] : "marka";
$f= isset($_GET['f']) ? $_GET['f'] : 1;
$d= isset($_GET['d']) ? $_GET['d'] : 0; 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ru"><head><title></title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <style type="text/css">
  body,td,th {	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; }  </style>
	
	

	
	
	</head>
<body cellspacing="0" cellpadding="0" topmargin="0" leftmargin="0" align="left" background="img/Wooden.jpg">
	<table  topmargin="0" width="100%" leftmargin="0"   border="0" cellpadding="0" cellspacing="0" align="center" >
	<tr><td>	
		<? include("layout_header.php"); ?>
		</td></tr><tr><td>
		<table  style="border-bottom: none; border-left:none; border-right:none; border-top: none;" border="0px" topmargin="0" leftmargin="0"  cellpadding="0" cellspacing="0" 
		  bgcolor="white"   bordercolor="black" width="100%" align= "center">
		</td><tr width="100%" >
		<td valign="top" width="205" border="10px" bgcolor="#CDCDCD"><? $n=$l; include("lefttd.php"); ?></td>
	  <td valign="top" align="center">
		<table>
		<tr align="center"><td valign="top">
		
			
			<font color=black style="background-color: white ">&nbsp; сортировка по: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		

		



	<a style="<? if ($d==1) {echo "color:#C15E5F";} else {echo "color:#2C7CE9";} ?>; text-decoration: none; " href="auto_min1.php?order=marka&f=1&d=1<? echo "&j=$j&i=$i"; ?>">
	марка(возр) </a>	&nbsp;&nbsp;&nbsp;	
			
			
		
	<a style="<? if ($d==2) {echo "color:#C15E5F";} else {echo "color:#2C7CE9";} ?>; text-decoration: none" href="auto_min1.php?order=marka&f=2&d=2<? echo "&j=$j&i=$i"; ?>"> марка(убыв) </a>	&nbsp;&nbsp;&nbsp;
			
			
			
     <a style="<? if ($d==3) {echo "color:#C15E5F";} else {echo "color:#2C7CE9";} ?>; text-decoration: none" href="auto_min1.php?order=model&f=1&d=3<? echo "&j=$j&i=$i"; ?>"> модель </a>&nbsp;
	
		</font><br>
					
		<?		
			
include_once "config/database.php";  
include_once "product.php";
	
// создаём экземпляры классов БД и объектов
$database = new Database();
$db = $database->getConnection();
	
$product = new Product($db);


	
	


$num =3;
// Извлекаем из URL текущую страницу
@$page = $_GET['page'];
// Определяем общее число сообщений в базе данных

$stmt6 = $product->autoMinCount($j); 
$temp = $stmt6->fetch(PDO::FETCH_ASSOC);

	

$posts = $temp[0];
// Находим общее число страниц
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
// Определяем начало сообщений для текущей страницы
$page = intval($page);
// Если значение $page меньше единицы или отрицательно
// переходим на первую страницу
// А если слишком большое, то переходим на последнюю
if(empty($page) or $page < 0) $page = 1;
  if($page > $total) $page = $total;
// Вычисляем начиная с какого номера
// следует выводить сообщения
$start = $page * $num - $num;
// Выбираем $num сообщений начиная с номера $start
	
		
	
			if ($f==1) { $stmt7 = $product->order($j,$order,$start,$num); 
/* $row7 = $stmt7->fetch(PDO::FETCH_ASSOC);
extract($row7); */
			
	
	}
		   else { $stmt7 = $product->orderDesc($j,$order,$start,$num); }	
		
			
			
			if (!$stmt7) { include_once "end.php"; exit();}

	if ($stmt7->rowCount() >0)
	{  $row=mysqli_fetch_array($result);
	  do {	
	
		 printf("<table align='left' style='z-index: 3; position: relative;' class='lesson'>
     <tr align='center' >
    <td ><p   class='lesson_name'>
	<a href='autopost.php?id=%s'><img src='img/auto/%s' ></a>
	</p><p class='lesson_adds'>%s</p></td>
     </tr>  <tr align='center'><td style='color: yellow;'>%s</td></tr>
  </table>", $row['id'], $row['itog_0'], $row['marka'], $row['model']);  	
		  
		 
   } while($row=mysqli_fetch_array($result));
			
			
					
	$pervpage='';	$page5left=''; $page4left=''; $page3left=''; $page2left=''; $page1left=''; 
				$page1right=''; $page2right=''; $page3right=''; $page4right=''; $page5right=''; $nextpage='';
	 

 echo "</table><font align=right>"; 	 
	 // Проверяем нужны ли стрелки назад
if ($page != 1 ) $pervpage = '<a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page=1>Первая</a> | <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page - 1) .'>Предыдущая</a> | ';
// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = ' | <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page + 1) .'>Следующая</a> | <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page=' .$total. '>Последняя</a>';
// Находим две ближайшие станицы с обоих краев, если они есть
if($page - 5 > 0) $page5left = ' <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
if($page - 4 > 0) $page4left = ' <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
if($page - 3 > 0) $page3left = ' <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
if($page - 2 > 0) $page2left = ' <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

if($page + 5 <= $total) $page5right = ' | <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page + 5) .'>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' | <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page + 4) .'>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' | <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page + 3) .'>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' | <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=auto_min1.php?order='.$order.'&f='.$f.'&d='.$d.'&i='.$i.'&j='.$j.'&page='. ($page + 1) .'>'. ($page + 1) .'</a>';
// Вывод меню если страниц больше одной
if ($total >1) { Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"pstrnav\">";

	
				
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</div>"; echo "</font>"; }} else {echo "нет уроков"; exit(); }
						 ?>
	 
	</td></tr> </table><? include("blocks/footer.php"); ?></table>

	
 </table></body></html>