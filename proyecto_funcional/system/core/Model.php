<?php
require_once("system/config.php");

abstract class Model
{
    abstract protected function create($data_array);
    abstract protected function read($data_array);
    abstract protected function update($data_array);
    abstract protected function delete($data_array);

    protected $pdo;

    public function __construct()
    {
        $this->connection_to_BD();
    }
    public function __destruct()
    {
        $this->pdo = null;
    }
    public function connection_to_BD()
    {
        $dsn = DATABASE_SERVER . ":host=" . HOST . ";dbname=" . DATABASE_NAME . ";charset=" . CHARSET;
        $options = [
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
        ];
        try{
            $this->pdo = new PDO($dsn, USER, PASS, $options);
        }catch(Exception $e){
            error_log($e->getMessage());
            exit('error in database connection');
        }
    }
}