<?php

class Database
{
    // укажите свои собственные учетные данные для базы данных
    private $host = "mysql";
    private $db_name = "arsen_new";
    private $username = "root";
    private $password = "s123123";
    public $conn;

    // получение соединения с базой данных
    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Ошибка соединения: " . $exception->getMessage();
        }
          
        return $this->conn;
    }
    
}  ?>