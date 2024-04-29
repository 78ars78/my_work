

<?php

//Устанавливаем кодировку и вывод всех ошибок



//Объектно-ориентированный стиль
$mysqli = new mysqli('mysql', 'root', 's123123', 'arsen_new');



//Определяем переменную ID
$id = isset($_GET['id']) ? $_GET['id'] : null;

//Получаем массив нашего меню из БД в виде массива
function getCat($mysqli){
	$sql = 'SELECT * FROM music ORDER BY sort';
	$res = $mysqli->query($sql);

	//Создаем масив где ключ массива является ID меню
	$cat = array();
	while($row = $res->fetch_assoc()){
		$cat[$row['id']] = $row;
	}
	return $cat;
}

//Функция построения дерева из массива от Tommy Lacroix
function getTree($dataset) {
	$tree = array();

	foreach ($dataset as $id => &$node) {    
		//Если нет вложений
		if (!$node['parent']){
			$tree[$id] = &$node;
		}else{ 
			//Если есть потомки то перебераем массив
            $dataset[$node['parent']]['childs'][$id] = &$node;
		}
	}
	return $tree;
}

//Получаем подготовленный массив с данными
$cat  = getCat($mysqli); 

//Создаем древовидное меню
$tree = getTree($cat);

//Шаблон для вывода меню в виде дерева
function tplMenu($category){
	$menu = '<ul class="menu_ul" >
	<li>
	<table  width="205" border="0px" cellpadding="0" cellspacing="0"  id="coolmenu">
  <tr>
    <td width="205"  height="30" bgcolor=yellow >
	
		<a  href="index.php?id='.$category['id'].'"><p class="menu"><strong><em>&#187;&nbsp;&nbsp;'.$category['title'].'</em></strong></p>
		</a></td>
  </tr>
  </table>';
		
		if(isset($category['childs'])){ 
			$menu.="<div style='z-index: 6;' style='position:absolute; top:0px; left:205px;' class='menu-inner'>
			".showCat($category['childs'])."</div>"; 
		} 
	$menu .= '</li></ul>';
	
	return $menu;
}

 /*
 Меню для админки в виде выподающего списка
 function tplMenu($category,$str)
 {   
    if($category['parent'] == 0)
       $menu = "<option value='".$category['id']."'>".$category['title']."</option>";
    else   
       $menu = "<option value='".$category['id']."'> ".$str." ".$category['title']."</option>";
    
	if(isset($category['childs']))
	{
		$i = 1;
		for($j = 0; $j < $i; $j++){
			$str .= '>';
		}		  
		$i++;
		
		$menu .= showCat($category['childs'], $str);
	}
    $menu .= '';
    return $menu;
 }*/




/**
* Рекурсивно считываем наш шаблон
**/ 
function showCat($data, $str = null){
	$string = '';
	$str = $str; 
	foreach($data as $item){
		$string .=  tplMenu($item, $str);
	}
	return $string;
}

/**
 * @param $cat array
 * @param $id int
 * @return array
 * Получаем массив для хлебных крошек
 */
function breadcrumb($cat, $id){
	//Проверяем что ID это число
	if(!intval($id)) return false;

	//Создаем пустой массив
	$brc = array();

	//Перебираем полученый массив с меню
	for($i = 0; $i < count($cat); $i++){
		//Проверяем что мы не нашли родителя и не массив пуст
		if($id != 0 and !empty($cat[$id])){
			//Ищим родителя
			$brc[$cat[$id]['id']] = $cat[$id]['title'];
			$id = $cat[$id]['parent'];
		}
		//Останавливаем цикл
		else break;
	}
	//Возвращаем перевернутый массив с сохранением ключей
	return array_reverse($brc, true);
}

/**
 * @param $data array
 * @return string
 * Выводим хлебные крошки
 */
?> 
	<div style="position: absolute;  color: gray">
 <div style="position: relative; z-index: 4; left: 147px; top: -20px">
 
 	<?
function getBrc($data){ 
	//Проверяем что массив не пуст
	if(empty($data)){
		return false;
	}else {
		$brc = $data;
		$brc_menu = '';
		//Перебераем массив для построения хлебных крошек
			foreach ($brc as $id => $title) {
			 $brc_menu .= '<a style="align:left; color: green; text-decoration: none;" href="?id=' . $id . '">' . $title . '</a> / '; 
		
		}  

		//Обрезаем последний слэш
		$brc_menu = rtrim($brc_menu, ' / ');

		//удаляем ссылку на последний элемент в крошках
		return preg_replace('#(.+)?<a.+>(.+)</a>$#', '$1$2', $brc_menu);
 	} 
} 

//Получаем HTML разметку
$cat_menu = showCat($tree);

//Получаем массив с крошками
$arr_brc = breadcrumb($cat, $id);

//Получаем строку с крошками
$brc = getBrc($arr_brc);

//Выводим хлебные крошки
echo $brc;
	 ?>	</div></div>	<? 
//Выводим на экран меню
echo $cat_menu; //'<select><option value="0">Выбери '. $cat_menu .'</select>'; 

?>