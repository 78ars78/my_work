<?php

// получаем ID товара
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

// подключаем файлы для работы с базой данных и файлы с объектами
include_once "config/database.php";
include_once "auto_product.php";

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();
 
// подготавливаем объекты
$product = new Product($db);


// устанавливаем свойство ID товара для чтения
$product->id = $id;

// получаем информацию о товаре
$product->readOne();


// установка заголовка страницы
$page_title = "Страница товара (чтение одного товара)";

require_once "layout_header.php";
?>

<!-- ссылка на все товары -->

<!-- HTML-таблица для отображения информации о товаре -->
<table class="table table-hover table-responsive table-bordered">
    <tr>
        <td>Название</td>
        <td><?= $product->name; ?></td>
    </tr>
    <tr>
        <td>Цена</td>
        <td><?= $product->marka; ?></td>
    </tr>
    <tr>
        <td>Описание</td>
        <td><?= $product->model; ?></td>
    </tr>
    <tr>
        <td>Категория</td>
        <td>
            
        </td>
    </tr>
</table>


<?php // подвал
require_once "layout_footer.php"; ?>