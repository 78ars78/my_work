<?php

class Product
{  
// подключение к базе данных и имя таблицы
    private $conn;
    private $table_name = "auto";

// свойства объекта
    public $id;
    public $name;
    public $itog_0;
    public $itog;
    public $marka;
    public $model;
        
public function __construct($db)
{
        $this->conn = $db;
}

// используется для пагинации товаров
public function countAll($j,$l)
{
    // запрос MySQL
    $query = "SELECT id FROM " . $this->table_name . " WHERE j=$j AND l=$l";
 
    $stmt = $this->conn->prepare($query);

    $stmt->execute();

    $num = $stmt->rowCount();

    return $num;
}


public function countAll1($j)
{
    // запрос MySQL
    $query = "SELECT id FROM auto WHERE j=$j";
 
    $stmt = $this->conn->prepare($query);

    $stmt->execute();

    $num = $stmt->rowCount();

    return $num;
}


public function countAll2()
{
    // запрос MySQL
    $query = "SELECT id FROM auto";
 
    $stmt = $this->conn->prepare($query);

    $stmt->execute();

    $num = $stmt->rowCount();

    return $num;
}



// метод создания товара


// метод для получения товаров
function readAll($from_record_num, $records_per_page)
{
    // запрос MySQL
    $query = "SELECT
                id, itog_0, marka, model
            FROM
                " . $this->table_name . " 
            ORDER BY
                id ASC
            LIMIT
                {$from_record_num}, {$records_per_page}";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt;
}


// метод для получения товара
function readOne()
{
    // запрос MySQL
    $query = "SELECT
                itog, marka, model
            FROM
                " . $this->table_name . "
            WHERE
                id = ?
            LIMIT
                0,1";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    
    $this->model = $row["model"];
    $this->marka = $row["marka"];
    $this->itog = $row["itog"];
}


function auto()
{
    // запрос MySQL
    $query = "SELECT razr , id FROM auto_razr WHERE j=0 ORDER BY id";

    $stmt1 = $this->conn->prepare($query);
    $stmt1->execute();

    return $stmt1;
}

function auto1($g)
{
    // запрос MySQL
    $query = "SELECT фирма, shoes,text,model, marka,id,itog_0,itog FROM auto $g";

    $stmt11 = $this->conn->prepare($query);
    $stmt11->execute();

    return $stmt11;
}



function autoRazr($j)
{   
    // запрос MySQL
    $query = "SELECT razr , id FROM auto_razr WHERE j=? ORDER BY id";
    
    $stmt2 = $this->conn->prepare($query);
    $stmt2->bindParam(1, $j);
    $stmt2->execute();

    return $stmt2;
}



function motoRazr()  
{
    $query = "SELECT razr, jl FROM moto_razr ORDER BY id";

    $stmt3 = $this->conn->prepare($query);
    $stmt3->execute();

    return $stmt3;

}


function motoRazr1()  
{
    $query = "SELECT razr, jl FROM moto_razr ORDER BY id";

    $stmt10 = $this->conn->prepare($query);
    $stmt10->execute();

    return $stmt10;

}

function moto_count($jl,$bb2)
{ 

    $query = "SELECT COUNT(*) FROM moto WHERE jl=$jl[0]  $bb2";
    
    $stmt8 = $this->conn->prepare($query);
    $stmt8->execute();
    return $stmt8;
}


function moto_f($jl,$bb,$order,$start,$num)
{ 

    $query = "SELECT * FROM moto WHERE jl=$jl[0] $bb  ORDER BY $order LIMIT $start, $num";
    
    $stmt9 = $this->conn->prepare($query);
    $stmt9->execute();
    return $stmt9;
}


function moto_f1($jl,$bb,$order,$start,$num)
{ 

    $query = "SELECT * FROM moto WHERE jl=$jl[0] $bb  ORDER BY $order DESC LIMIT $start, $num";
    
    $stmt9 = $this->conn->prepare($query);
    $stmt9->execute();
    return $stmt9;
}



function moto($b)
{ 

    $query = "SELECT price,name FROM moto WHERE jl='$b'";
    
    $stmt4 = $this->conn->prepare($query);
    $stmt4->execute();
    return $stmt4->rowCount();
}
 	

function moto_m()
{

    $query = "SELECT razr FROM moto_razr";

    $stmt5 = $this->conn->prepare($query);
    $stmt5->execute();

    return $stmt5;
    
}


function autoMinCount($j)
{

    $query = "SELECT COUNT(*) FROM auto WHERE j='$j' ";

    $stmt6 = $this->conn->prepare($query);
    $stmt6->execute();

    return $stmt6;
    
}
/* для auto_min */
function order($j,$l,$order,$from_record_num,$records_per_page)
{

    $query = "SELECT id,itog_0,marka,model FROM auto WHERE j='$j' AND l='$l'  ORDER BY $order LIMIT {$from_record_num}, {$records_per_page} ";

    $stmt7 = $this->conn->prepare($query);
    $stmt7->execute();

    return $stmt7;
    
}


/* для auto_min */
function orderDesc($j,$l,$order,$from_record_num,$records_per_page)
{

    $query = "SELECT id,itog_0,marka,model,l FROM auto WHERE j='$j' AND l='$l'  ORDER BY $order DESC LIMIT {$from_record_num}, {$records_per_page} ";

    $stmt7 = $this->conn->prepare($query);
    $stmt7->execute();

    return $stmt7;
    
}


/* для auto_min1 */
function order1($j,$order,$from_record_num,$records_per_page)
{

    $query = "SELECT id,itog_0,marka,model FROM auto WHERE j='$j'  ORDER BY $order LIMIT {$from_record_num}, {$records_per_page} ";

    $stmt7 = $this->conn->prepare($query);
    $stmt7->execute();

    return $stmt7;
    
}


/* для auto_min1 */
function orderDesc1($j,$order,$from_record_num,$records_per_page)
{

    $query = "SELECT id,itog_0,marka,model,l FROM auto WHERE j='$j' ORDER BY $order DESC LIMIT {$from_record_num}, {$records_per_page} ";

    $stmt7 = $this->conn->prepare($query);
    $stmt7->execute();

    return $stmt7;
    
}




/* для auto_min2 */
function order2($order,$from_record_num,$records_per_page)
{

    $query = "SELECT id,itog_0,marka,model FROM auto ORDER BY $order LIMIT {$from_record_num}, {$records_per_page} ";

    $stmt7 = $this->conn->prepare($query);
    $stmt7->execute();

    return $stmt7;
    
}


/* для auto_min2 */
function orderDesc2($order,$from_record_num,$records_per_page)
{

    $query = "SELECT id,itog_0,marka,model FROM auto ORDER BY $order DESC LIMIT {$from_record_num}, {$records_per_page} ";

    $stmt7 = $this->conn->prepare($query);
    $stmt7->execute();

    return $stmt7;
    
}









// метод для обновления товара



// метод для удаления товара


} 

?>
